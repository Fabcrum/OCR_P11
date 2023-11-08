<?php
/**
* Template Name: Home
* The template for displaying home page
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

<div id="filtres-photos">
    <form
        name="filtresAjax"
        id="filtresAjax"
        action="<?php echo admin_url( 'admin-ajax.php' ); ?>" 
        method="post"
        >
        <input 
            type="hidden" 
            name="nonce" 
            value="<?php echo wp_create_nonce( 'ajax_filtres' ); ?>"
        >                 
        <input
            type="hidden"
            name="action"   
            value="ajax_filtres"
        >
        <fieldset class="fieldset-categories-formats">

            <?php $categories = get_terms(array( 'taxonomy' => 'categorie-photos', 'hide_empty' => false ));?>
            <?php $formats = get_terms(array( 'taxonomy' => 'format-photos', 'hide_empty' => false ));?>

            <select id="selectCategories" name="selectCategories" class="select2">
                <option value="Toutes les catégories">Catégories</option>
                    <?php foreach ($categories as $category) : ?>
                <option value="<?php echo esc_html($category->name); ?>"><?php echo esc_html($category->name); ?></option>
                    <?php endforeach; ?>
            </select>
            <select id="selectFormats" name="selectFormats" class="select2">
                <option value="Tous les formats">Formats</option>
                <?php foreach ($formats as $format) : ?>
                    <option value="<?php echo esc_html($format->name); ?>"><?php echo esc_html($format->name); ?></option>
                <?php endforeach; ?>
            </select>
        </fieldset>

        <fieldset class="fieldset-trier-par">       
            <select id="selectTriDate" name="selectTriDate" class="select2">
                <option value="ASC">Trier par</option>
                <option value="ASC">Des plus récentes aux plus anciennes</option>
                <option value="DESC">Des plus anciennes aux plus récentes</option>
            </select>
        </fieldset>
    </form>
</div>

<div class="photo-grille accueil">

    <!-- Ajout appel-vignettes -->
    <?php 
    $args = array(
        'post_type' => 'cpt-photo',
        'posts_per_page' => 12,
    );
    $nombrePhotos = $args['posts_per_page'];
    ?>

    <?php 
    get_template_part( 'template-parts/appel-vignettes', null, $args );
    ?>
    <!-- Fin -->

</div>

<button
    id="bouton-charger-plus"
    class="btn-base"
    action="<?php echo admin_url( 'admin-ajax.php' ); ?>" 
    data-nonce="<?php echo wp_create_nonce('charger_plus'); ?>"
    data-action="charger_plus"
    data-nombrePhotos="<?php echo $nombrePhotos; ?>"
    >Charger plus</button>

<?php
get_footer();
