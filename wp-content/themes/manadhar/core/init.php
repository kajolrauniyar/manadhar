<?php
/**
 * KENDRIYA MANADHAR functions and definitions
 *
 * @package KENDRIYA MANADHAR
 * 
 * @since KENDRIYA MANADHAR 1.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) { 
 	exit; // disable direct access 
 }

/*
 * Load theme constants
 */
require trailingslashit( get_template_directory() ) . 'core/theme-constants.php';

/**
 * Theme setup functions
 */
require_once ( KMS_CORE.'/theme-setup.php' );

/**
 * Register widget area and nav.
 */
require_once ( KMS_CORE.'/theme-register.php' );

/**
 * Enqueue scripts and styles.
 */
require_once ( KMS_CORE.'/enqueue.php' );

/**
 * Theme functions
 */
require_once ( KMS_FUNCTION.'/theme-functions.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
require_once ( KMS_FUNCTION.'/extras.php' );

/**
 * Theme Hooks
 */
require_once ( KMS_CORE.'/theme-hooks.php' );

/**
 * Aqua Resizer
 */
require_once ( KMS_CORE.'/lib/aq_resizer.php' );

/**
 * Customizer additions.
 */
require_once( KMS_CORE.'/lib/bs4navwalker.php');
/*creating post type start*/
function create_posttype1() {
  register_post_type( 'kmsang_gallery',
    array(
      'labels' => array(
        'name' => __( 'Gallery' ),
        'singular_name' => __( 'Gallery' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'gallery'),
      'show_in_rest' =>'true',
      //'supports'  => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','revision','time','date' )
    )
  );

    register_post_type( 'kmsang_news',
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'news'),
       'supports'  => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','revision','time','date' )
    )
  );
    register_post_type( 'kmsang_publication',
    array(
      'labels' => array(
        'name' => __( 'Publication' ),
        'singular_name' => __( 'Publication' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'publication'),
       'supports'  => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','revision','time','date' )
    )
  );
}
add_action( 'init', 'create_posttype1' );
/*creating post type end*/
/*map start*/
function my_acf_google_map_api( $api ){
  
  $api['key'] = 'xxx';
  
  return $api;
  
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
/*map end*/
/*acf option start*/
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
  
}
/*acf option end*/


