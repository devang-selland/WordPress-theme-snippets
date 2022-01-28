<?php
/**
 * THEME NAME functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME NAME 1.0
 */

/**
 * Table of Contents:
 * Required Include foler Files
 * Required Class foler Files
 */


/*
 * Add required Includes files.
 */
$includes_files = array(
    'template-tags.php',
    'customizer.php',
);

foreach($includes_files as $filename){
    require_once 'inc/' . $filename ;
}

/*
 * Add required Class files.
 */
$class_files = array(
	'class-base-theme-eneque.php',	
	'class-base-theme-custom-post-type-module.php',
	'class-base-theme-acf-theme-option.php',
	'class-base-theme-acf-dynamic-gutenberg.php',
	'class-base-theme-acf-theme-functions.php',
	'class-base-theme-acf-missing.php',
);
foreach($class_files as $class_file){
    require_once 'classes/' . $class_file ;
}
