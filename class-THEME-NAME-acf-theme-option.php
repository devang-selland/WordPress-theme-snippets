<?php
/**
 * ACF Custom functions for this theme.
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME NAME 1.0
*/

if ( ! class_exists( 'THEME_NAME_ACF_Theme_Option' ) ) {

    /**
	 * ACF Custom Theme Functions
	 */
	class THEME_NAME_ACF_Theme_Option {

        public function __construct() {

            // Register options page
            add_action( 'init', array( $this, 'THEME_NAME_register_options_page' ) );           
    
        }  
        
        /**
         * Register Options Page
         *
         */
        public function THEME_NAME_register_options_page() {
            if( function_exists('acf_add_options_page') ) {
                acf_add_options_page(array(
                    'page_title' 	=> 'Theme Option',
                    'menu_title'	=> 'Theme Option',
                    'menu_slug' 	=> 'theme-option',
                    'capability'	=> 'edit_posts'
                ));
                acf_add_options_page(array(
                    'page_title'  => 'Theme Option',
                    'menu_title' => 'Theme Option',
                    'menu_slug'  => 'general-settings',
                    'parent_slug' => 'theme-option',
                    'redirect'  => false
                ));
            }
        }

    }
    
}
new THEME_NAME_ACF_Theme_Option();