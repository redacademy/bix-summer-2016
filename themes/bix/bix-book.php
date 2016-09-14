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
				<h2 class="the-bix-book-title">The Bix Book</h2>
			</div>
		</section>

		<div class="container">
			<div>
			<section class="book-section1">
			<img class="ribbon" src="<?php echo(get_template_directory_uri());?>/images/yellow-ribbon.svg" alt="yellow ribbon"/>
			<h2 class="ribbon-heading">The Bix Book</h2>

				<div class="book-section1-inside">

				<?php echo CFS()->get( 'bix_book_description' ); ?>



				</div>
			</section>
			<div class="book-title-wrapper book-title-wrapper-2">
				<h2 class="the-bix-book-title">Whats in the bix book</h2>
			</div>


			<section class="book-section2">
				<img class="ribbon" src="<?php echo(get_template_directory_uri());?>/images/yellow-ribbon.svg" alt="yellow ribbon"/>
				<h2 class="ribbon-heading">Features</h2>
				<div class="main-carousel">
				<!--flickity Carousel-->
	  			<div class="carousel-cell bix-carousel-1">
	  				<div class="bix-carousel-img bix-carousel-img-1"></div>
	  				<div class="bix-carousel-info bix-carousel-info-1">
	  					<?php echo CFS()->get( 'feature_description_1' ); ?>
						</div>
	  			</div>
	  			<div class="carousel-cell bix-carousel-2">
	  				<div class="bix-carousel-img bix-carousel-img-2"></div>
	  				<div class="bix-carousel-info bix-carousel-info-2">
							<?php echo CFS()->get( 'feature_description_2' ); ?>
						</div>

	  			</div>
	  			<div class="carousel-cell bix-carousel-3">
	  				<div class="bix-carousel-img bix-carousel-img-3"></div>
	  				<div class="bix-carousel-info bix-carousel-info-3">
	  					<?php echo CFS()->get( 'feature_description_3' ); ?>
						</div>
	  			</div>
				</div>
			</section>

			<section id="buy-book-anchor" class="book-section3 book-purchase">
				<div class="book-title-wrapper">
					<h2 class="the-bix-book-title"><span>Paying for</span> the Bix Book</h2>
				</div>
				<div class="book-purchase-info">
					<div>
						<?php echo CFS()->get( 'paying_for_the_book_description' ); ?>
					</div>
					<p class="book-buy">
						<?php echo CFS()->get( 'call_to_action' ); ?>
					</p>
					<p class="book-buy-light">Customize your contribution amount in  <i class="fa fa-cc-paypal"></i>
					</p>

					<div class="donate-now">
				     <a class="btn btn-donate" href="#">Donate Now</a>

            <?php get_template_part( 'template-parts/content', 'social-media-modal' ); ?>
			  	</div>
				</div>
		</section>
		</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
