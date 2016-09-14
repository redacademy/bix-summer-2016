<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-story-site" role="main">

		<section class="stories-banner">
			<div class="stories-header">
				<img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/bix-logo.png" alt="bix logo"/>
				<h2 class="stories-title">Teaser</h2>
				<p class="stories-subtitle">Get a taste of the content in The Bix Book with these sample stories</p>
			</div>		
		</section>
	
		<div class="single-story-container container">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php endwhile; // End of the loop. ?>
		</div>
		
		<div class="bottom-toolbar-container">
			<div class="bottom-toolbar-wrapper">
				<div class="bottom-toolbar">
					<div class="tools">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<i class="fa fa-comments" aria-hidden="true"></i>
						<i class="fa fa-share-square-o" aria-hidden="true"></i>
					</div>
					<div class="next-story">
						<?php if (next_post_link()) { ?>
							<p>Read the Next Story</p>
							<?php next_post_link('%link'); ?>
						<?php } else { ?>
							<p>Want more stories?</p>
							<a href="#">What is offered in the bix book</a>
						<?php }; ?>
					</div>
				</div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
