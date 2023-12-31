<?php
/**
 * Template part for displaying lightbox
 */
?>

<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
?>


<div id="lightbox" class="display-none">
    <div id="lightbox-fond" class="display-none">

        <div class="lightbox-close"></div>         

        <div class="lightbox-fleches__prev">            
            <?php if (!empty( $prev_post )): ?>
                <?php previous_post_link( $format = '%link', $link = 'Précédente' ); ?>
            <?php endif; ?>

        </div>

        <div class="lightbox-img">
        <?php the_post_thumbnail(); ?>
        </div>

        <div class="lightbox-fleches__next">
            <?php if (!empty( $next_post )): ?>
                <?php next_post_link( $format = '%link', $link = 'Suivante' ); ?>
            <?php endif; ?>

        </div>

    </div>

    <div class="lightbox-titre"><?php the_title(); ?></div>
    <div class="lightbox-categorie"><?php the_terms( get_the_ID() , 'categorie-photos' ) ?></div>

</div>
