<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bstrap4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bstrap4' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bstrap4' ),
		'before_widget' => '<section id="%1$s" class="card widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="card-header"><h3 class="card-header widget-title">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'bstrap4_widgets_init' );

