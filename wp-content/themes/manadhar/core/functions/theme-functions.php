<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package KENDRIYA MANADHAR
 */


if( !function_exists( 'kms_add_meta' ) ) :
   /**
	* Add meta tags.
	*/
	function kms_add_meta() { ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KENDRIYA MANADHAR</title>	
	<?php }
endif;

if ( !function_exists( 'kms_add_links' ) ) :
	/*
	* Add Google fonts, Pingback url, etc.
	*/
	function kms_add_links() { ?> 
	<!-- Google font -->
	<link rel='stylesheet' id='ls-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&subset=latin' type='text/css' media='all' />

	<link rel='stylesheet' id='google_fonts-css'  href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100%7COpen+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800%7CSource+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700&ver=4.2.2' type='text/css' media='all' />

	<link rel='stylesheet' id='sh_google_custom_font-css'  href='http://fonts.googleapis.com/css?family=Roboto:400,300,600,700,800&ver=4.2.2' type='text/css' media='all' />
	<?php }
endif;

function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');


function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'KENDRIYA MANADHAR';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );