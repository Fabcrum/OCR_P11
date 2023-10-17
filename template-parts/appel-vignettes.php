<?php 
/**
 * The template for displaying vignettes
 * // Déclaration de la variable WP_Query selon args déclarés en page
 */

// Déclaration de la variable WP_Query
$my_query = new WP_Query( $args );

// Boucle
if( $my_query->have_posts() ) : while( $my_query->have_posts() )
: $my_query->the_post(); $monLien = get_post_permalink(); ?>

    <article id="vignette">
        <div class="vignette-image"><?php the_post_thumbnail(); ?></div>
        <div class="filtre-survol">
            <a href="<?php echo $monLien; ?>"  class="icon-eye" >
            </a>
            <div class="icon-fullscreen"></div>
            <div class="vignette-titre"><?php the_title(); ?></div>
            <div class="vignette-categorie"><?php the_terms( get_the_ID() , 'categorie-photos' ) ?></div>
        </div>
    </article>
    <?php

endwhile;
endif;

// Réinitialisation
wp_reset_postdata();