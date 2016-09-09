<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700|Titillium+Web:400,600,700" rel="stylesheet">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->


			<div class="mobile-nav-wrapper">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button> -->
					<a href="<?php echo home_url()?>" class="logo-link">
						<img src="<?php echo get_template_directory_uri() . "/images/bix-logo-blue.png"?>" alt="">
					</a>

					<div class="menu-button">
						<div class="menu-button-wrapper">
							<i class="fa fa-bars" aria-hidden="true" class="menu-show"></i>
							<i class="fa fa-chevron-up" aria-hidden="true" class="menu-hide"></i>
						</div>
					</div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				</nav><!-- #site-navigation -->
			</div>

			<div class="desktop-nav-wrapper">
				<div class="desktop-nav-container">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button> -->
						<a href="<?php echo home_url()?>" class="logo-link <?php 

							if (is_front_page()) {
								echo "current-page";
							}
							?>

						">
							<img src="
								<?php 
									if (is_front_page()) {
										echo get_template_directory_uri() . "/images/bix-logo-orange.png";
									} else {
										echo get_template_directory_uri() . "/images/bix-logo-blue.png";
									}
								?>
							" alt="">
						</a>

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					</nav><!-- #site-navigation -->
				</div>
			</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
