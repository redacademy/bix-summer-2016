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

		<img class="stories-ribbon" src="<?php echo(get_template_directory_uri());?>/images/yellow-ribbon.svg" alt="yellow ribbon"/>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="story-content">

		<h2 class="story-number"><?php echo CFS()->get( 'story_number' ); ?></h2>
			
		<div class="top-section-border">
			<div class="story-section-top">
				<?php echo CFS()->get( 'story_top_section' ); ?>
			</div>
		</div>
		
		<div class="mid-section-border">
			<div class="practice-block">
				<h2 class="practice-title">Practice</h2>
				<?php echo CFS()->get( 'story_section_practice_block' ); ?>
				<hr>
			</div>
			<div class="story-section-bottom">
				<?php echo CFS()->get( 'story_section_bottom' ); ?> 
				
			</div>
		</div>
		
		<div class="comment-section-border">
		<div class="comment-title-wrapper">	
			<h2 class="comment-title">Response</h2>
		</div>
			
			<?php comments_template(); ?> 	
		</div>
		
	</div>

	<footer class="entry-footer">
		<?php bix_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
