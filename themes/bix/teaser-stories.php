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
				
				<div class="teaser-content">
					<h2>Stories</h2>
					<p>
					If you enjoy the first three stories in <span>The Bix Book</span>, why not download it now and receive all of the book’s engaging content?</p>
					<p>
					<span>The Bix Book</span> is offered on a “Pay-What-Feels-Right” model, so you can decide how much the book is worth after you have read it.
					</p>
					<a href="<?php echo get_permalink( get_page_by_path( 'bix-book' ) )?>/#buy-book-anchor" class="btn btn-download">Download Book</a>
					<p>With your download, you will receive the full 38 stories and an accompanying interactive workbook that follows each story.
					</p>
					<p>
					Check out all the stories available in The Bix Book:
					</p>
					<div class="table-contents-container">
						<img src="<?php echo(get_template_directory_uri());?>/images/table-of-contents.png" alt="bix book table of contents"/>
						<div>
							<a href="<?php echo(get_template_directory_uri());?>/images/table-of-contents.png" target="_blank" class="btn btn-expand">Expand</a>
						</div>
					</div>
				</div>
				
			</section>
		</div>
			
	</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>