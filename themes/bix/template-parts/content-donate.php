<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="donations">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title donate-title">', '</h1>' ); ?>
			<img class="the-bix-book" src="<?php echo(get_template_directory_uri());?>/images/the-bix-book.jpg" alt="the bix book"/>
		</header><!-- .entry-header -->
		
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
			
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->