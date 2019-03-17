<?php
/**
 * KENDRIYA MANADHAR  enqueue functions and definitions
 *
 * @package KENDRIYA MANADHAR 
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Enqueue scripts and styles.
 */
function kms_scripts() {
	wp_enqueue_style('kms-bootstrap.minCss', KMS_CSS . '/bootstrap.min.css');
	wp_enqueue_style('kms-fontAwesome', KMS_CSS . '/fontawesome.min.css');
	// wp_enqueue_style('kms-styleCssmap', KMS_CSS . '/style.css.map');
	wp_enqueue_style('kms-slickCss', KMS_CSS . '/slick.css');
	// wp_enqueue_style('kms-lightbox.minCss', KMS_CSS . '/lightbox.min.css');
	wp_enqueue_style('kms-animateCss', KMS_CSS . '/animate.css');
	wp_enqueue_style('kms-styleCss', KMS_CSS . '/style.css');

	wp_enqueue_style('kms_leaflet_map_css', 'https://unpkg.com/leaflet@1.3.4/dist/leaflet.css');
	
	wp_enqueue_style('kms-styleScss', KMS_SCSS . '/style.scss');
	wp_enqueue_style('kms-customCss', KMS_CSS . '/custom.css');
	// Enqueue script starts
	// Remove default jQuery.
	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery', KMS_JS . '/jquery-3.3.1.min.js', array(), 'v3.3.1', false );
	wp_enqueue_script( 'WOWjS', KMS_JS . '/wow.min.js', array(), 'v1', true );
	wp_enqueue_script( 'gridjS', KMS_JS . '/grid.min.js', array(), 'v1', true );
	wp_enqueue_script( 'kms-bootstrapminJs', KMS_JS . '/bootstrap.min.js', array( 'jquery' ), '', true );	
	wp_enqueue_script( 'kms-lightboxminJs', KMS_JS . '/lightbox.min.js', array( 'jquery' ), 'null', true );	
	wp_enqueue_script( 'kms-slickminJs', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), 'null', true );

	wp_enqueue_script( 'kms-slickminJs', '//maps.googleapis.com/maps/api/js?key=YOUR_API_KEY', array(), 'null', true );
	wp_enqueue_script( 'kms-appJs', KMS_JS . '/app.js', array( 'jquery' ), 'null', true );
}
add_action( 'wp_enqueue_scripts', 'kms_scripts' );
