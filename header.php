<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php if (is_page(2)) { ?>
	<title>Nexor</title>
    <?php } elseif (is_single()) { ?>
	<title>Nexor - <?php wp_title(''); ?></title>
    <?php } ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" type="image/x-icon"/>
	<?php wp_head(); ?>
    <link href="//fonts.googleapis.com" rel="preconnect">
    <link href="//fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;1,300;1,600&display=swap" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/assets/application.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="wrap wrap--x-large">
			<div class="inner">
				<div class="branding">
					<a href="<?php bloginfo('url'); ?>" aria-label="<?php bloginfo('name'); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/assets/logo.png" width="120" height="74" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
				<nav>
					<?php wp_nav_menu(array('theme_location'=>'main')); ?>
				</nav>
			</div>
		</div>
	</header>