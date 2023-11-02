<?php

// Filtres photos AJAX page d'accueil

add_action('wp_ajax_ajax_filtres', 'ajax_filtres');
add_action('wp_ajax_nopriv_ajax_filtres', 'ajax_filtres');

function ajax_filtres() {

    // Sécurité requête nonce
  	if( 
		! isset( $_REQUEST['nonce'] ) or 
       	! wp_verify_nonce( $_REQUEST['nonce'], 'ajax_filtres' ) 
    ) {
        wp_send_json_error("Nonce : Action non autorisée", 403);
  	}
    
    // Récupération des données
    $categoriePhoto = sanitize_text_field($_POST['selectCategories']);
    $formatPhoto = sanitize_text_field($_POST['selectFormats']);
    $triPhoto = sanitize_text_field($_POST['selectTriDate']);

    // Contenu
    ob_start(); // Démarrer mise en cache pour sortie
    $args = array(
        'post_type' => 'cpt-photo',
        'tax_query' => array(
            'relation' => 'AND', 
            array(
                'taxonomy' => 'categorie-photos',
                'field' => 'name',
                'terms' => $categoriePhoto,
            ),
            array(
                'taxonomy' => 'format-photos',
                'field' => 'name',
                'terms' => $formatPhoto,
            ),
        ),
        'posts_per_page' => 12,
        'orderby' => 'date',
        'order' => $triPhoto,
    );
    get_template_part('template-parts/appel-vignettes', null, $args );

    // Récupérer et vider le cache
    $html = ob_get_clean(); 

    // Envoyer les données au navigateur
    wp_send_json_success( $html );
    }
?>