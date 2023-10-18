<?php
/**
 * Template part for displaying pagination des photos
 */
?>
<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
?>

<div class="pagination-photo">

    <div class="pagination-photo__container">
        <div class="pagination-photo__img-prev">
            <?php if (!empty( $prev_post )): ?>
                    <?php echo get_the_post_thumbnail( $prev_post->ID, 'thumbnail' ); ?>
            <?php endif; ?>
        </div>
        <div class="pagination-photo__img-next">
            <?php if (!empty( $next_post )): ?>
                    <?php echo get_the_post_thumbnail( $next_post->ID, 'thumbnail' ); ?>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="pagination-photo__fleches">
        <div class="pagination-photo__prev">
            <?php previous_post_link( $format = '%link', $link = '_' ); ?>
        </div>
        <div class="pagination-photo__next">
            <?php next_post_link( $format = '%link', $link = '_' ); ?>
        </div>
    </div>
</div>