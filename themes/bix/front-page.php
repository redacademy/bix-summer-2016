<?php
/**
 * The main template file.
 *
 * @package Bix_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="home-banner"><!--Section 1-->
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			<div class="banner-info-wrapper">
					<h2 class="bix-book-title">The Bix Book</h2>
					<h3 class="bix-book-subheading">Transformational Stories</h3>

					<p class="front-page-author">Bix Bickson</p>
					<p class="front-page-co-author">with <span>Annika Martins</span></p>

					<a class="btn btn-download" href="<?php echo get_permalink( get_page_by_path( 'bix-book' ) )?>/#buy-book-anchor">Download Book</a>
					<!-- <a class="btn btn-down" href="#scroll"><i class="fa fa-angle-down" aria-hidden="true"></i> </a> -->
			</div>
		</section>

		<div class="container" >
			<div id="scroll"></div>
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-front/front', 'section-two' ); ?>

						<?php get_template_part( 'template-front/front', 'section-three' ); ?>

						<?php get_template_part( 'template-front/front', 'section-four' ); ?>

						<?php get_template_part( 'template-front/front', 'section-five' ); ?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
	

<?php get_footer(); ?>
