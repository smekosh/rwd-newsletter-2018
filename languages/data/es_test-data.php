<?php

$fulltext_sample_body = <<<'EOTBODYCONTENT'

<p>Un influyente abogado de la Casa Blanca dice que el presidente Donald Trump no está considerando despedir al fiscal especialRobert Mueller, después de que el mandatario lo acusara de parcialización política en una serie de tuits el domingo.</p>
<p>“En respuesta a la especulación de la prensa y preguntas relacionadas formuladas a la administración, la Casa Blanca confirma de nuevo que el presidente no está considerando ni discutiendo el despido del fiscal especial Robert Mueller”, dijo el abogado de la Casa Blanca Ty Cobb.</p>
<p>Trump criticó al fiscal especial Robert Mueller, acusándolo de parcialidad política en su investigación sobre los vínculos de la campaña electoral de 2016.</p>
<p>En un mensaje de Twitter el domingo el presidente dijo que &quot;¿Por qué el equipo de Mueller tiene 13 demócratas fortalecidos, algunos grandes partidarios de la deshonesta Hillary y republicanos cero? Demócrata agregado recientemente ... ¿Alguien piensa que esto es justo? ¡Y, sin embargo, NO HAY COLUSIÓN!&quot;.</p>

<p>Trump dijo a través de su cuenta de Twitter el fin de semana, que recuerda su derrota de la aspirante demócrata Hillary Clinton y su visión negativa de las investigaciones.</p>
<p>El presidente ignoró sin embargo que Mueller era un votante republicano registrado y generalmente visto en Washington como un fiscal apolítico, cuya investigación de la campaña Trump cuenta con el apoyo de demócratas y republicanos.</p>

<div><img data-imagetype="External" src="https://gdb.voanews.com/BC033CF4-4B4A-4E65-BFCA-4C3C2B457960_w268.jpg">El Director Interino del FBI Andrew McCabe, a la derecha, acompa&#241;ado por el Fiscal General Jeff Sessions, segundo desde la izquierda. El Vice Fiscal Rod Rosenstein, sube al podio en una conferencia de prensa en el Departamento de Justicia el 20 de julio de 2017 en Washington.</div>

<p>El líder estadounidense también atacó a dos ex funcionarios del FBI destituidos, el ex director James Comey, despedido por Trump en mayo pasado, y el ex subdirector Andrew McCabe, despedidos por insistencia de Trump la tarde del viernes por el fiscal Jeff Sessions, 26 horas antes de que McCabe recogiera su pensión completa.</p>
<p>Trump afirmó que los recuerdos personales escritos de Comey y McCabe sobre las conversaciones que tuvo con ellos son inventados. Trump dijo que &quot;pasó muy poco tiempo con Andrew McCabe, pero nunca tomó notas cuando estaba conmigo. No creo que haya hecho memorandos excepto para ayudar con su propia agenda, probablemente en una fecha posterior. Lo mismo con mentir a James Comey. ¿Podemos llamarlos Memos falsos? En otro tweet, Trump se refirió al ex jefe del FBI como &quot;el santurrón James Comey&quot; y dijo que hizo que McCabe &quot;pareciera un niño de coro&quot;.</p>

<p>McCabe fue despedido tras hacer &quot;una revelación no autorizada a los medios noticiosos y carecía de franqueza, incluso bajo juramento, en múltiples ocasiones&quot;, una filtración de noticias que McCabe dijo que Comey sabía mientras servían juntos en el Oficina Federal de Investigaciones.</p>
<p><em><a href="https://www.voanoticias.com/a/fbi-mccabe-trump-despido-/4303740.html" target="_blank"><strong>Leer: McCabe acusa de represalia a Trump tras ser despedido</strong></a></em></p>
<p>Trump tuiteó sobre un segmento que vio en su programa de noticias favorito de la mañana, Fox and Friends, &quot;Wow, mire a Comey mentir bajo juramento&quot; en una audiencia en el Senado, &quot;cuando se le preguntó&quot; sobre si alguna vez ha sido una fuente anónima... &quot;Él dijo con no (...) Mintió claramente&quot;.</p>
<p>El presidente sostuvo que &quot;la investigación de Mueller se basó en actividades fraudulentas&quot;.</p>
<p>John Dowd, abogado personal de Trump, elogió a Sessions el sábado por despedir a McCabe, y luego sugirió al fiscal general adjunto Rod Rosenstein, que &quot;ponga fin&quot; a la investigación de Mueller.</p>
<p><strong><a href="https://www.voanews.com/a/trump-assails-special-counsel-mueller-as-politically-biases-in-russia-probe/4303880.html" target="_blank"><em>Leer: Abogado de Trump pide terminar con investigación sobre Rusia</em></a></strong></p>
<p>Poco después de que McCabe fue despedido, el presidente elogió la decisión en Twitter, calificándola como un &quot;gran día para la democracia&quot;.</p>
<p>El domingo, el Senador Senador Lindsey Graham de Carolina del Sur, un partidario de Trump, le dijo a CNN que Mueller &quot;debe poder hacer su trabajo sin interferencia. Graham dijo que si Trump intentara despedir a Mueller sería&quot; el comienzo del final de su presidencia &quot;.</p>
<p>El congresista Trey Gowdy, otro republicano de Carolina del Sur, le dijo a Fox News que &quot;cree que el abogado del presidente hace un mal servicio cuando dice lo que dice. Rusia atacó a nuestro país, dejen que Mueller, el asesor especial, lo descubra&quot;.</p>
<p>Gowdy formó parte de la mayoría republicana en el Comité de Inteligencia de la Cámara, que concluyó hace una semana no hubo colusión entre Rusia y la campaña de Trump, pero dijo en la entrevista televisiva que deseaba &quot;que el Asesor Especial Mueller se tome todo el tiempo y tenga toda la independencia que necesita para hacer su trabajo &quot;.</p>

<p>&nbsp;</p>

EOTBODYCONTENT;



$data = array(
	
	'system' => array(
		'base_url'          => 'https://www.voanews.com/',
		'send_date'         => date( $config['date_format'] ),
		'topic_id'          => '123',
		'topic_title'       => 'Newsletter Title',
		'topic_description' => 'A short description of this newsletter',
	),
	
	'article' => array(
		'title'             => 'Casa Blanca niega que Trump esté considerando despedir a fiscal especial',
		'title_caps'        => 'CASA BLANCA NIEGA QUE TRUMP ESTÉ CONSIDERANDO DESPEDIR A FISCAL ESPECIAL',
		'intro'             => 'Un influyente abogado de la Casa Blanca dice que el presidente Donald Trump no está considerando despedir al fiscal especialRobert Mueller, después de que el mandatario lo acusara de parcialización política en una serie de tuits el domingo.',
		'content'           => $fulltext_sample_body,
		'url'               => 'https://www.voanoticias.com/a/eeuu-trump-rusia-mueller-rusia-/4304087.html',
		'publication_date'  => 'Marzo 19, 2018',
		'content_type'      => 'Article',
		'author'            => 'Voz de América',
		'dateline'          => '',
		'image_first_item'  => 'https://gdb.voanews.com/634ED89F-7BD8-49D7-8B10-0B46B9263355_w'.$design['body_width'].'.jpg',
		'image_nth_item'    => 'https://gdb.voanews.com/634ED89F-7BD8-49D7-8B10-0B46B9263355_w'.($design['body_width']/2).'.jpg',
		'image_compact_item'=> 'https://gdb.voanews.com/634ED89F-7BD8-49D7-8B10-0B46B9263355_w'.($design['body_width']/4).'.jpg',
		'bbg_direct_url'    => 'https://www.bbgdirect.com/en-US#ItemDetail/1/16/3752057'
	)
);
