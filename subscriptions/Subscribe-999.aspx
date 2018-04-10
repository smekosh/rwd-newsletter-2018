<%@ Page Language="C#" AutoEventWireup="true" %>

<%@ Assembly Name="eSymphonie" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
	    <link rel="stylesheet" href="CSS/Styles_External.css" type="text/css" media="screen" />
</head>
<body>
    <form id="form1" runat="server">
		<script language="c#" runat="server">
			protected void Page_Load(object sender, EventArgs e)
			{
				EmailTB.Focus();
			}

			protected void SubscribeButton_Click(object sender, EventArgs e)
			{
				try
				{
					string customerName;
					string serviceAddress;
					string sessionKey;

					RecipientWebSite.Helpers.GetCustomerData(Request, out customerName, out serviceAddress);
					if (RecipientWebSite.Global.LoginApi(customerName, Context.Cache, Request, serviceAddress, out sessionKey))
					{
						Remoteable.IRecipientDirect proxy = RecipientWebSite.Global.recipientDirectChannelFactory[serviceAddress].CreateChannel();
						System.ServiceModel.IClientChannel channel = (System.ServiceModel.IClientChannel)proxy;

						int addResult = proxy.CreateRecipient(sessionKey, EmailTB.Text, string.Empty, null);

						if (addResult > 0)
						{
							bool subscribeResult = proxy.SubscribeRecipient(sessionKey, addResult, 999);

							EmailDiv.Visible = false;

							if (subscribeResult)
								MessageLabel.Text = "Thank you for subscribing to Persian News, your daily guide to news, features, and analysis.";
							else
								MessageLabel.Text = "There was an issue adding your record.  Please try again later.";
						}
						else if (addResult == -9)
							MessageLabel.Text = "Invalid email address.  Please try again.";
						else if (addResult == -15)
						{
							int memberId = proxy.GetRecipientId(sessionKey, EmailTB.Text);

							bool subscribeResult = proxy.SubscribeRecipient(sessionKey, memberId, 999);

							EmailDiv.Visible = false;

							if (subscribeResult)
								MessageLabel.Text = "Thank you for subscribing to Persian News, your daily guide to news, features, and analysis.";
							else
								MessageLabel.Text = "You are already subscribed!";
						}
						else if (addResult == -18)
							MessageLabel.Text = "This email address cannot be used.  Please provide your personal email address";

						if (channel.State == System.ServiceModel.CommunicationState.Opened)
							channel.Close();
						else if (channel.State == System.ServiceModel.CommunicationState.Faulted)
							channel.Abort();
					}
					else
					{
						MessageLabel.Text = "Unable to process the request at this time.  Please try again later.";
					}
				}
				catch (System.Exception ex)
				{
					MessageLabel.Text = "Unable to process the request at this time.  Please try again later.";
					RecipientWebSite.ErrorLog.WriteErrorLog(ex, "Customer/Subscribe-x.aspx", Page.Request);
				}
			}
		</script>

  		<telerik:RadScriptManager ID="RadScriptManager1" runat="server" EnableScriptCombine="true">
			<Scripts>
				<%--Needed for JavaScript IntelliSense in VS2010--%>
				<%--For VS2008 replace RadScriptManager with ScriptManager--%>
				<asp:ScriptReference Assembly="Telerik.Web.UI" Name="Telerik.Web.UI.Common.Core.js" />
				<asp:ScriptReference Assembly="Telerik.Web.UI" Name="Telerik.Web.UI.Common.jQuery.js" />
				<asp:ScriptReference Assembly="Telerik.Web.UI" Name="Telerik.Web.UI.Common.jQueryInclude.js" />
			</Scripts>
		</telerik:RadScriptManager>

		<telerik:RadFormDecorator ID="RadFormDecorator0" DecoratedControls="Buttons,CheckBoxes,RadioButtons,Scrollbars,Select,Textbox,Fieldset,Textarea,label" runat="server" />

		<div align="center">
			<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#FFFFFF; border: solid 10px #e9ebec; max-width: 650px; border-collapse: collapse; ">
				<tr>
					<td>
						<table border="0" cellspacing="0" cellpadding="0" height="110">
							<tr valign="middle">
								<td align="left" style="background-color: #FFFFFF; color:#3D3D3D; padding-left: 10px">	        
									<img src="http://gdb.voanews.com/C5A02249-899B-4CE0-9293-F9DA23A8FDAB.png" alt=""/>
								</td>
								<td align="right" style="background-color: #FFFFFF; height:75px; color:#5C666F; padding-right: 10px; width:100%; padding-left: 40px; ">	        
									<!-- the text and appearance of the page's initial heading may be changed -->
									<h2 style="font-family: Tahoma, helvetica, sans-serif;line-height:10px;">Persian News</h2>
									<p style="font-family: Tahoma, helvetica, sans-serif; font-size:12px; text-decoration:none;">Daily International News.</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr valign="middle" style="border-top: solid 5px #e9ebec;">
					<td align="center">
						<div runat="server" id="EmailDiv">
							<p style="padding: 10px; font-family: Tahoma, helvetica, sans-serif; font-size: 14px; color:#5C666F;">To subscribe to the Persian News publication, provide your email address<br />and press the button below.</p>
							<telerik:RadTextBox runat="server" InputType="Email" MaxLength="75" ID="EmailTB" />
							<asp:Button runat="server" Text="Subscribe" ID="SubscribeButton" OnClick="SubscribeButton_Click" />
						</div>
						<div style="padding: 10px; font-family: Tahoma, helvetica, sans-serif; font-size: 14px; color:#5C666F">
							<asp:Label runat="server" ID="MessageLabel" />
						</div>
						<p style="padding: 2px; font-family: Tahoma, helvetica, sans-serif; font-size: 10px; color:#5C666F;"><a href="http://www.voanews.com/p/5338.html"> TERMS OF USE</a></p>
					</td>
				</tr>
			</table>
		</div>
    </form>
</body>
</html>
