<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One_Child
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.

add_action( 'wp_enqueue_scripts', 'custom_scripts_and_css', 20 );
function custom_scripts_and_css() {

	wp_dequeue_style( 'twenty-twenty-one-style' );
    wp_deregister_style( 'twenty-twenty-one-style' );

    //wp_dequeue_script( 'site' );
   // wp_deregister_script( 'site' );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', '', wp_get_theme()->get('Version'));    
    wp_enqueue_style( 'bootstrap-min', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );    
    wp_enqueue_style( 'swiper-bundle-min', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css' );
	wp_enqueue_style( 'owl-carousel-min', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/assets/css/style.css' ); 

	wp_enqueue_script('kit-fa', get_stylesheet_directory_uri() . '/assets/js/kit-fa.js', '', '', true);
	wp_enqueue_script('jquery-min', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', '', '', true);
	wp_enqueue_script('swiper-bundle-min', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), '', true);
	wp_enqueue_script('owl-carousel-min', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true);
	wp_enqueue_script('popper-min', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap-min', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('aos-js', get_stylesheet_directory_uri() . '/assets/js/aos.js', array('jquery'), '', true);
}
function register_kasna_menus() {
  register_nav_menus(
    array(
      'mobile-menu' => __( 'Mobile Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_kasna_menus' );