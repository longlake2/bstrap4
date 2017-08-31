<?php
/**
 *
 * Template Name: Jumbotron Homepage
 *
 * The template for displaying the Jumbotron Homepage
 *
 *
 * @package bootstrapwp
 */

get_header(); ?>



 <!-- Main jumbotron for a primary marketing message or call to action -->
 <div class="container">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div><!--container-->
    </div><!--jumbotron-->

    
      <!-- Example row of columns -->
      <div class="row">

        <div class="col-md-4">
         <div id="secondary" class="widget-jumbo" role="complementary">
       <?php dynamic_sidebar( 'jumbotron-col1' ); ?>
        </div><!-- #secondary -->
        </div><!--col-->

        <div class="col-md-4">
         <div id="secondary" class="widget-jumbo" role="complementary">
       <?php dynamic_sidebar( 'jumbotron-col2' ); ?>
        </div><!-- #secondary -->
        </div><!--col-->

        <div class="col-md-4">
         <div id="secondary" class="widget-jumbo" role="complementary">
       <?php dynamic_sidebar( 'jumbotron-col3' ); ?>
        </div><!-- #secondary -->
        </div><!--col-->
          </div> <!--row-->
        
      
</div><!--container-->
      


<?php get_footer(); ?>