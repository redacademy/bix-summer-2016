<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<section class="home-banner"><!--Section 1-->
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			<div class="banner-info-wrapper">
			<img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/bix-logo.png" alt="bix logo"/>
			<h2 class="bix-book-title">The Bix Book</h2>
			<h3 class="bix-book-subheading">Transformational Stories</h3>
			<a class="btn btn-download" href="#">Download Book</a>
			<a class="btn btn-down" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i> </a>
			</div>
		</section>
		
		<section class="quote-wrapper-front"><!--Section 2-->
			<div class="quote-img"></div>
			<div class="quote-wrapper-text">
				<p class="quotes-text"><span class="quotes">"</span> There is an ocean between saying &amp; doing.</p>
				<p class="quotes-text">Here is your ocean. <br> <span class="quotes-text-orange">Get out your paddle.</span> <span class="quotes">"</span></p>
			
			</div>
		</section>

		<section class="quote-wrapper-front"><!--Section 3-->
			<div class="quote-img-2"></div>
			<div class="quote-wrapper-text">
				<p class="quotes-text"><span class="quotes">"</span> It is the creation of <span class="quotes-text-orange">Knowledge</span> that will afford and Organization continued success <span class="quotes">"</span></p>
				
			</div>
		</section>

		<section class="sample-story-front"><!--Section 4-->
			<a class="btn btn-download" href="#">Read a Sample Story</a>
		</section>

		<section class="home-book"><!--Section 5-->
			<img class="book-logo" src="<?php echo(get_template_directory_uri());?>/images/bix-logo-black.png" alt="bix logo"/>
			<div class="home-book-text">
				<h2 class="book-title">The Bix Book</h2>
				<h4 class="book-subheading">Transformational Stories</h4>
				<h3>Bix Bixon</h3>
				<p><span>with</span> Annika Martins</p>	
			</div>
			<div class="book-summary">
			<div>
				<h3 class="bix-book-title">The Bix Book</h3>
				<p class="summary-one">
					This is a book of stories that I have experienced through my 30 years of consulting with corporations, institutions, non-profit organizations and individuals.
				</p>
				<p>
					Stories that I hope allow you access, an opening, a possibility that allow your courage, your persistence, your compassion, your intelligence and your resilience to soar to its greatest heights knowing you may have to plumb your deepest depths to find it.  You can do this.  These are not my stories.  These are our stories said through my life to share with you.
				</p>
				<a class="btn-discover" href="#">Discover</a>
			</div>
			</div>
		</section>

		<section class="home-author"><!--Section 6-->
			<img class="author-img" src="<?php echo(get_template_directory_uri());?>/images/bix-bixson.png" alt="bix bixson the author"/>
			<div>
			<h3 class="home-subheading">About the Author</h3>
				
			<p>
				Educated at Trinity University, Bix has been a member of the faculty of the Graduate Management Program at Antioch University in Seattle and served as the Chairman of the Board of Washington Works, a non-profit organization designed to provide women on public assistance the training and support needed to gain sustainable employment.
			</p>
			<a class="btn-explore" href="#">Explore</a>
			</div>

		</section>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
