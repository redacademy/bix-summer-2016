<?php
/*
Template Name: Bix-Book Template Page
*/
/**
 * The template for displaying all pages.
 *
 * @package Bix_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="bix-book-modal-overlay">
			<div class="bix-book-modal-container">

				<div class="unlock-download-modal">

					<div class="unlock-download-modal-wrapper">
					<i class="fa fa-close download-fa-close" aria-hidden="true"></i>

			            <h2>Thank your for your interest in <strong>The Bix Book</strong></h2>
			            <p>Please leave your email to unlock the download link:</p>

			            <?php echo do_shortcode('[contact-form-7 id="131" title="Donate Later" html_class="wpcf7-form-download"]'); ?>

			        </div>

				</div>

				<div class="start-download-modal">
				
					<div class="start-download-modal-wrapper">
					<i class="fa fa-close download-fa-close" aria-hidden="true"></i>

						<h2>Click the button bellow to start downloading <strong>The Bix Book</strong>:</h2>
						<p>Download <span class="blue-highlight">The Bix Book</span> to your device</p>
						<i class="fa fa-download" aria-hidden="true"></i>
						<?php echo do_shortcode('[download id="132"]'); ?>
					</div>

				</div>

				<div class="thankyou-modal">

					<div class="thankyou-modal-wrapper">
						<h2> Thanks for <span class="footer-orange">Downloading<span></h1>
						
						<p> Listening is having the person speaking experience being heard</p>
						<p>- "Bix Bickson"</p>
						<a class="thank-you-button" href="<?php echo get_page_link(11) ?>">Return to Homepage</a>

		   			</div>

				</div>

			</div>
		</div>

		<section class="bix-book-banner">
			<div class="bix-book-header">
				<!-- <img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/bix-logo.png" alt="bix logo"/> -->
				<div class="bix-book-header-container">
					<h1 class="the-bix-book-title">the Bix Book</h1>
					<h2 class="the-bix-book-subtitle">Transformational Stories</h2>
					<a class="btn btn-download" href="<?php echo get_permalink( get_page_by_path( 'bix-book' ) )?>/#buy-book-anchor">Download Book</a>
				</div>
				
			</div>
		</section>

		<div class="container">
			<div>
			<section class="book-section1">
			<img class="ribbon" src="<?php echo(get_template_directory_uri());?>/images/yellow-ribbon.svg" alt="yellow ribbon"/>
			<h2 class="ribbon-heading">The Bix Book</h2>

				<?php if ( CFS()->get( 'bix_book_description' ) ) : ?>
					<div class="book-section1-inside">
						<?php echo CFS()->get( 'bix_book_description' ); ?>
					</div>
				<?php endif; ?>

			</section>
			<div class="book-title-wrapper book-title-wrapper-2">
				<h2 class="the-bix-book-title">Whats in the bix book</h2>
			</div>

			<?php if ( CFS()->get( 'feature_description_1' ) || CFS()->get( 'feature_description_2' ) || CFS()->get( 'feature_description_3' ) ) : ?>
				<section class="book-section2">
					<img class="ribbon" src="<?php echo(get_template_directory_uri());?>/images/yellow-ribbon.svg" alt="yellow ribbon"/>
					<h2 class="ribbon-heading">Features</h2>
					<div class="main-carousel">
					<!--flickity Carousel-->
					<?php if ( CFS()->get( 'feature_description_1' ) ) : ?>
			  			<div class="carousel-cell bix-carousel-1">
			  				<div class="bix-carousel-img bix-carousel-img-1"></div>
			  				<div class="bix-carousel-info bix-carousel-info-1">
			  					<?php echo CFS()->get( 'feature_description_1' ); ?>
							</div>
			  			</div>
		  			<?php endif; ?>
		  			<?php if ( CFS()->get( 'feature_description_2' ) ) : ?>
			  			<div class="carousel-cell bix-carousel-2">
			  				<div class="bix-carousel-img bix-carousel-img-2"></div>
			  				<div class="bix-carousel-info bix-carousel-info-2">
								<?php echo CFS()->get( 'feature_description_2' ); ?>
							</div>
			  			</div>
		  			<?php endif; ?>
		  			<?php if ( CFS()->get( 'feature_description_3' ) ) : ?>
			  			<div class="carousel-cell bix-carousel-3">
			  				<div class="bix-carousel-img bix-carousel-img-3"></div>
			  				<div class="bix-carousel-info bix-carousel-info-3">
			  					<?php echo CFS()->get( 'feature_description_3' ); ?>
							</div>
			  			</div>
		  			<?php endif; ?>
					</div>
				</section>
			<?php endif; ?>

			<section id="buy-book-anchor" class="book-section3 book-purchase">
				<div class="book-title-wrapper">
					<h2 class="the-bix-book-title book-title-pay"><span>Paying for</span> the Bix Book</h2>
				</div>
				<div class="book-purchase-info">
					<?php if ( CFS()->get( 'paying_for_the_book_description' ) ) : ?>
						<div>
							<?php echo CFS()->get( 'paying_for_the_book_description' ); ?>
						</div>
					<?php endif; ?>
					<?php if ( CFS()->get( 'call_to_action' ) ) : ?>
						<p class="book-buy">
							<?php echo CFS()->get( 'call_to_action' ); ?>
						</p>
					<?php endif; ?>
					<p class="book-buy-light">Customize your contribution amount in  <img class="paypal" src="<?php echo(get_template_directory_uri());?>/images/paypal.png" alt="bix paypal"/>
					</p>

					<div class="donate-now">
				     <a class="btn btn-donate" href="<?php echo get_permalink( get_page_by_path( 'checkout' ) )?>">Pay What You Feel</a>
               
            
						 <p class="book-buy-light"> Download the Bix Book Now </p>
						 <p class="btn donate-later-button"> Pay Later </p>
			  	</div>
				</div>
		</section>
		</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
