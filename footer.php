<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BStrap4
 */

?>
    
	</div><!--  #content.site  -->
<div class="container">
	
	<footer id="colophon" class="card-footer bg primary" role="contentinfo">
    <div class="container">
  		<div class="site-info">
  			<a href="<?php echo esc_url( __( 'http://cafinity.com/' , 'BStrap4' ) ); ?>"><?php printf( esc_html__( 'A Bootstrap 4 Theme', 'bstrap4' ), 'WordPress' ); ?></a>
  			<span class="sep"> | </span>
  			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bstrap4' ), 'bstrap4', '<a href="http://cafinity.com" rel="designer">Mike Hart</a>' ); ?>
  		</div><!-- .site-info -->
    </div>
	</footer><!-- #colophon -->
  </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

