<?php

$fulltext_sample_body = <<<'EOTBODYCONTENT'

<p><strong>США: иммиграционная реформа</strong></p>
<p>Президент США Дональд Трамп в четверг <a class="wsw__a" href="https://www.golos-ameriki.ru/a/may-16th-trump-announces-a-new-immigration-plan/4919542.html " target="_blank">представил новый план иммиграционной реформы</a>, разработанный его администрацией. Трамп заявил, что его план включает в себя радикальную модернизацию “плохо функционирующего юридического процесса иммиграции” и предложил изменить принцип выдачи “грин-карт” в пользу образованных и высококвалифицированных специалистов </p>
<p><strong>Финансы президента</strong></p>
<p>Президент Трамп по-прежнему отказывается обнародовать свою налоговую декларацию, но в четверг Управление правительственной этики раскрыло данные о доходах президента в 2018 году. </p>
<p> В финансовом отчете говорится, что президент Трамп в 2018 году взял <a class="wsw__a" href="https://www.golos-ameriki.ru/a/trump-finance-disclosure/4920438.html " target="_blank">новый ипотечный кредит на срок до 30 лет</a> под залог принадлежащей ему недвижимости в Уэст-Палм-Бич в штате Флорида. </p>
<p><strong>Что не так с Whatsapp?</strong></p>
<p><a class="wsw__a" href="https://www.golos-ameriki.ru/a/breach-whatsapp-threatens-human-rights-advocates/4917876.html " target="_blank">Сбой в системе безопасности мессенджера Whatsapp</a> мог быть использован правительствами нескольких государств для слежки за правозащитниками. Компания еще расследует причины сбоя и попросит всех пользователей обновить приложение. </p>
<p><strong>3D для котов</strong></p>
<p>Студенты инженерного факультета университета Висконсина спасают котов-инвалидов <a class="wsw__a" href="https://www.youtube.com/watch?v=pWqVt2rQE1w " target="_blank">с помощью 3D-принтера</a>.</p>

EOTBODYCONTENT;



$data = array(
	
	'system' => array(
		'base_url'          => 'https://www.golos-ameriki.ru/',
		'send_date'         => date( $config['date_format'] ),
		'topic_id'          => '123',
		'topic_title'       => 'VOAэкспресс',
		'topic_description' => 'A short description of this newsletter',
	),
	
	'article' => array(
		'title'             => 'VOAэкспресс 16 мая 2019',
		'title_caps'        => 'VOAЭКСПРЕСС 16 МАЯ 2019',
		'intro'             => 'Президент США Дональд Трамп в четверг представил новый план иммиграционной реформы, разработанный его администрацией.',
		'content'           => $fulltext_sample_body,
		'url'               => 'https://www.golos-ameriki.ru/a/voa-express-0516/4921985.html',
		'publication_date'  => 'May 16, 2019',
		'content_type'      => 'Article',
		'author'            => 'VOA News',
		'dateline'          => 'Washington, DC',
		'image_first_item'  => 'https://gdb.voanews.com/54013788-ca1c-465f-bb4d-3e7aed43a729_tv_w'.$design['body_width'].'.jpg',
		'image_nth_item'    => 'https://gdb.voanews.com/54013788-ca1c-465f-bb4d-3e7aed43a729_tv_w'.($design['body_width']/2).'.jpg',
		'image_compact_item'=> 'https://gdb.voanews.com/54013788-ca1c-465f-bb4d-3e7aed43a729_tv_w'.($design['body_width']/4).'.jpg',
		'bbg_direct_url'    => 'https://www.bbgdirect.com/en-US#ItemDetail/1/16/3752057'
	),
	
	'zone' => array(
		'name'         => 'Не пропустите'
	)
);
