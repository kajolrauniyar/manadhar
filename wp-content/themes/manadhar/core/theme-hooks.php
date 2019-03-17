<?php
/**
 * KENDRIYA MANADHAR Template Hooks
 *
 * Action/filter hooks used for KENDRIYA MANADHAR functions/templates
 *
 * @package 	KENDRIYA MANADHAR
 *
 * @since     	KENDRIYA MANADHAR 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*==================================================================================================
  Functions homepage start
  ==================================================================================================*/

// KENDRIYA MANADHAR  Homepage Content Hooks start

if (!function_exists('KMS_homepage_banner')){
	function KMS_homepage_banner(){
		get_template_part('template-parts/page/homepage/home', 'banner');
	}
}

if (!function_exists('KMS_homepage_ads')){
	function KMS_homepage_ads(){
		get_template_part('template-parts/page/homepage/home', 'ads');
	}
}

if (!function_exists('KMS_homepage_blog')){
	function KMS_homepage_blog(){
		get_template_part('template-parts/page/homepage/home', 'blog');
	}
}
if (!function_exists('KMS_homepage_gallery')){
	function KMS_homepage_gallery(){
		get_template_part('template-parts/page/homepage/home', 'gallery');
	}
}

if (!function_exists('KMS_homepage_intro')){
	function KMS_homepage_intro(){
		get_template_part('template-parts/page/homepage/home', 'intro');
	}
}

if (!function_exists('KMS_homepage_news')){
	function KMS_homepage_news(){
		get_template_part('template-parts/page/homepage/home', 'news');
	}
}
if (!function_exists('KMS_homepage_newsletter')){
	function KMS_homepage_newsletter(){
		get_template_part('template-parts/page/homepage/home', 'newsletter');
	}
}

if (!function_exists('KMS_homepage_publication')){
	function KMS_homepage_publication(){
		get_template_part('template-parts/page/homepage/home', 'publication');
	}
}

// KENDRIYA MANADHAR  Homepage Content Hooks end

// KENDRIYA MANADHAR  contact Content Hooks start

if (!function_exists('KMS_contact_map')){
	function KMS_contact_map(){
		get_template_part('template-parts/page/contact/contact', 'map');
	}
}
if (!function_exists('KMS_contact_form')){
	function KMS_contact_form(){
		get_template_part('template-parts/page/contact/contact', 'form');
	}
}
if (!function_exists('KMS_contact_newsletter')){
	function KMS_contact_newsletter(){
		get_template_part('template-parts/page/contact/contact', 'newsletter');
	}
}


// KENDRIYA MANADHAR  contact Content Hooks end


// KENDRIYA MANADHAR  news Content Hooks start

if (!function_exists('KMS_news_content')){
	function KMS_news_content(){
		get_template_part('template-parts/page/news/news', 'content');
	}
}
if (!function_exists('KMS_news_newsletter')){
	function KMS_news_newsletter(){
		get_template_part('template-parts/page/news/news', 'newsletter');
	}
}
// KENDRIYA MANADHAR  news Content Hooks end


// KENDRIYA MANADHAR  gallery Content Hooks start

if (!function_exists('KMS_gallery_content')){
	function KMS_gallery_content(){
		get_template_part('template-parts/page/gallery/gallery', 'content');
	}
}
if (!function_exists('KMS_gallery_newsletter')){
	function KMS_gallery_newsletter(){
		get_template_part('template-parts/page/gallery/gallery', 'newsletter');
	}
}
// KENDRIYA MANADHAR  news Content Hooks end


// KENDRIYA MANADHAR  footer Content Hooks start

if (!function_exists('KMS_footer_content')){
	function KMS_footer_content(){
		get_template_part('template-parts/page/footer/footer', 'content');
	}
}
if (!function_exists('KMS_footer_copyright')){
	function KMS_footer_copyright(){
		get_template_part('template-parts/page/footer/footer', 'copyright');
	}
}
if (!function_exists('KMS_footer_sidemenu')){
	function KMS_footer_sidemenu(){
		get_template_part('template-parts/page/footer/footer', 'sidemenu');
	}
}
// KENDRIYA MANADHAR  footer Content Hooks end
/*==================================================================================================
  Hooks
  ==================================================================================================*/


/**
 * Homepage Hook start
 */
add_action( 'KMS_homepage_content', 'KMS_homepage_banner', 10 );
add_action( 'KMS_homepage_content', 'KMS_homepage_intro', 20 );
add_action( 'KMS_homepage_content', 'KMS_homepage_news', 30 );
add_action( 'KMS_homepage_content', 'KMS_homepage_gallery', 40 );
add_action('KMS_homepage_content', 'KMS_homepage_ads',50);
add_action('KMS_homepage_content', 'KMS_homepage_publication', 60);
add_action( 'KMS_homepage_content', 'KMS_homepage_blog', 70 );
add_action( 'KMS_homepage_content', 'KMS_homepage_newsletter', 80 );
/*Homepage hook end*/

/**
 * Contact Hook start
 */
add_action( 'KMS_contact_content', 'KMS_contact_map', 10 );
add_action( 'KMS_contact_content', 'KMS_contact_form', 20 );
add_action( 'KMS_contact_content', 'KMS_contact_newsletter', 30 );
/*Contact hook end*/


/* News Hook start */
add_action( 'KMS_news_content', 'KMS_news_content', 10 );
add_action( 'KMS_news_content', 'KMS_news_newsletter', 20 );
/*News hook end*/


/* Gallery Hook start */
add_action( 'KMS_gallery_content', 'KMS_gallery_content', 10 );
add_action( 'KMS_gallery_content', 'KMS_gallery_newsletter', 20 );
/*Gallery hook end*/


/* Footer Hook start */
add_action( 'KMS_footer_content', 'KMS_footer_content', 10 );
add_action( 'KMS_footer_content', 'KMS_footer_copyright', 20 );
add_action( 'KMS_footer_content', 'KMS_footer_sidemenu', 30 );
/*Footer hook end*/