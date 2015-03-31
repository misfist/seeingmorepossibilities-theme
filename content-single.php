<?php
/**
 * @package Seeing More Possibilities
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="entry-meta">
			<?php smp_posted_on(); ?>
		</div><!-- .entry-meta -->
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'smp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php smp_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
