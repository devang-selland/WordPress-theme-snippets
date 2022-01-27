<?php
/**
 * Add Custom functions for this theme.
 *
 * @package WordPress
 * @subpackage Base_Theme
 * @since Base Theme 1.0
*/
if ( ! class_exists( 'Base_Theme_ACF_Theme_Functions' ) ) {

    /**
	 * ACF Custom Theme Functions
	 */
	class Base_Theme_ACF_Theme_Functions {

        public function __construct() {

            // ecample function added here
            add_action( 'init', array( $this, 'base_theme_custom_function' ) );           
    
        }  
        
        /**
         * Register Options Page
         *
         */
        public function base_theme_custom_function() {
           
        }

    }
    
}
new Base_Theme_ACF_Theme_Functions();
?>