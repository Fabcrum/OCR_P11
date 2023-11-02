<?php

// Bouton "Toutes les photos" AJAX pages single-cpt-photo

add_action( 'wp_ajax_toutes_les_photos', 'toutes_les_photos' );
add_action( 'wp_ajax_nopriv_toutes_les_photos', 'toutes_les_photos' );

function toutes_les_photos() {

    // Sécurité requête nonce
	if( 
		! isset( $_REQUEST['nonce'] ) or 
       	! wp_verify_nonce( $_REQUEST['nonce'], 'toutes_les_photos' ) 
    ) {
        wp_send_json_error("Nonce : Action non autorisée nonce", 403);
  	}
    
    // Pas de récupération de données

    // Contenu
    ob_start(); // Démarrer mise en cache pour sortie
    $args = array(
        'post_type' => 'cpt-photo',
        'posts_per_page' => -1,
    );

    get_template_part('template-parts/appel-vignettes', null, $args );

    // Récupérer et vider le cache
    $html = ob_get_clean();

    // Envoyer les données au navigateur
    wp_send_json_success( $html );
    }
?>