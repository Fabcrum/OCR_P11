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
    <form method="get" action="[...]"> <!-- [...à remplir...]) -->
        <fieldset class="categories-formats">
            <select id="categories" name="categories"> 
                <option value="">Catégories</option>
                <option value="concert">Concert</option>
                <option value="mariage">Mariage</option>
                <option value="reception">Réception</option>
                <option value="television">Télévision</option>
            </select>
            <select id="format">
                <option value="">Formats</option>
                <option value="paysage">Paysage</option>
                <option value="portrait">Portrait</option>
            </select>
        </fieldset>
        <fieldset class="trier-par">
            <select id="trier-par" name="trier-par"> 
                <option value="">Trier par</option>
                <option value="anciennes-recentes">Des plus récentes aux plus anciennes</option>
                <option value="recentes-anciennes">Des plus anciennes aux plus récentes</option>
            </select>
        </fieldset>
    </form>
</div>

<div class="photo-grille accueil">

    <!-- Ajout appel-vignettes -->
    <?php $args = array(
        'post_type' => 'cpt-photo',
        'posts_per_page' => 12,
    ); ?>
    <!-- l'argument "null" peut être remplacé par le slug d'un template-parts le cas échéant -->
    <?php get_template_part( 'template-parts/appel-vignettes', null, $args ); ?>
    <!-- Fin -->

</div>

<button id="bouton-charger-plus" class="btn-base">Charger plus</button>

<?php
get_footer();
