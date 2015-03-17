<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Seeing More Possibilities
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'smp' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'smp' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'smp' ), 'Seeing More Possibilities', '<a href="http://patricia-lutz.com" rel="designer">Pea</a>' ); ?>
		</div><!-- .site-info -->
        <div class="site-credits">
            <p>Credits</p>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
