<section class="home-author"><!--Section 6-->
	<div class="author-img-wrapper">
		<img class="author-img" src="	<?php echo CFS()->get( 'author_picture' ); ?>" alt="bix bixson the author"/>
	</div>
	<div class="home-author-info">
		<div>
			<h3 class="home-subheading">About the Author</h3>
			<?php echo CFS()->get( 'bix_bixson_author_summary' ); ?>
			<a class="btn-explore" href="<?php echo get_permalink( get_page_by_path( 'about' ) )?>">Explore</a>
		</div>
	</div>
</section>



