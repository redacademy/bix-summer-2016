
<section class="quote-wrapper-front"><!--Section 2-->
	<div class="quote-img">
		<div class="overlay">
		<?php
			global $post;
				$args = array('post_type' => 'story', 'posts_per_page' => 1,'order' =>'ASC');
				$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
					<a class="btn" href="<?php the_permalink() ?>">Read a Sample Story</a>
		<?php endforeach;wp_reset_postdata(); ?>
		</div>
	</div>
	<div class="quote-wrapper-text">
		<p class="quotes-text quotes-text-top">
			<span class="quotes">"</span>
			There is an ocean between saying &amp; doing.
		</p>
		<p class="quotes-text">Here is your ocean. <br> <span class="quotes-text-orange">Get out your paddle.</span> <span class="quotes">"</span></p>
	
	</div>
</section>

<section class="quote-wrapper-front-2"><!--Section 3-->
	<div class="quote-img-2">
		<div class="overlay">
			<?php
				global $post;
					$args = array('post_type' => 'story', 'posts_per_page' => 1,'order' =>'ASC','offset' => 1);
					$myposts = get_posts( $args );
				
						foreach( $myposts as $post ) :	setup_postdata($post); ?>
		
				<a class="btn" href="<?php the_permalink() ?>">Read a Sample Story</a>

			<?php endforeach;wp_reset_postdata(); ?>
		</div>
	</div>
	<div class="quote-wrapper-text">
		<p class="quotes-text">
			<span class="quotes">"</span> 
				Our Ability to learn -
				<span class="quotes-text-orange">Learning to Learn</span> 
				- is the most needed transformation in ourselves and in our organizations.
				<span class="quotes">"</span>
		</p>	
	</div>
</section>