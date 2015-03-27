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
	<?php dynamic_sidebar( 'social-links' ); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->