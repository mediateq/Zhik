<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/1styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slide.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lightbox.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/zepto.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mousewheel.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/easing.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slide.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<span class="myAnchor" id="myAnchor"></span>
	<div class="contain">
		<div class="hline"></div>
		<div class="container">
			<header class="header">
				<div class="head">
					<div class="search">
						<form action="http://www.google.com/search" method="get" target="_blank">
							<input type="hidden" name="sitesearch" value="www.zhik.pro" />
							<input type="text" name="search" class="searchbox" placeholder="جستجو در ژیک" />
							<input type="submit" name="submit" class="submit" value="جستجو" />
						</form>
					</div>
					<div class="logo">
						<a href="http://www.zhik.pro" title="zhik.pro">
							<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="zhik" />
						</a>
					</div>
					<div class="badboy"></div>
				</div>
				<nav>
					<?php
						wp_nav_menu(array(
							'theme_location'  => 'mainmenu',
							'container'       => false, 
							'container_class' => '', 
							'menu_class'      => '', 
							'before'          => '',
							'after'           => '',
							'link_before'     => '<p>',
							'link_after'      => '</p>',
							'items_wrap'      => '<menu>%3$s<li></li></menu>'
						));
					?>
					<div class="badboy"></div>
				</nav>
			</header>