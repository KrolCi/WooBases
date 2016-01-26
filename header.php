<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php wp_title() ?></title>
	<!-- metatags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?php bloginfo('description') ?>">

    <!-- link / scripts -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body>
<header id="main-header">
    <div class="wrap">
        <div class="head-info">
            <?php
                if ( is_front_page() || is_home() ) :
                    ?><h1 class="webname" rel="home"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1><?php
                else :
                   ?><h2 class="webname" rel="home"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h2><?php
                endif;
                ?>
            <span><?php bloginfo('description'); ?></span>
        </div><!-- end #head-info -->
        <nav class="head-menu colapsa">
            <div class="nav-show fa fa-bars"></div><?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </div><!-- end #wrap -->
</header>
