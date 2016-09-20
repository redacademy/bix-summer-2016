<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-story-site" role="main">

		<div class="single-story-modal-overlay">
			<div class="single-story-modal-container">
				<div class="comment-modal">

					<div class="comment-modal-wrapper">
						<h2>Leave us a comment</h2>
						<div class="img-wrapper">
							<img src="<?php echo(get_template_directory_uri());?>/images/discus.jpg" alt="bix logo"/>
						</div>
						<a class="comment-section-link" href="#commentsSection">Click to Comment</a>
					</div>

				</div>

				<div class="highlight-modal">
					
					<div class="highlight-modal-wrapper">

			    		<h2>Highlight And Share</h2>
			    		<p>Is there an interesting quote from the story that speaks to you?</p>
			    		<p>Use the highlight tool to share your thoughts </p>
			  			<div class="img-wrapper">
			  			<img src="<?php echo(get_template_directory_uri());?>/images/highlight.jpg" alt="bix logo"/>
			  					<p>1. Use the curser to highlight a quote you like...</p>
			  					<p>2. Share your thoughts on the quote either in the comments section or share it directly to your social media 
									</p>
									<p class="share-icons"><i class="fa fa-twitter" aria-hidden="true"></i> <i class="fa fa-linkedin" aria-hidden="true"></i> <i class="fa fa-envelope" aria-hidden="true"></i></p>
			  			</div>
						<span class="highlight-modal-button">Start Highlighting</span>
						</div>
					
        </div>


				<div class="download-modal">
					
					<div class="download-modal-wrapper">
						<h2>The Bix Book</h2>
						<div class="img-wrapper">
							<p>With your download, you will receive the full 38 stories and an accompanying interactive workbook that follows each story.</p>
							<p>If you enjoy the first three stories in The Bix Book, why not download it now and receive all of the book’s engaging content?</p>
							<img src="<?php echo(get_template_directory_uri());?>/images/bix-logo-orange.png" alt="bix logo"/>
						</div>
						<a class="download-page-link" href="<?php echo get_permalink( get_page_by_path( 'bix-book' ) )?>/#buy-book-anchor">Download the Book</a>
					</div>
					
				</div>
				
		</div>
	</div>

		<section class="stories-banner">
			<div class="stories-header">
				<img class="site-logo" src="<?php echo(get_template_directory_uri());?>/images/bix-logo.png" alt="bix logo"/>
				<h2 class="stories-title">Teaser</h2>
				<p class="stories-subtitle">Get a taste of the content in The Bix Book with these sample stories</p>
			</div>
		</section>

		<div class="single-story-container container">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php endwhile; // End of the loop. ?>
		</div>

			<div class="bottom-toolbar-wrapper">
				<div class="bottom-toolbar">
					<div class="tools">
					 	<div class="comment-modal-button">
					 		<i class="fa fa-comments" aria-hidden="true"></i>
					 	</div>
						<div class="highlight-modal-button">
						    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						</div>
						<div class ="download-modal-button">
							<i class="fa fa-book" aria-hidden="true"></i>
						</div>
					</div>

					<div class="next-story">
						<?php if ( get_next_post() ) { // check if theres previous post?>
							<p>Read the Next Story</p>
							<?php next_post_link('%link'); ?>
						<?php } else { ?>
							<p>Want more stories?</p>
							<a href="<?php esc_url( the_permalink(67) ); ?>">What is offered in the bix book</a>
						<?php }; ?>
					</div>
				</div>

		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
