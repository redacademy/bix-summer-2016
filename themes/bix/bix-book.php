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
			<div class="book-title-wrapper">
				<h2 class="the-bix-book-title">Whats in the bix book</h2>
			</div>
			
			
			
<!--flickity Carousel-->
			<div class="main-carousel">
  			<div class="carousel-cell bix-carousel-1">
  
	  				<div class="bix-carousel-img bix-carousel-img-1"></div>
	  				<div class="bix-carousel-info bix-carousel-info-1">
							<ul>
								<li>38 quality stories</li>
								<li>Interactive workbook section for every chapter</li>  
								<li>Backed by 30 years of real world experience </li>
								<li>Transformational content</li> 
								<li>Empower yourself to change</li>
							</ul>
						</div>
	
  			</div>
  			<div class="carousel-cell bix-carousel-2">
  				<div class="bix-carousel-img bix-carousel-img-2"></div>
  				<div class="bix-carousel-info bix-carousel-info-2">
						<p>
						30 years of extensive experience in the field has allowed me to produce the messages delivered in easy-to-read stories, each supplemented with workbook practices to enhance your learning
					</p>
					</div>
  			</div>
  			<div class="carousel-cell bix-carousel-3">
  				<div class="bix-carousel-img bix-carousel-img-3"></div>
  				<div class="bix-carousel-info bix-carousel-info-3">
						<p>
						Create impactful change with the powerful messages available in this book. Get the edge you need to empower your aspirations and make changing circumstances work for the ever changing organism that you are. 

					</p>
					</div>
  			</div>
			</div>
			<div class="book-title-wrapper">
				<h2 class="the-bix-book-title">Paying for the Bix Book</h2>
			</div>


		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>