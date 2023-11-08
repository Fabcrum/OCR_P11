<?php
/**
 * The template for displaying the header
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<!-- Inclure jQuery et Selectize.js
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>
	-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
<div id="page">

	<header>
		<div id="header-container">
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
			</nav>
			<nav id="site-navigation_mobile">
				<div id="bouton-menu">
					<div id="menu-ouvert">
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
					</div>
				</div>
			</nav>
		</div>
	</header>

    <div id="content">
		<main id="main">
