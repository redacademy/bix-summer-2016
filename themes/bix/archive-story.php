<?php
/**
 * The main template file.
 *
 * @package Bix_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="stories-banner">
			<div class="stories-header">
				<!-- <img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/bix-logo.png" alt="bix logo"/> -->
				<div class="stories-container">
					<div class="stories-content">
						<h2 class="stories-title">Teaser</h2>
						<p class="stories-subtitle">Get a taste of the content in The Bix Book with these sample stories</p>
						<a class="btn btn-download" href="<?php echo get_permalink( get_page_by_path( 'bix-book' ) )?>/#buy-book-anchor">Download Book</a>
					</div>
				</div>
			</div>		
		</section>
			<?php 
			global $query_string;
			query_posts( $query_string . '&order=ASC' );
			?>
	
			<?php if ( have_posts() ) : ?>
				
				
					<header>
						<h1 class="page-title screen-reader-text"><?php the_archive_title(); ?></h1>
					</header>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content','stories' ); ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>