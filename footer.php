<?php
/**
 * @package sydney-child
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'http://pole9ouest-epfcl.fr' ) ); ?>"><?php printf( __( 'Pole9ouest' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			Thème personnalisé tout droit réservé © 2015.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
