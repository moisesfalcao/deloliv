<?php

// remove admin bar
add_filter('show_admin_bar', '__return_false');



/* initializing post types > Services */
add_action( 'init', 'deloliv_register_servico_post_type' );
function deloliv_register_servico_post_type() {
  $labels = array(
     'name' => _x( 'Services', 'post type general name' ),
     'singular_name' => _x( 'Service', 'post type singular name' )
  );
  $args = array(
    'labels' => $labels,
    'description' => 'List of services',
    'supports' => array ( 'title', 'editor', 'thumbnail' ),
    'public' => true
  );
  register_post_type( 'servico', $args );
}





/* initializing post types > Projects */
add_action( 'init', 'deloliv_register_home_featured_post_type' );
function deloliv_register_home_featured_post_type() {
  $labels = array(
     'name' => _x( 'Projects', 'post type general name' ),
     'singular_name' => _x( 'Project', 'post type singular name' )
  );
  $args = array(
    'labels' => $labels,
    'description' => 'List of Projects',
    'supports' => array ( 'title', 'editor', 'thumbnail' ),
    'public' => true
  );
  register_post_type( 'project', $args );
}





/* initializing menus */
function register_menus() {
  register_nav_menus(
    array(
      'en-menu' => __( 'EN Menu' ),
      'fr-menu' => __( 'FR Menu' ),
      'es-menu' => __( 'ES Menu' ),
      'pt-menu' => __( 'PT Menu' )
    )
  );
}
add_action( 'init', 'register_menus' );





/* initializing thumbnails */
add_theme_support( 'post-thumbnails' );





/* footer home widget */
function footer_home_en_widget() {

	register_sidebar( array(
		'name'          => 'EN: Footer Home',
		'id'            => 'home_footer_en',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
		'name'          => 'FR: Footer Home',
		'id'            => 'home_footer_fr',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
		'name'          => 'ES: Footer Home',
		'id'            => 'home_footer_es',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
		'name'          => 'PT: Footer Home',
		'id'            => 'home_footer_pt',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
  ) );
  
}
add_action( 'widgets_init', 'footer_home_en_widget' );

?>