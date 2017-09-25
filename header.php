<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrapPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class (); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
<div class="container">
 





<!-- <div class="container">
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
   </div> -->
	
	    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1a237e;">
	    		    	<div class="container">
		<a class="navbar-brand mb-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
 
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
		   		<div class="collapse navbar-collapse" id="navbarNav">
	            <?php
	            $args = array(
	              'theme_location' => 'primary',
	              'depth'      => 2,
	              'container'  => false,
	              'menu_class'     => 'navbar-nav',
	              'walker'     => new Bootstrap_Walker_Nav_Menu()
	              );
	            if (has_nav_menu('primary')) {
	              wp_nav_menu($args);
	            }
	            ?>
	          </div>

	        </div>
	        
		</nav>


<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />



	</header><!-- #masthead -->

	<div id="content" class="site-content">
