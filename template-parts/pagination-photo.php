<?php
/**
 * Template part for displaying pagination des photos
 */
?>

<div class="photo-single__navigation">
	<div class="photo-single__navigation__prev">
		<?php previous_post_link ( $format = '%link', $link = '_' ); ?>
    </div>
    <div class="photo-single__navigation__next">
        <?php next_post_link ( $format = '%link', $link = '_' ); ?>
    </div>
</div>