<?php

// Bouton "Charger plus" AJAX page d'accueil

add_action( 'wp_ajax_charger_plus', 'charger_plus' );
add_action( 'wp_ajax_nopriv_charger_plus', 'charger_plus' );

function charger_plus() {

    // Sécurité requête nonce
	if( 
		! isset( $_REQUEST['nonce'] ) or 
       	! wp_verify_nonce( $_REQUEST['nonce'], 'charger_plus' ) 
    ) {
        wp_send_json_error("Nonce : Action non autorisée nonce", 403);
  	}
    
    // Récupération des données
    $nombrePhotos = intval( $_POST['nombrePhotos'] ); // Nombre
    $compteur = intval( $_POST['compteur'] ); // Nombre

    // Contenu
    ob_start(); // Démarrer mise en cache pour sortie
    $nombrePhotos = ($nombrePhotos * $compteur);
    $args = array(
        'post_type' => 'cpt-photo',
        'posts_per_page' => $nombrePhotos,
    );
    
    get_template_part('template-parts/appel-vignettes', null, $args );
    
    // Récupérer et vider le cache
    $html = ob_get_clean();

    // Envoyer les données au navigateur
    wp_send_json_success( $html );
    }
?>