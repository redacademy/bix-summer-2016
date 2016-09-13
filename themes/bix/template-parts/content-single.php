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

		<h2><?php echo CFS()->get( 'story_number' ); ?></h2>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="story-content">

		<h2 class="story-number"><?php echo CFS()->get( 'story_number' ); ?></h2>
		
		<div class="story-section-top">
			<?php echo CFS()->get( 'story_section_top' ); ?>
		</div>
		
		<div class="practice-block">
			<h2 class="practice-title">Practice</h2>
			<?php echo CFS()->get( 'story_section_practice_block' ); ?>
		</div>

		<div class="story-section-bottom">
			<?php echo CFS()->get( 'story_section_bottom' ); ?>
		</div>
		

	</div>

	<footer class="entry-footer">
		<?php bix_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
