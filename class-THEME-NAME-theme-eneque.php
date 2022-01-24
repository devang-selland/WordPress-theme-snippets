<?php
/**
 * ACF Custom functions for this theme.
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME NAME 1.0
*/

if ( ! class_exists( 'THEME_NAME_Theme_Eneque' ) ) {

    /**
	 * ACF Custom Theme Functions
	 */
	class THEME_NAME_Theme_Eneque {

        public function __construct() {

            // Register options page
            add_action( 'wp_enqueue_scripts', array( $this, 'THEME_NAME_register_styles' ) );           
    
        }  
        
        /**
         * Register Options Page
         *
         */
        public function THEME_NAME_register_styles() {
           
            // Enqueue CSS Files
            $cssfiles = array(
                'main-style'        => '/style.css',
                //'print-style'       => '/assets/css/print.css',

            );

            foreach($cssfiles as $cssfilekey=>$cssfilevalue){
                wp_enqueue_style( $cssfilekey, get_template_directory_uri() . $cssfilevalue );
            }

            // Enqueue JS Files
            $jsfiles = array(
                'general-js'        => '/assets//js/general.js',
            );

            foreach($jsfiles as $jsfilekey=>$jsfilevalue){
                wp_enqueue_script( $jsfilekey, get_template_directory_uri() . $jsfilevalue , array( 'jquery' ), '', true );
            }

            // Localize the script with new data
            // $translation_array = array(
            //         'ajax_url' => admin_url( 'admin-ajax.php' ),
            // );
            // wp_localize_script( 'general-js', 'ajax_variable', $translation_array );

        }

    }
    
}
new THEME_NAME_Theme_Eneque();