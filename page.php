<?php
/**
 * The template for displaying all single posts
 */

get_header();

$heroImage = ''; 
if (file_exists($heroImage)) // contrôle
{
    hero('Content-Type: image/png'); // type
    hero('Content-Length: '.filesize($heroImage)); // taille
    readfile($heroImage); //ouvre le fichier et envoie les données au navigateur
}
$heroImage = get_stylesheet_directory_uri() . '/assets/hero/' . rand(1,9).'.webp';
?>
<div id="hero-image">
    <img src="<?php echo $heroImage ?>" >
    <h1>Photographe event</h1>
</div>

<div class="photo-single__apparentees__img">

    <!-- Ajout appel-vignettes -->
    <?php $args = array(
        'post_type' => 'cpt-photo',
        'posts_per_page' => 12,
    ); ?>
    <?php get_template_part( 'template-parts/appel-vignettes', null, $args ); ?>
    <!-- Fin -->

</div>

<?php
get_footer();
