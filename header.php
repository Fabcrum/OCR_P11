<?php
/**
 * The header.
 * This is the template that displays all of the <head> section and everything up until main.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package WordPress
 * @subpackage OCR_P11
 * @since OCR_P11 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body>
<div id="page">

	<header>
		<a id="logo" href="<?php echo get_home_url() ?>" >
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.svg" />
		</a>

		<!-- AJOUT MENU -->
		<nav id="site-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'header-menu-ajout',
					'menu_class'      => '',
					'container_class' => '',
					'items_wrap'      => '<ul id="top-menu">%3$s</ul>',
					'fallback_cb'     => false,
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header>

    <div id="content">
		<main id="main">
