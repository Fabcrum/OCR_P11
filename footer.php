<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package WordPress
 * @subpackage OCR_P11
 * @since OCR_P11 1.0
 */

?>
                <?php get_template_part( 'template-parts/modale-contact' ); ?>

			</main><!-- #main -->
	</div><!-- #content -->

	<footer>
		<!-- AJOUT MENU -->
		<nav id="footer-menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'footer-menu-ajout',
					'menu_class'      => '',
					'container_class' => '',
					'items_wrap'      => '<ul id="footer-menu">%3$s</ul>',
					'fallback_cb'     => false,
				)
			);
			?>
		</nav><!-- #footer-menu -->
	</footer><!-- #colophon -->

</div><!-- #page -->
</body>
</html>
