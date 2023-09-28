<?php
/**
 * OCR_P11 theme functions and definitions
 */

/* Chargement des différents fichiers du thème */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
	wp_enqueue_style('OCR_P11-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    wp_enqueue_style('header-style', get_stylesheet_directory_uri() . '/css/header.css', array(), filemtime(get_stylesheet_directory() . '/css/header.css'));
	wp_enqueue_style('footer-style', get_stylesheet_directory_uri() . '/css/footer.css', array(), filemtime(get_stylesheet_directory() . '/css/footer.css'));
	wp_enqueue_style('page-style', get_stylesheet_directory_uri() . '/css/page.css', array(), filemtime(get_stylesheet_directory() . '/css/page.css'));
	wp_enqueue_style('single-style', get_stylesheet_directory_uri() . '/css/single.css', array(), filemtime(get_stylesheet_directory() . '/css/single.css'));
    wp_enqueue_style('modale-contact-style', get_stylesheet_directory_uri() . '/css/modale-contact.css', array(), filemtime(get_stylesheet_directory() . '/css/modale-contact.css'));
    wp_enqueue_script('script-modale-contact', get_stylesheet_directory_uri() . '/js/modale-contact.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));

}

/* Ajout de la fonctionnalité menu */
function register_menus()
{
	register_nav_menus( array( 'header-menu-ajout' => __( 'Header Menu' )));
    register_nav_menus( array( 'footer-menu-ajout' => __( 'Footer Menu' )));
}
add_action( 'init', 'register_menus' );

/* Retrait espace haut de html pour barre admin */
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');