<?php
/*
Template Name: About Template Page
*/
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="about-banner">
			<div class="about-header">
				<img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/bix-logo.png" alt="bix logo"/>
				<h2 class="about-title">About Bix</h2>
				<p>About the Author</p>
			</div>
		</section>

		<div class="container">	
				<div class="author-section">
					<div class="author-section-title">
						<img src="<?php echo get_template_directory_uri() . "/images/about-bix-bickson.png"?>" alt="">
						<h2>About <span class="orange-highlight">Bix</span> Bickson</h2>
					</div>
					<div class="border-wrapper">
						<div class="author-section-intro">
							<img src="<?php echo get_template_directory_uri() . "/images/bix-bixson.png"?>" alt="">
							<p>
								“ This book happened because my co-author, Anika Martins, said to me, “Have you written your book yet?” and I said to her “No, I need someone to say my book to.” She said, “Let’s go.” We began our conversations in coffee shops, Thai restaurants, Skype and by phone. With her generosity, she listened and formed conversations into these stories. I can’t thank her enough. “</p>
								<p>-- Bix Bickson
							</p>
						</div>
						<div class="author-section-content-wrapper">
							<div>
								<h3><?php echo CFS()->get( 'header_1' ); ?></h3>
								<?php echo CFS()->get( 'content_1' ); ?>

							</div>
							<div>
								<h3><?php echo CFS()->get( 'header_2' ); ?></h3>
								<?php echo CFS()->get( 'content_2' ); ?>
							</div>
							<div>
								<h3><?php echo CFS()->get( 'header_3' ); ?></h3>
								<?php echo CFS()->get( 'content_3' ); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="company-section">
					<div class="company-section-title">
						<img src="<?php echo get_template_directory_uri() . "/images/about-bickson2.png"?>" alt="">
						<h2>About <span class="orange-highlight">Bickson<sup>2</sup></span></h2>
					</div>
					<div class="border-wrapper">
						<div class="company-section-content-wrapper">
							<div>
								<h3><?php echo CFS()->get( 'header_4' ); ?></h3>
								<?php echo CFS()->get( 'content_4' ); ?>
							</div>
							<div>
								<h3><?php echo CFS()->get( 'header_5' ); ?></h3>
								<?php echo CFS()->get( 'content_5' ); ?>
							</div>
						</div>
						<div class="company-section-clients">
							<h3>Clients inculde executives and their teams at:</h3>
						</div>
						<div class="company-section-website">
							<h3>Visit our site and learn more.</h3>
							<a href="" class="website-img-link"><img src="<?php echo get_template_directory_uri() . "/images/bickson2-logo-black.png"?>" alt=""></a>
							<a href="" class="website-text-link">www.bickson2.com</a>
						</div>
					</div>
				</div>
			
			
	</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>