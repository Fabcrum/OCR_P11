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
	wp_enqueue_style('photo-single-style', get_stylesheet_directory_uri() . '/css/photo-single.css', array(), filemtime(get_stylesheet_directory() . '/css/photo-single.css'));
    wp_enqueue_style('modale-contact-style', get_stylesheet_directory_uri() . '/css/modale-contact.css', array(), filemtime(get_stylesheet_directory() . '/css/modale-contact.css'));
    wp_enqueue_style('pagination-photo-style', get_stylesheet_directory_uri() . '/css/pagination-photo.css', array(), filemtime(get_stylesheet_directory() . '/css/pagination-photo.css'));
    wp_enqueue_script('script-modale-contact', get_stylesheet_directory_uri() . '/js/modale-contact.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));
}

// Ajout de la fonctionnalité menu 
function register_menus()
{
	register_nav_menus( array( 'header-menu-ajout' => __( 'Header Menu' )));
    register_nav_menus( array( 'footer-menu-ajout' => __( 'Footer Menu' )));
}
add_action( 'init', 'register_menus' );

// Ajout prise en charge images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajout titre du site dans l'en-tête
add_theme_support( 'title-tag' );

// Retrait préfixes sur les pages d'archives */
//add_filter( 'get_the_category_prefix', '__return_false' );
//add_filter( 'get_the_taxonomies_prefix', '__return_false' );
//add_filter( 'rest_get_url_prefix', '__return_false' );


// Retrait espace haut de html pour barre admin 
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');