<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="Description" content="<?= bloginfo('description'); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<?php add_theme_support( 'automatic-feed-links' ); ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css" type="text/css" media="screen" />
		
		<link href="<?php bloginfo('template_directory') ?>/prettify/prettify.css" type="text/css" rel="stylesheet" />

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/prettify/prettify.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory') ?>/main.js" type="text/javascript"></script>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="container">
			<!-- header start -->
			<header id="blogHeader">
				<nav>
					<ul>
  						<?php wp_list_pages('include=1,2,6,7&sort_column=menu_order&title_li=' ); ?>
					</ul>
				</nav>
				<ul id="follow">
					<li><a rel="me" href="<?= bloginfo('url'); ?>/feed" title="RSS Feed" class="follow rss"><span>rss</span></a></li>
					<li><a rel="me" href="http://github.com/irfan" title="fork me on github" class="follow github"><span>github</span></a></li>
					<li><a rel="me" href="http://tr.linkedin.com/in/irfandurmus" title="linkedin profile" class="follow linkedin"><span>linkedin</span></a></li>
					<li><a rel="me" href="http://twitter.com/irfandurmus" title="follow me on twitter" class="follow twitter"><span>twitter</span></a></li>
					<li><a rel="me" href="http://delicious.com/irfandurmus" title="follow me on delicious" class="follow delicious"><span>delicious</span></a></li>
					<li><a rel="me" href="http://flickr.com/irfandurmus" title="follow me on flickr"  class="follow flickr"><span>flickr</span></a></li>
					<li><a rel="me" href="http://slideshare.net/irfandurmus" title="follow me on slideshare" class="check my presentation on slideshare"><span>slideshare</span></a></li>
				</ul>
			</header>

