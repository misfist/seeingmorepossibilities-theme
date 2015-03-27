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
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div><!-- .site-info -->
        <div class="site-credits">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

	<script>

    // Add class to widget that will distinquish between testimonials and quotes
//	if(document.querySelector('div.category-testimonial')) {
//		document.querySelector('div.category-testimonial').parentElement.className += ' type-testimonial';
//	}
//    if(document.querySelector('div.category-quote')) {
//		document.querySelector('div.category-quote').parentElement.className += ' type-quote';
//	}
    
	jQuery( "div.category-testimonial" ).parent().addClass( "type-testimonial" );
	jQuery( "div.category-quote" ).parent().addClass( "type-quote" );

	</script>

</body>
</html>
