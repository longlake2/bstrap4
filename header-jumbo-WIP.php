<?php
/**
 * The header for jumbotron
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BStrap4
 */

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   <?php wp_head("jumbo"); ?>
  </head>
<body <?php body_class(); ?>
<div id="page" class="site">
  <header  class="site-header" role="banner">
<!-- ******************* The Navbar Area ******************* -->
 
  <div class="container">
        <?php
      the_custom_logo();
      if ( is_front_page() && is_home() ) : ?>
        
      <?php else : ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
      <?php
      endif;
      $description = get_bloginfo( 'description', 'display' );
      if ( $description || is_customize_preview() ) : ?>
        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
      <?php
      endif; ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    </div>


     </div> <!--container-->

  </header><!-- #masthead -->

  <div id="content" class="site-content">
