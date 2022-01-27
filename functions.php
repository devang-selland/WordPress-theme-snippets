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
	'THEME-NAME-acf-missing.php',
);

foreach($includes_files as $filename){
    require_once 'inc/' . $filename ;
}

/*************************************/

/*
 * Add required Class files.
 */
$class_files = array(
'class-THEME-NAME-eneque.php',	
'class-THEME-NAME-custom-post-type-module.php', 
'class-THEME-NAME-acf-theme-option.php',
'class-THEME-NAME-acf-dynamic-gutenberg.php',
'class-THEME-NAME-acf-theme-functions.php',	
);
foreach($class_files as $class_file){
    require_once 'classes/' . $class_file ;
}
