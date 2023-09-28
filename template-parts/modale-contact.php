<?php
/**
 * Template part for displaying modale contact
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package WordPress
 * @subpackage OCR_P11
 * @since OCR_P11 1.0
 */
?>

<!-- Appel shortcode du formulaire contact -->
<div id="modale-contact" class="display-none">
    <div id="fond" class="display-none"></div>
    <div id="form" class="display-none">
        <?php
        echo do_shortcode('[contact-form-7 id="bc41f8b" title="Formulaire de contact"]')
        ?>
    </div>
</div>