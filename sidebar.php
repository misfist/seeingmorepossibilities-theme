<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Seeing More Possibilities
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

<script>
    // Add class to widget that will distinquish between testimonials and quotes
    document.querySelector('div.category-testimonial').parentElement.className += ' type-testimonial';
    document.querySelector('div.category-quote').parentElement.className += ' type-quote';
</script>

