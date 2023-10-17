<?php
/**
 * The template for displaying all CPT photo single
 */

get_header(); ?>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>   
  
  <?php function categoriePhoto() {
    $terms = get_the_terms( get_the_ID(), 'categorie-photos' );
    if ($terms && !is_wp_error($terms)) { // Contrôle présence du terme pour éviter une erreur
      $categoriePhoto = $terms[0]->slug; // pour obtenir le 1er terme car 1 seule image mais parcourir le tableau si nécessaire
    } else {
      $categoriePhoto = ''; // Au cas où pas de terme associé
    }
    return $categoriePhoto;
  } 
  ?>
  
    <article class="photo-single">
      <section class="photo-info">
        <h2><?php the_title(); ?></h2>
        <ul>
          <li>Référence : <span class="ref-photo"><?php the_field( 'reference' ); ?></span></li>
          <li>Catégorie : <?php the_terms( get_the_ID(), 'categorie-photos' ); ?></li>
          <li>Format : <?php the_terms( get_the_ID() , 'format-photos' ); ?></li>
          <li>Type : <?php the_field( 'typeType' ); ?></li>
          <li>Année : <?php the_time( 'Y' ); ?></li>
        </ul>
      </section>
      <section class="photo-image">
        <?php the_post_thumbnail(); ?>
        <div class="icon-fullscreen"></div>
      </section>
    </article>
    <section class="photo-single__footer">
      <div class="photo-single__footer__cta">
        <p>Cette photo vous intéresse ?<p>
        <button id="bouton-contact" class="btn-base">Contact</button>
      </div>

          <!-- Ajout pagination -->
          <?php get_template_part( 'template-parts/pagination-photo' ); ?>
          <!-- FIN -->

    </section>
    <section class="photo-single__apparentees">
      <p>Vous aimerez aussi<p>
      <div class="photo-single__apparentees__img">

        <!-- Ajout appel-vignettes -->
        <?php
          $categoriePhoto = categoriePhoto();
          $args = array(
            'post_type' => 'cpt-photo',
            'tax_query' => array(
              array(
                  'taxonomy' => 'categorie-photos',
                  'field' => 'name',
                  'terms' => $categoriePhoto,
              ),
            ),
            'posts_per_page' => 2,
          );
        ?>
        <?php get_template_part( 'template-parts/appel-vignettes', null, $args ); ?>
        <!-- FIN -->

      </div>
      <a href="#" class="bouton-contact">
          <button class="btn-base">Toutes les photos</button>
      </a>
    </section>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>