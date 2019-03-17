<?php
/**
 * KENDRIYA MANADHAR
 *
 * @package KENDRIYA MANADHAR
 * 
 * @since KENDRIYA MANADHAR 1.0
 *
 */

$get_theme = wp_get_theme();

define('KMS_THEME_NAME', $get_theme);
define('KMS_THEME_VERSION', '1.0.0');
define('KMS_THEME_SLUG', 'KMS');
define('KMS_PREFIX', 'KMS_');

define('KMS_BASE_URL', get_template_directory_uri() );
define('KMS_BASE', wp_normalize_path ( get_template_directory() ) );

define('KMS_CORE', KMS_BASE . '/core');
define('KMS_FUNCTION', KMS_BASE . '/core/functions');
define('KMS_ADMIN_KMSR', KMS_CORE. '/admin' );

define('KMS_THEME_ADMIN_URL', KMS_BASE_URL . '/core/admin');
define('KMS_THEME_LIBS_URL' , KMS_BASE . '/core/lib' );

define('KMS_ASSEST_URI', KMS_BASE_URL . '/assets');
define('KMS_JS', KMS_BASE_URL . '/assets/js');
define('KMS_CSS', KMS_BASE_URL . '/assets/css');
define('KMS_SCSS', KMS_BASE_URL . '/assets/scss');


define('KMS_DIST_CSS', KMS_BASE_URL . '/assets/dist/css');
define('KMS_IMG', KMS_BASE_URL . '/assets/images');
































/*api calender key AIzaSyAtHujRBEYbJL_DONXqObu0P1gBbxwSWFg*/