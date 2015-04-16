<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package The Beauty
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'the beauty' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row site-branding">
		<div class="col-lg-3">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name'); ?></a></h1>
				
		</div>
		<div class="col-lg-5 top">
			<?php bloginfo( 'description' ); ?>
		</div>
		<div class="col-lg-4 top"><?php get_search_form(); ?> </div>
			
		</div><!-- .site-branding -->


					<!-- myint's nav start-->
					<nav class="navbar navbar-default" role="navigation">
					    <!-- Mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" 
					      data-toggle="collapse" data-target=".navbar-ex1-collapse"
					      aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					     </button>
					    </div>
					  
					    <!-- Collect the nav links for toggling -->
					  <?php // Loading WordPress Custom Menu
					       wp_nav_menu( array(
					        'menu_class' => 'nav navbar-nav',
					        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse'
					     ));
					  ?>		  
					</nav>
					<!-- myint's nav end -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
