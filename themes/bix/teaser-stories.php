<?php
/*
Template Name: Teaser-Stories Template Page
*/
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="teaser-banner">
			<div class="teaser-header">
				<img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/bix-logo.png" alt="bix logo"/>
				<h2 class="teaser-title">Teaser Stories</h2>
				<p>Want more stories?</p>
			</div>
		</section>
		<div class="container">
			<section class="teaser-section1">
				<div class="more-stories">
					<div>
						<h2>Want <span>more</span> Stories?</h2>
					</div>
				</div>
				
				<div>
					<h2>Stories</h2>
					<p>
					If you enjoy the first three stories in The Bix Book, why not download it now and receive all of the book’s engaging content?</p>
					<p>
					The Bix Book is offered on a “Pay-What-Feels-Right” model, so you can decide how much the book is worth after you have read it.
					</p>

				</div>
				
			</section>
		</div>
			
	</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>