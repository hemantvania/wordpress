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

add_image_size( 'footer-thumb', 75, 75 );

add_action( 'init', 'register_kasna_menus' );
function register_kasna_menus() {
  register_nav_menus(
    array(
      'mobile-menu' => __( 'Mobile Menu' ),
      'important-links' => __( 'Important Links' ),
      'populalr-dishes' => __( 'Popular Dishes' )
     )
   );
 } 

 add_action( 'widgets_init', 'kasba_widget_areas' );
 function kasba_widget_areas() {

  register_sidebar( array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'First area for About the site',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area two',
    'id'            => 'footer_area_two',
    'description'   => 'Second area for Important Links',
    'before_widget' => '<section class="footer-area footer-area-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area three',
    'id'            => 'footer_area_three',
    'description'   => 'For Popular Dishes',
    'before_widget' => '<section class="footer-area footer-area-three">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area four',
    'id'            => 'footer_area_four',
    'description'   => 'For Latest post',
    'before_widget' => '<section class="footer-area footer-area-three">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

}

add_filter("newsletter_user_confirmed", "redirect_newsletter_user_confirmed", 10, 1);

function redirect_newsletter_user_confirmed($user) {

    wp_redirect( site_url('/newsletter-success/') );
    exit;
}
