<?php
/**
 * Template part for displaying single posts.
 *
 * @package Bix_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="img-container">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full' ); ?>
			<?php endif; ?>
		</div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo CFS()->get( 'story_section_top' ); ?>

	<?php echo CFS()->get( 'story_section_practice_block' ); ?>

	<?php echo CFS()->get( 'story_section_bottom' ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bix_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
