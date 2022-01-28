<?php
/**
 * ACF Custom functions for this theme.
 *
 * @package WordPress
 * @subpackage Base_Theme
 * @since Base Theme 1.0
*/

if ( ! class_exists( 'acf' ) ) {
    
    /**
	 * ACF Custom Theme Functions to check ACF present of missing
	 */
	class THEME_NAME_ACF_Missing {

        private $THEME_NAME_acf_notice_msg = 'This Theme needs Advanced Custom Fields Pro to run. Please download and activate it';


        public function __construct() {

            // Admin notice for ACF missing
            add_action( 'admin_notices', array( $this,'THEME_NAME_notice_missing_acf' ) );

            // Front end noicde for ACF missing
            add_action( 'template_redirect', array( $this,'THEME_NAME_notice_frontend_missing_acf' ), 0 );

            // Switch theme if ACF pro missing
            add_action( 'after_switch_theme', array( $this,'THEME_NAME_check_required_theme_plugins' ), 10, 2 );
        
        }  
        
        /**
         * Add admin notice if ACF Pro missing
         *
        */
        public function THEME_NAME_notice_missing_acf(){
		    global $THEME_NAME_acf_notice_msg;
		    echo '<div class="notice notice-error notice-large"><div class="notice-title">'. __( $this->THEME_NAME_acf_notice_msg, 'THEME_TEXTDOMAIN') .'</div></div>';
        }

        /*
        *	Frontend notice
        */
        public function THEME_NAME_notice_frontend_missing_acf(){
            global $THEME_NAME_acf_notice_msg;            
            wp_die( $this->THEME_NAME_acf_notice_msg );
        }

        /*
        *	Switch Theme if ACF Pro missing
        */
        function THEME_NAME_check_required_theme_plugins( $oldtheme_name, $oldtheme ) {
            // Switch back to previous theme
            switch_theme( $oldtheme->stylesheet );
            return false;
        }

    }
    
}
new THEME_NAME_ACF_Missing();
