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
      


<?php get_footer(hero); ?>