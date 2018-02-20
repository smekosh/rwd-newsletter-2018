<?php

$fulltext_sample_body = <<<'EOTBODYCONTENT'

<p>U.S. President Donald Trump is expected to highlight a strong economy and call for bipartisan action on immigration as he gives his first State of the Union address Tuesday night.</p>
<p>The televised speech before a joint session of Congress comes a year after Trump took office and about a week after a three-day government shutdown spawned by a fight over the federal government budget and how to deal with hundreds of thousands of immigrants who years ago came to the country illegally as children.</p>
<p>White House officials said Trump will discuss jobs, the advancing U.S. economy and the recently adopted tax cuts, as well as call on lawmakers to approve his prospective trillion-dollar infrastructure plan to fix roads and bridges and modernize airports.</p>
<p>He also is expected to talk about national security issues, including North Korea's nuclear and ballistic missile activity, and also the need for fair trade policies after he pulled the U.S. out of the proposed 12-nation Trans-Pacific Partnership (TPP) and initiated a renegotiation of the North American Free Trade Agreement (NAFTA) with Mexico and Canada.</p>
<div><img data-imagetype="External" src="https://gdb.voanews.com/765187FD-421B-478C-AE1D-C2423C8915D7_w268.jpg">FILE- President Donald Trump's Twitter feed is photographed on a computer screen in Washington. April 3, 2017.</div>
<p>​​<strong>Year marked by Twitter attacks </strong><br>
<br>
Trump's year in office has been marked by his frequent Twitter attacks on his political opponents, Democratic lawmakers and the occasional Republican who have drawn his ire for opposing his policies.</p>
<p>In politically fractious Washington, however, the White House says Trump will give an optimistic speech, calling for resolution of contentious issues by both Republicans and Democrats working together. Officials say he will give a unifying speech of American values and patriotism.</p>
<p>Trump is giving his address at time when his voter approval ratings are the lowest ever for a president at this point in his four-year White House term, with the latest Gallup poll showing Americans disapprove of his handling of the presidency by a 58 percent to 38 percent margin. In nine months, American voters head to the polls again for congressional elections, with all 435 seats in the House of Representatives and one-third of the 100 Senate seats being contested.</p>
<div><img data-imagetype="External" src="https://gdb.voanews.com/F0D42C4F-9DC9-4DCA-9402-3D928AA985F2_w268.jpg">Special Counsel Robert Mueller departs after a closed-door meeting with members of the Senate Judiciary Committee about Russian meddling in the election and possible connection to the Trump campaign, at the Capitol in Washington, June 21, 2017.</div>
<p>​​<strong>Mueller's investigation</strong><br>
<br>
It is unclear whether Trump will discuss the overriding issue that dominates political discussions in Washington, special counsel Robert Mueller's ongoing investigation into Russia's meddling in the 2016 election and Trump campaign contacts with Moscow operatives.</p>
<p>&nbsp;In addition, Mueller is probing whether Trump obstructed justice when he fired James Comey, a former director of the FBI, who was heading the agency's Russia investigation at the time Trump dismissed him, leading to Mueller's appointment, over Trump's objections, to take over the probe.</p>
<p>Trump for months has denied any collusion with Russia and last week said there was "no obstruction." Trump said he wants to answer questions from Mueller's lawyers under oath, but no interview has yet been set up.</p>
<p>As is tradition, several Democrats will give <a href="https://www.voanews.com/a/newest-kennedy-in-congress-to-give-democratic-response-to-state-of-the-union-address-/4230673.html" target="_blank" rel="noopener noreferrer">shorter response speeches</a> after the president finishes his address.<br>
<br>
<strong>WATCH: History of annual presidential speech </strong></p>
<div></div>
<p>​​</p>
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
		'title'             => 'Presiden Turki Desak AS Tarik Pasukan dari Manbij',
		'title_caps'        => 'PRESIDEN TURKI DESAK AS TARIK PASUKAN DARI MANBIJ',
		'intro'             => 'Presiden Turki Recep Tayyip Erdogan menyerukan kepada Amerika untuk menarik mundur pasukannya dari kota Manbij di Suriah.',
		'content'           => $fulltext_sample_body,
		'url'               => 'https://www.voaindonesia.com/a/presiden-turki-desak-as-tarik-pasukan-dari-manbij-/4241906.html',
		'publication_date'  => '7 Maret 2017',
		'content_type'      => 'Article',
		'author'            => 'VOA News',
		'dateline'          => 'Washington, DC',
		'image_first_item'  => 'https://gdb.voanews.com/CD27FB3E-48E6-489B-8ADA-E0BF01E2E838_w'.$design['body_width'].'.jpg',
		'image_nth_item'    => 'https://gdb.voanews.com/CD27FB3E-48E6-489B-8ADA-E0BF01E2E838_w'.($design['body_width']/2).'.jpg',
		'image_compact_item'=> 'https://gdb.voanews.com/CD27FB3E-48E6-489B-8ADA-E0BF01E2E838_w'.($design['body_width']/4).'.jpg',
		'bbg_direct_url'    => 'https://www.bbgdirect.com/en-US#ItemDetail/1/16/3752057'
	)
);
