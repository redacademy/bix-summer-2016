<section class="sample-story-front"><!--Section 4-->
<?php
			global $post;
				$args = array('post_type' => 'story', 'posts_per_page' => 1,'order' =>'ASC');
				$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
	<a class="btn btn-download" href="<?php the_permalink() ?>">Read a Sample Story</a>
	<?php endforeach;wp_reset_postdata(); ?>
</section>