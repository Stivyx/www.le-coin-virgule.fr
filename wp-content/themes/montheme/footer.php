<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<div class="row">
					<div class="medium-4 column copy">
						Copyright © 2017
					</div>
					<div class="medium-4 column logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo le coin virgule">
						</a>
					</div>
					<div class="medium-4 column social">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
						
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
						
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
						
					</div>
				</div>
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
