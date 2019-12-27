<!DOCTYPE html>
<!--[if IE 7]>
	<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
	<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-283194-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-283194-1');
	</script>
	
	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" media="screen"  href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if lt IE 9]>
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-ie.css" type="text/css" media="screen" />
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php get_template_part('inc/header-plugins'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header-wrap">
	<header id="masthead" class="site-header clearfix" role="banner">
		<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="33 Degrees Design Studio" rel="home">33 Degrees Design Studio</a></h1>
		<nav id="site-navigation" class="main-navigation">
			<h3 id="menu-toggle"><a href="#"><span class="menu-icon" aria-hidden="true" data-icon="&#xe000;"></span> <span class="menu-text">Menu</span></a></h3>
			<ul id="nav-menu" class="menu" role="navigation">
				<?php wp_list_pages('sort_column=menu_order&depth=1&exclude=2&title_li=');?>
			</ul>
		</nav><?php // ------- #site-navigation ------- ?>
	</header><?php // ------- #masthead ------- ?>