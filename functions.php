<?php
/**
 * OCR_P11 theme functions and definitions
 */

/* Chargement des différents fichiers du thème */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Spécifique page d'accueil 
    if (is_front_page()) {
        wp_enqueue_script('script-ajax_filtres', get_stylesheet_directory_uri() . '/js/ajax_filtres.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));
        wp_enqueue_script('script-ajax_charger_plus', get_stylesheet_directory_uri() . '/js/ajax_charger_plus.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));
        wp_enqueue_script('script-select2', get_stylesheet_directory_uri() . '/js/select2.min.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));
        wp_enqueue_style('select2-style', get_stylesheet_directory_uri() . '/css/select2.min.css', array(), filemtime(get_stylesheet_directory() . '/css/select2.min.css'));
    }
    // Spécifique pages single cpt photo
    if (is_singular('cpt-photo')) {
        wp_enqueue_script('script-pagination-photo', get_stylesheet_directory_uri() . '/js/pagination-photo.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));
        wp_enqueue_script('script-ajax_toutes_les_photos', get_stylesheet_directory_uri() . '/js/ajax_toutes_les_photos.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));
    }
	wp_enqueue_style('OCR_P11-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    wp_enqueue_style('header-style', get_stylesheet_directory_uri() . '/css/header.css', array(), filemtime(get_stylesheet_directory() . '/css/header.css'));
	wp_enqueue_style('footer-style', get_stylesheet_directory_uri() . '/css/footer.css', array(), filemtime(get_stylesheet_directory() . '/css/footer.css'));
	wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/css/home.css', array(), filemtime(get_stylesheet_directory() . '/css/home.css'));
	wp_enqueue_style('single-style', get_stylesheet_directory_uri() . '/css/single.css', array(), filemtime(get_stylesheet_directory() . '/css/single.css'));
	wp_enqueue_style('single-cpt-photo-style', get_stylesheet_directory_uri() . '/css/single-cpt-photo.css', array(), filemtime(get_stylesheet_directory() . '/css/single-cpt-photo.css'));
    wp_enqueue_style('modale-contact-style', get_stylesheet_directory_uri() . '/css/modale-contact.css', array(), filemtime(get_stylesheet_directory() . '/css/modale-contact.css'));
    wp_enqueue_style('lightbox-style', get_stylesheet_directory_uri() . '/css/lightbox.css', array(), filemtime(get_stylesheet_directory() . '/css/lightbox.css'));
    wp_enqueue_style('pagination-photo-style', get_stylesheet_directory_uri() . '/css/pagination-photo.css', array(), filemtime(get_stylesheet_directory() . '/css/pagination-photo.css'));
    wp_enqueue_style('appel-vignettes-style', get_stylesheet_directory_uri() . '/css/appel-vignettes.css', array(), filemtime(get_stylesheet_directory() . '/css/appel-vignettes.css'));
    wp_enqueue_script('script-menu-mobile', get_stylesheet_directory_uri() . '/js/menu-mobile.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));
    wp_enqueue_script('script-modale-contact', get_stylesheet_directory_uri() . '/js/modale-contact.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));
    wp_enqueue_script('script-lightbox', get_stylesheet_directory_uri() . '/js/lightbox.js', array( 'jquery' ), 1.1, array( 'strategy'  => 'defer', ));
}

// Ajout des fichiers comprennant les parties AJAX /includes/ajax.php
include get_template_directory() . '/includes/ajax_filtres.php';
include get_template_directory() . '/includes/ajax_charger_plus.php';
include get_template_directory() . '/includes/ajax_toutes_les_photos.php';

// Ajout de la fonctionnalité menu 
function register_menus()
{
	register_nav_menus( array( 'header-menu-ajout' => __( 'Header Menu' )));
    register_nav_menus( array( 'footer-menu-ajout' => __( 'Footer Menu' )));
}
add_action( 'init', 'register_menus' );

// Ajout prise en charge images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajout prise en charge images mises en avant
add_filter( 'body_class', 'custom_class', 10, 1 );
function custom_class( $classes ) {
	if ( is_page_template( 'single-cpt-photo.php' ) ) {
        $classes[] = 'single-cpt-photo';
    }
	return $classes;
}

// Ajout titre du site dans l'en-tête
add_theme_support( 'title-tag' );

// Retrait espace haut de html pour barre admin 
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');