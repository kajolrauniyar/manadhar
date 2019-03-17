<?php
/**
 * KENDRIYA MANADHAR post-type register functions and definitions
 *
 * @package KENDRIYA MANADHAR
 */

function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


/* custom options for additional data */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page( array(
    'page_title'  => 'General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ) );

  acf_add_options_sub_page( array(
    'page_title'  => 'Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ) );

  acf_add_options_sub_page( array(
    'page_title'  => 'Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ) );

  acf_add_options_sub_page( array(
    'page_title'  => 'Social Settings',
    'menu_title'  => 'Social',
    'parent_slug' => 'theme-general-settings',
  ) );

}

/* custom navigation menus for header and footer */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
// function calendar_widgets_init() {

//   register_sidebar( array(
//     'name'          => 'Calendar',
//     'id'            => 'calendar',
//     'before_widget' => '<div>',
//     'after_widget'  => '</div>',
//     'before_title'  => '<h2 class="rounded">',
//     'after_title'   => '</h2>',
//   ) );

// }
// add_action( 'widgets_init', 'calendar_widgets_init' );
