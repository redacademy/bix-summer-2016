<?php
/**
 * Template part for displaying Bix Stories Archive Page.
 *
 * @package Bix_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="stories-article" <?php post_class(); ?>>
	
	<header class="entry-header stories-main">

		<?php if ( has_post_thumbnail() ) : ?>
			<?php 
	    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' ); 
		?>
		<div class="featured-img" style="background-image:url(<?php echo $src[0]; ?>)">	

		</div>
	<?php endif; ?>

		<div class="entry-content">
			<?php the_title( sprintf( '<h2 class="stories-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
	</header><!-- .entry-header -->	
</article><!-- #post-## -->