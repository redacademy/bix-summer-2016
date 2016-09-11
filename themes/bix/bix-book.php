<?php
/*
Template Name: Bix-Book Template Page
*/
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<section class="bix-book-banner">
			<div class="bix-book-header">
				<img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/bix-logo.png" alt="bix logo"/>
				<h2 class="bix-book-title">The Bix Book</h2>
			</div>		
		</section>

		<div>
			<section class="book-section1">
				<div class="book-section1-inside">
					<p>
						This is a book of stories that I have experienced through my 30 years of consulting with corporations, institutions, non-profit organizations and individuals. 
					</p>
					<p>
						Stories that I hope allow you access, an opening, a possibility that allow your courage, your persistence, your compassion, your intelligence and your resilience to soar to its greatest heights knowing you may have to plumb your deepest depths to find it. You can do this. These are not my stories. These are our stories said through my life to share with you.
					</p>
				</div>
			</section>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>