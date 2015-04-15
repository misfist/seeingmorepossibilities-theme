<?php
/**
 * Template Name: Coming Soon
 *
 *
 * @package Seeing More Possibilities
 */

wp_head(); ?>

<div id="primary" class="content-area coming-soon">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php wp_footer(); ?>

