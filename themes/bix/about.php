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
								<span>“ This book happened because my co-author, Anika Martins, said to me, “Have you written your book yet?” and I said to her “No, I need someone to say my book to.” She said, “Let’s go.” We began our conversations in coffee shops, Thai restaurants, Skype and by phone. With her generosity, she listened and formed conversations into these stories. I can’t thank her enough. “</span>
								<span>-- Bix Bickson</span>
							</p>
						</div>
						<div class="author-section-content-wrapper">
							<div>
								<h3>Why I'm Here</h3>
								<p>
									<span>I have been preparing for this conversation for over 70 years.</span>
									<span>My life has been a journey dedicated to understanding and attempting to discover a pathway to resolve the over-arching dilemmas individuals and organizations face in today’s world. We all know the old answers will no longer work. </span>
									<span>But where do we look for new answers?</span>
									<span>This has been my quest.</span>
								</p>
							</div>
							<div>
								<h3>The world has changed.</h3>
								<p>
									<span>The only resource not subject to diminishing returns is knowledge. It is the creation of knowledge that will provide an organization with continued success. Our ability to learn – <strong>learning to learn</strong> – is the most needed transformation in ourselves and in our organizations if we are going to successfully meet the challenges of the global marketplace.</span>
								</p>
							</div>
							<div>
								<h3>The Bio</h3>
								<p>
									<span>Bix Bickson has developed a unique design and body of knowledge that has proven to be a reliable pathway for individuals and organizations to perform in extraordinary ways. Rather than offering a theory that leaves people with an explanation or description of the pathway, he gives direct access to inventing and fulfilling an audacious future.</span>
							
									<span>Educated at Trinity University, Bix has been a member of the faculty of the Graduate Management Program at Antioch University in Seattle and served as the Chairman of the Board of Washington Works, a non-profit organization designed to provide women on public assistance the training and support needed to gain sustainable employment. He was also a Board Member of Global Visionaries in Seattle, Washington a non-profit organization dedicated to educate and empower youth.</span>

									<span>Bix has worked with major corporations, institutions, non-profit organizations and individuals throughout the world since 1985. </span>

									<span>Currently Bix is channelling his energy into Bickson2, a company where he is continuing helping others achieve impactful transformations. There he is joined by another Bickson, his son Joe. Together they make a tandem that is creating change by helping organizations revitalize their DNA.</span>
								</p>
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
								<h3>We call ourselves Bickson<sup>2</sup></h3>
								<p>
									<span>We are not ‘consultants.’ We engage people, your people. What we engage you in is seeing past the fundamental patterns that limit your organization. Engaging people in this way produces profound and lasting change.</span>
									<span>We are a team of baby boomer and millennial. We focus on creating new organizational DNA.</span>
									<span>We combine over 30 years of consulting experience with the passion and perspective of a new generation. We bring a track record of tapping the collective creativity of groups, inspiring others toward action, and accelerating significant measurable change across large, complex projects.</span>
								</p>
							</div>
							<div>
								<h3>Our work includes:</h3>
								<ul>
									<li>Executive consultation / coaching</li>
									<li>Organizational design and development</li>
									<li>Transforming areas of under-performance into high-performance</li>
									<li>Inventing competitive strategies</li>
									<li>Designing and leading executive and management development initiatives</li>
									<li>Engaging and aligning people throughout organizations</li>
								</ul>
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