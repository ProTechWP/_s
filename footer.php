<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */

?>

	</div><!-- .wrap -->
	</div><!-- #content -->
	<?php tha_content_after(); ?>
	<?php if( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2') || is_active_sidebar( 'footer-3') ) {
		?>
		
		<div class="footer-widgets">
			<div class="wrap">
				<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php dynamic_sidebar( 'footer-2' ); ?>
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div><!-- .wrap -->
		</div><!-- .footer-widgets -->
	<?php } ?>

	<?php tha_footer_before(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">
		<?php tha_footer_top(); ?>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', '_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
			</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
		</div><!-- .wrap -->
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
</div><!-- #page -->

<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>

</body>
</html>
