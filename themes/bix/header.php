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
				<!-- for Google -->
		<meta name="description" content="The Bix Book by Bix Bixson" />
		<meta name="keywords" content="Bix, The Bix Book, Bix Bixson, " />

		<meta name="author" content="Bix Bixson" />
		<meta name="copyright" content="Bix Bixson" />
	
			<!-- for Facebook -->          
		<meta property="og:title" content="The Bix Book" />
		<meta property="og:type" content="article" />
		<meta property="og:description" content="The Bix Book by Bix Bixson" />

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" >
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->


			<div class="mobile-nav-wrapper <?php echo is_front_page() ? "mobile-nav-wrapper-home" : ""; ?>">
				<nav id="site-navigation" class="main-navigation" >
					<a href="<?php echo home_url()?>" class="logo-link">
						<img src="<?php echo get_template_directory_uri() . "/images/bix-logo-blue.png"?>" alt="">
					</a>

					<div class="menu-button">
						<div class="menu-button-wrapper">
							<i class="fa fa-bars menu-show" aria-hidden="true"></i>
							<i class="fa fa-chevron-up menu-hide" aria-hidden="true"></i>
						</div>
					</div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-primary-menu' ) ); ?>

				</nav><!-- #site-navigation -->
			</div>

			<div id="desktopNavigation" class="desktop-nav-wrapper <?php echo is_front_page() ? "desktop-nav-wrapper-home" : ""; ?>">
				<div class="desktop-nav-container">
					<nav id="site-navigation-2" class="main-navigation">
					
						<a href="<?php echo home_url()?>" class="logo-link <?php echo is_front_page() ? "current-page" : ""; ?>">
							<img src="<?php echo is_front_page() ? 
							get_template_directory_uri() . "/images/bix-logo-orange.png" : 
							get_template_directory_uri() . "/images/bix-logo-blue.png"; ?>" alt="">
						</a>

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'desktop-primary-menu' ) ); ?>

					</nav><!-- #site-navigation -->
				</div>
			</div>
			
			</header><!-- #masthead -->
		
			<div id="content" class="site-content">
