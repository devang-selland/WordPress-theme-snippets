<?php
/**
 * Check ACF Pro Plugin active or not on theme activation.
 *
 * @package WordPress
 * @subpackage Base_Theme
 * @since Base Theme 1.0
 */

if( !class_exists('acf') ) {
	
    $base_theme_acf_notice_msg = __( 'This Theme needs "Advanced Custom Fields Pro" to run. Please download and activate it', 'base_theme' );
	
	/*
	*	Admin notice
	*/
	add_action( 'admin_notices', 'base_theme_notice_missing_acf' );
	function base_theme_notice_missing_acf()
	{
		global $base_theme_acf_notice_msg;
		
		echo '<div class="notice notice-error notice-large"><div class="notice-title">'. $base_theme_acf_notice_msg .'</div></div>';
    }

	/*
	*	Frontend notice
	*/
	add_action( 'template_redirect', 'base_theme_notice_frontend_missing_acf', 0 );
	function base_theme_notice_frontend_missing_acf()
	{
		global $base_theme_acf_notice_msg;
		
		wp_die( $base_theme_acf_notice_msg );
    }
    
    add_action( 'after_switch_theme', 'base_theme_check_required_theme_plugins', 10, 2 );
    function base_theme_check_required_theme_plugins( $oldtheme_name, $oldtheme ) {
        // Switch back to previous theme
        switch_theme( $oldtheme->stylesheet );
        return false;
    }

}