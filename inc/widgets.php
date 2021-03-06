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
		'before_title'  => '<div class="card-header"><h4 class="card-title widget-title">',
		'after_title'   => '</h4></div>',
	) );


/** register_sidebar(array(
    'name' => esc_html__('Jumbotron Footer, bstrap4'),
    'id' => 'jumbo-footer',
    'description'   => esc_html__( 'Add widgets here.', 'bstrap4' ),
    'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ) );
**/
register_sidebar( array(
		'name'          => __( 'Jumboton Column 1', 'bstrap4' ),
		'id'            => 'jumbotron-col1',
		'description'   => esc_html__( 'Add widgets here.', 'bstrap4' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="card text-white bg-dark mb-3">',
		'after_widget'  => '</div></aside>',
		'before_title'  => ' <div class="card-header"><h4 class="card-title">',
		'after_title'   => '</h4></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Jumboton Column 2', 'bstrap4' ),
		'id'            => 'jumbotron-col2',
		'description'   => esc_html__( 'Add widgets here.', 'bstrap4' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="card text-white bg-dark mb-3">',
		'after_widget'  => '</div></aside>',
		'before_title'  => ' <div class="card-header"><h4 class="card-title">',
		'after_title'   => '</h4></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Jumboton Column 3', 'bstrap4' ),
		'id'            => 'jumbotron-col3',
		'description'   => esc_html__( 'Add widgets here.', 'bstrap4' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="card text-white bg-dark mb-3">',
		'after_widget'  => '</div></aside>',
		'before_title'  => ' <div class="card-header"><h4 class="card-title">',
		'after_title'   => '</h4></div>',
	) );
}
add_action( 'widgets_init', 'bstrap4_widgets_init' );



if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Left Sidebar',
		'id' => 'left-sidebar',
		'description' => esc_html__( 'Add widgets here.', 'bstrap4' ),
		'before_widget' => '<li id="%1$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}