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
			
			
			

			<section class="book-section2">
				<img class="ribbon" src="<?php echo(get_template_directory_uri());?>/images/yellow-ribbon.svg" alt="yellow ribbon"/>
				<h2 class="ribbon-heading">The Bix Book</h2>
				<div class="main-carousel">
				<!--flickity Carousel-->
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
			</section>

			<section class="book-purchase">
				<div class="book-title-wrapper">
					<h2 class="the-bix-book-title">Paying for the Bix Book</h2>
				</div>

				<div class="book-purchase-info">
					<p>
						The Bix Book runs on a “Pay-What-Feels-Right” business model.
					</p>
					<p>
						You might ask: Why?
					</p>
					<p>
						It personalizes the experience of this book to the value you received from it.
					</p>
					<p>
						Sometimes people buy a book and it ends up not meaning much to them, but on the other hand, a different book might end up being so deeply meaningful that it impacts the reader in a transformative way. 

						The idea is: I cannot know what the book is worth to you as an individual, so I’m not sure having a fixed price will make sense.

						Creating a fixed price is unfair because it’s too transaction-focused. It doesn’t honour the exchange that happens between the relationship of you and I as reader and author.

						This “Pay-What-Feels-Right” model invites us to be more conscious with buying and to reflect on the value we bring to one another, even at a distance through a book.
					</p>
					<p class="book-buy">So, the decision is in your hands to give back what The Bix Book is worth to you:
					</p>
					<p class="book-buy-light">Customize your contribution amount in  <i class="fa fa-cc-paypal"></i>
					</p>

					<div class="donate-now">
						<a class="btn btn-donate" href="#">Donate Now</a>
						<p class="book-buy-light">Download <span>The Bix Book</span> first
					</p>
						<a class="btn btn-donate" href="#">Donate Later</a>
					</div>
				</div>
			</section>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>