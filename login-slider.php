<?php 

/*
 Plugin Name: Login Slider
 Description: An announcement slider for your login screen
 Version:     1.0.0
 Text Domain: wpwa-login-slider
 Domain Path: /languages
 Author:      WP Web Apps
 Author URI:  https://wpwebapps.com
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


// Define Version
	define( 'LOGIN_SLIDER_VERSION', '1.0.0' );


// Load other files and text domain for translation
	function wpwebapps_login_load_other_files() {
	
		include_once( 'includes/login-mods.php' );
		include_once( 'includes/customizer-options.php' );
		load_plugin_textdomain( 'wpwa-login-slider', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		
	}
	add_action( 'init', 'wpwebapps_login_load_other_files' );
	

// Load stylesheet
	function wpwebapps_login_css() {
		
		wp_enqueue_style( 'login-slider', plugin_dir_url( __FILE__ ). 'css/style-login.css', false, LOGIN_SLIDER_VERSION, 'screen' );
		
	}
	add_action( 'login_enqueue_scripts', 'wpwebapps_login_css' );


// Load login scripts
	function wpwebapps_login_js() {
		
		wp_enqueue_script( 'owl', plugin_dir_url( __FILE__ ). 'js/owl.js', array ( 'jquery' ),LOGIN_SLIDER_VERSION, false);
		
	}
	add_action( 'login_enqueue_scripts', 'wpwebapps_login_js' );
