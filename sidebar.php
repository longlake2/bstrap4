<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BStrap4
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>
		
	
<?php } ?>

		<aside id="secondary" class="widget-area" role="complementary">

			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- #secondary -->

	</div><!--  .row -->
</div><!--  .container -->

