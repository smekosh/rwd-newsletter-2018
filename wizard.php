<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	<title>Newsletter Wizard</title>
	<style type="text/css">
		
		*, *:before, *:after {
			box-sizing: border-box;
		}
		
		body {
			background-color: #f2f2f2;
			color: #222;
			font-family: Helvetica, Arial, sans-serif;
			font-size: 16px;
			line-height: 1.35;
			margin: 0;
		}
		
		h1, h2 { margin: 0; }
		
		a       { color: #1330bf; text-decoration: underline; }
		a:hover { color: #d41010; text-decoration: underline; }
		
		img { display: block; }
		
		.container {
			margin: 1rem auto;
			max-width: 720px;
			width: 100%;
		}
		
		form {
			margin: 0;
			padding: 0;
		}
		
		label, option, input {
			font-size: 16px;
		}
		
		fieldset {
			background-color: #fcfcfc;
			border: 0;
			border-bottom: 2px solid #eee;
			margin: 1rem 0;
			padding: 1rem;
		}
		
		.label {
			display: block;
			font-weight: bold;
			margin: 0;
			padding: 0 0 .5rem 0;
		}
		
		fieldset.submit {
			background-color: transparent;
			border: 0;
			padding: 0;
		}
		
		.submit > label > input {
			background-color: #1330bf;
			border: 0;
			border-radius: .25rem;
			color: #fff;
			font-size: 16px;
			padding: .5rem .75rem;
		}
		
	</style>
</head>

<body>
	
	<div class="container">
		
		<form method="get" action="newsletter.php">
			
			<h1>Newsletter Wizard</h1>
			
			<fieldset>
				<label for="lang" class="label">Language</label>
				
				<select name="lang" id="lang">
					<option value="en">English</option>
					<option value="id">Indonesian</option>
					<option value="es">Spanish</option>
				</select>
			</fieldset>
			
			<fieldset>
				<label for="g_topic_id" class="label">Goolara Topic ID</label>
				<input type="number" name="g_topic_id" id="g_topic_id" maxlength="4" value="" />
			</fieldset>
			
			<fieldset>
				<label for="p_topic_id" class="label">Pangea Topic ID</label>
				<input type="number" name="p_topic_id" id="p_topic_id" maxlength="4" value="" />
			</fieldset>
			
			<fieldset>
				<label for="newsletterslug" class="label">Newsletter Slug</label>
				<input type="text" name="newsletterslug" id="newsletterslug" value="" />
			</fieldset>
			
			<fieldset>
				<p class="label">Layout:</p>
				<label><input type="radio" name="layout" value="standard" checked /> Standard</label>
				<label><input type="radio" name="layout" value="compact" /> Compact</label>
				<label><input type="radio" name="layout" value="direct" /> Direct</label>
				<label><input type="radio" name="layout" value="fulltext" /> Fulltext</label>
			</fieldset>
			
			<fieldset>
				<label for="itemcount" class="label">How many articles/items should be shown?</label>
				<select name="itemcount" id="itemcount">
					<?php 
					for( $i = 1; $i <= 20; $i++ ) {
						echo '<option value="'.$i.'"'.($i == 5 ? " selected" : "").'>'.$i.'</option>';
					}
					?>
				</select>
			</fieldset>
			
			<fieldset>
				<p class="label">Show content type?</p>
				<label><input type="radio" name="showcontenttype" value="1" checked /> Yes</label>
				<label><input type="radio" name="showcontenttype" value="0" /> No</label>
			</fieldset>
			
			<fieldset>
				<p class="label">Show zone dividers?</p>
				<label><input type="radio" name="showzones" value="1" /> Yes</label>
				<label><input type="radio" name="showzones" value="0" checked /> No</label>
			</fieldset>
			
			<fieldset>
				<p class="label">Show publication dates?</p>
				<label><input type="radio" name="showpubdates" value="1" checked /> Yes</label>
				<label><input type="radio" name="showpubdates" value="0" /> No</label>
			</fieldset>
			
			<fieldset>
				<p class="label">Show bylines?</p>
				<label><input type="radio" name="showbylines" value="1" checked /> Yes</label>
				<label><input type="radio" name="showbylines" value="0" /> No</label>
			</fieldset>
			
			<fieldset>
				<p class="label">Show newsletter description?</p>
				<label><input type="radio" name="showdescription" value="1" /> Yes</label>
				<label><input type="radio" name="showdescription" value="0" checked /> No</label>
			</fieldset>
			
			<fieldset>
				<p class="label">Show link to web browser view?</p>
				<label><input type="radio" name="showviewweblink" value="1" /> Yes</label>
				<label><input type="radio" name="showviewweblink" value="0" checked /> No</label>
			</fieldset>
			
			<fieldset>
				<p class="label">View preview or export data?</p>
				<label><input type="radio" name="export" value="0" checked /> Preview</label>
				<label><input type="radio" name="export" value="1" /> Export</label>
			</fieldset>
			
			<fieldset class="submit">
				<label><input type="submit" value="Generate" /></label>
			</fieldset>
			
		</form>
	</div>
	
</body>
</html>
