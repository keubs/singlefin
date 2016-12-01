<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />

	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6025554/793926/css/fonts.css" />
	<link rel="icon" type="image/png" href="<?php echo THEME_DIR . '/img/favicon.png'; ?>" />
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">

	<div class="header main-header">
        <div class="header-top">
            <div class="container" style="height: 45px; position: relative">
                <!-- <a href="<?php echo SITE_URL; ?>" class="header-top-logo top"></a> -->
                <a href="<?php echo SITE_URL; ?>" class="header-top-logo"></a>
                <div class="header-top-menu home">
                    <a class="header-top-menu-link" href="#work">Work</a>
                    <a class="header-top-menu-link" href="#about">About</a>
                    <a class="header-top-menu-link" href="#contact">Contact</a>
                </div>
                <div class="header-top-menu single-page">
                    <a class="header-top-menu-link" href="<?php echo SITE_URL; ?>#work">Work</a>
                    <a class="header-top-menu-link" href="<?php echo SITE_URL; ?>#about">About</a>
                    <a class="header-top-menu-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </div>