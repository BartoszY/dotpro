<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="<?= get_template_directory_uri(); ?>/prod/img/favicon.png" rel="shortcut icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Roboto+Mono&display=swap" rel="stylesheet">

	<link rel="preload" as="image" href="<?= get_template_directory_uri(); ?>/prod/img/logo-big.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="header">
		<a href="<?php echo get_home_url(); ?>" class="header__logo">
			<img src="<?= get_template_directory_uri(); ?>/prod/img/logo.png" alt="<?php bloginfo('name'); ?>">
		</a>

		<button class="header__burger" data-burger>
			<span></span><span></span><span></span>
		</button>
	</header>

	<nav class="nav">
		<div class="nav__bg">
			<div class="nav__bg__item nav__bg__item--first"></div>
			<div class="nav__bg__item nav__bg__item--second"></div>
			<div class="nav__bg__item nav__bg__item--third"></div>
		</div>

		<div class="nav__menus">
			<div class="nav__grid">
				<!-- <?php wp_nav_menu(array('theme_location' => 'main-menu-first', 'menu_id' => 'main-menu-first', 'menu_class' => 'header__nav__menu', 'container' => '')); ?> -->
				<!-- <?php wp_nav_menu(array('theme_location' => 'main-menu-second', 'menu_id' => 'main-menu-second', 'menu_class' => 'header__nav__menu', 'container' => '')); ?> -->
				<!-- <?php wp_nav_menu(array('theme_location' => 'main-menu-third', 'menu_id' => 'main-menu-third', 'menu_class' => 'header__nav__menu', 'container' => '')); ?> -->

				<?php wp_nav_menu(array('theme_location' => 'main-menu-first', 'walker' => new WPDocs_Walker_Nav_Menu() )); ?>
				<?php wp_nav_menu(array('theme_location' => 'main-menu-second', 'walker' => new WPDocs_Walker_Nav_Menu() )); ?>
				<?php wp_nav_menu(array('theme_location' => 'main-menu-third', 'walker' => new WPDocs_Walker_Nav_Menu() )); ?>
			</div>

			<div class="nav__grid">
				<a class="big-menu-item" href="#">Portfolio</a>
				<a class="big-menu-item" href="#">Case Studies</a>

				<div class="duo-menu-item">
					<a class="big-menu-item" href="/kontakt">Kontakt</a>
					<a class="big-menu-item" href="#">About</a>
				</div>
			</div>
		</div>

		<div class="nav__copyright">
			<div>
				dotpro.pl © - <?= date('Y') ?> - wszelkie prawa zastrzeżone
			</div>
			<div>
				<a href="#">Polityka prywatności</a> <span class="vertical-spacer">|</span> <a href="#">Dane firmy</a>
			</div>
		</div>
	</nav>
