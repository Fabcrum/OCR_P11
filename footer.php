<?php
/**
 * The template for displaying the footer
 */

?>
            <?php get_template_part( 'template-parts/modale-contact' ); ?>
			<?php get_template_part( 'template-parts/lightbox' ); ?>

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
