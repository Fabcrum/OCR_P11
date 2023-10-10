<?php
/**
 * The template for displaying CPT photo archive
 */

//get_header();
?>

<h1><?php post_type_archive_title(); ?></h1>

<main class="cpt-photos">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    	<div class="photo">
        	<h2 class="photo__title">
                <a href="<?php the_permalink(); ?>">
                	<?php the_title(); ?>
                </a>
            </h2>
         	<?php the_post_thumbnail(); ?>
			<ul>
				<li><?php the_time( 'Y' ); ?></li>
				<li><?php the_terms( get_the_ID() , 'categorie-photos' ); ?></li>
				<li><?php the_terms( get_the_ID() , 'format-photos' ); ?></li>
				<li><?php the_field( 'typeType' ); ?></li>
				<li><?php the_field( 'reference' ); ?></li>
			</ul>
    	</div>
    <?php endwhile; endif; ?>
</main>

<?php the_posts_pagination(); ?>

<?php get_footer();
