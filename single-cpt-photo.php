<?php
/**
 * The template for displaying all CPT photo single
 */

get_header(); ?>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="photo-single">
      <section class="photo-info">
      <h2><?php the_title(); ?></h2>
      <ul>
        <li>Référence : <?php the_field( 'reference' ); ?></li>
        <li>Catégorie : <?php the_terms( get_the_ID() , 'categorie-photos' ); ?></li>
        <li>Format : <?php the_terms( get_the_ID() , 'format-photos' ); ?></li>
				<li>Type : <?php the_field( 'typeType' ); ?></li>
				<li>Année : <?php the_time( 'Y' ); ?></li>
      </ul>
      </section>
      <section class="photo-image">
      <?php the_post_thumbnail(); ?>
      </section>
    </article>
    <section class="photo-single__footer">
      <div class="photo-single__footer__cta">
        <p>Cette photo vous intéresse ?<p>
        <a href="#" class="bouton-contact">
          <button class="btn-contact">Contact</button>
        </a>
      </div>
      <div class="photo-single__footer__pagination">
        <div>
          <!-- AJOUT NU SECTION CHARACTERS -->
          <?php get_template_part( 'template-parts/pagination-photo' ); ?>
          <!-- FIN AJOUT NU SECTION CHARACTERS -->
        </div>
      </div>
    </section>
    <section class="photo-single__apparentees">
      <p>Vous aimerez aussi<p>
      <div class="photo-single__apparentees__img">
        
      </div>
    </section>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>