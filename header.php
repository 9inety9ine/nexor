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
	<meta name="description" content="Nexor Test Theme" />
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon.png" type="image/x-icon"/>
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/assets/application.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="wrap wrap--x-large wrap--no-padding">
			<div class="inner">
				<div class="branding">
					<a href="<?php bloginfo('url'); ?>" aria-label="<?php bloginfo('name'); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/assets/logo.png" width="120" height="74" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
				<nav>
					<?php wp_nav_menu(array('theme_location'=>'main')); ?>
				</nav>
				<button aria-label="Mobile Menu">
					<?php include_once('snippets/icon-menu.svg'); ?>
				</button>
			</div>
		</div>
	</header>