<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Create and load customizer section and options for login screen.
	function wpwebapps_login_customizer_register( $wp_customize ){
		
		$wp_customize->add_panel( 'wpwa_login_slider_panel', array(
			    'priority' => 180,
			    'capability' => 'manage_options',
			    'theme_supports' => '',
			    'title' => __( 'Login Slider', 'text-domain' ),
			    'description' => '<a href="'. get_admin_url().'customize.php?url='. wp_login_url().'" id="submit" class="button button-primary">View Login Page</a>',
			) );
	
		$wp_customize->add_section( 'wpwa_login_slider_slides_section', array(
			'priority' => 10,
			'capability' => 'manage_options',
			'panel' => 'wpwa_login_slider_panel',
			'theme_supports' => '',
			'title' => __( 'Slides', 'text-domain' ),
			'description' => '<a href="'. get_admin_url().'customize.php?url='. wp_login_url().'" id="submit" class="button button-primary">View Login Page</a>',
			) );
		
		// Transition Style
		$wp_customize->add_setting( 'wpwa_login_options[transition-style]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[transition-style]', array(
			'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Transition Style', 'text-domain' ),
			'priority'    => 3,
			'type'        => 'select',
			'choices'     => array(
					''          => __( 'Slide', 'text-domain' ),
		            'fade'      => __( 'Fade', 'text-domain' ),
		            'fadeUp'    => __( 'Fade Up', 'text-domain' ),
		            'backSlide' => __( 'Back Slide', 'text-domain' ),
		            'goDown'    => __( 'Go Down', 'text-domain' )
		    )
		) );
		
		// Slide Duration In Milliseconds (zero stops auto play)
		$wp_customize->add_setting( 'wpwa_login_options[auto-play]', array(
			'default'     => '5000',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[auto-play]', array(
			'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Slide Duration (milliseconds)', 'text-domain' ),
			'type'        => 'text',
			'priority'    => 5,
		) );
		
		$wp_customize->add_setting( 'wpwa_login_options[image1]', array(
			'default'      => '',
			'type'         => 'option',
			'sanitize_callback'    => '',
			) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpwa_login_options[image1]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
		    'label'       => __( 'Slider Image 1', 'text-domain' ),
		    'priority'    => 10,
		) ) );
		
		$wp_customize->add_setting( 'wpwa_login_options[imagelink1]', array(
			'type'        => 'option',
			'capability'  => 'manage_options',
			'sanitize_callback' => 'esc_url',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink1]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Image 1 Link URL', 'text-domain' ),
			'type'        => 'url',
			'priority'    => 15,
		) );
		
		// open link in new window
		$wp_customize->add_setting( 'wpwa_login_options[imagelink1open]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink1open]', array(
			'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Open Link 1 In New Tab/Window', 'text-domain' ),
			'type'        => 'checkbox',
			'priority'    => 17,
		) );
		
		$wp_customize->add_setting( 'wpwa_login_options[image2]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
			) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpwa_login_options[image2]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
		    'label'       => __( 'Slider Image 2', 'text-domain' ),
		    'priority'    => 20,
		) ) );
		
		$wp_customize->add_setting( 'wpwa_login_options[imagelink2]', array(
			'type'        => 'option',
			'capability'  => 'manage_options',
			'sanitize_callback' => 'esc_url',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink2]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Image 2 Link URL', 'text-domain' ),
			'type'        => 'url',
			'priority'    => 25,
		) );
		
		// open link in new window
		$wp_customize->add_setting( 'wpwa_login_options[imagelink2open]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink2open]', array(
			'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Open Link 2 In New Tab/Window', 'text-domain' ),
			'type'        => 'checkbox',
			'priority'    => 27,
		) );
		
		$wp_customize->add_setting( 'wpwa_login_options[image3]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
			) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpwa_login_options[image3]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
		    'label'       => __( 'Slider Image 3', 'text-domain' ),
		    'priority'    => 30,
		) ) );
		
		$wp_customize->add_setting( 'wpwa_login_options[imagelink3]', array(
			'type'        => 'option',
			'capability'  => 'manage_options',
			'sanitize_callback' => 'esc_url',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink3]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Image 3 Link URL', 'text-domain' ),
			'type'        => 'url',
			'priority'    => 35,
		) );
		
		// open link in new window
		$wp_customize->add_setting( 'wpwa_login_options[imagelink3open]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink3open]', array(
			'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Open Link 3 In New Tab/Window', 'text-domain' ),
			'type'        => 'checkbox',
			'priority'    => 37,
		) );
				
		$wp_customize->add_setting( 'wpwa_login_options[image4]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
			) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpwa_login_options[image4]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
		    'label'       => __( 'Slider Image 4', 'text-domain' ),
		    'priority'    => 40,
		) ) );
		
		$wp_customize->add_setting( 'wpwa_login_options[imagelink4]', array(
			'type'        => 'option',
			'capability'  => 'manage_options',
			'sanitize_callback' => 'esc_url',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink4]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Image 4 Link URL', 'text-domain' ),
			'type'        => 'url',
			'priority'    => 45,
		) );
		
		// open link in new window
		$wp_customize->add_setting( 'wpwa_login_options[imagelink4open]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink4open]', array(
			'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Open Link 4 In New Tab/Window', 'text-domain' ),
			'type'        => 'checkbox',
			'priority'    => 47,
		) );
				
		$wp_customize->add_setting( 'wpwa_login_options[image5]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
			) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpwa_login_options[image5]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
		    'label'       => __( 'Slider Image 5', 'text-domain' ),
		    'priority'    => 50,
		) ) );
		
		$wp_customize->add_setting( 'wpwa_login_options[imagelink5]', array(
			'type'        => 'option',
			'capability'  => 'manage_options',
			'sanitize_callback' => 'esc_url',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink5]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Image 5 Link URL', 'text-domain' ),
			'type'        => 'url',
			'priority'    => 55,
		) );
		
		// open link in new window
		$wp_customize->add_setting( 'wpwa_login_options[imagelink5open]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink5open]', array(
			'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Open Link 5 In New Tab/Window', 'text-domain' ),
			'type'        => 'checkbox',
			'priority'    => 57,
		) );
		
		$wp_customize->add_setting( 'wpwa_login_options[image6]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
			) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpwa_login_options[image6]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
		    'label'       => __( 'Slider Image 6', 'text-domain' ),
		    'priority'    => 60,
		) ) );
		
		$wp_customize->add_setting( 'wpwa_login_options[imagelink6]', array(
			'type'        => 'option',
			'capability'  => 'manage_options',
			'sanitize_callback' => 'esc_url',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink6]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Image 6 Link URL', 'text-domain' ),
			'type'        => 'url',
			'priority'    => 65,
		) );
		
		// open link in new window
		$wp_customize->add_setting( 'wpwa_login_options[imagelink6open]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink6open]', array(
			'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Open Link 6 In New Tab/Window', 'text-domain' ),
			'type'        => 'checkbox',
			'priority'    => 67,
		) );
		
		$wp_customize->add_setting( 'wpwa_login_options[image7]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
			) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpwa_login_options[image7]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
		    'label'       => __( 'Slider Image 7', 'text-domain' ),
		    'priority'    => 70,
		) ) );
		
		$wp_customize->add_setting( 'wpwa_login_options[imagelink7]', array(
			'type'        => 'option',
			'capability'  => 'manage_options',
			'sanitize_callback' => 'esc_url',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink7]', array(
		    'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Image 7 Link URL', 'text-domain' ),
			'type'        => 'url',
			'priority'    => 75,
		) );
		
		// open link in new window
		$wp_customize->add_setting( 'wpwa_login_options[imagelink7open]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[imagelink7open]', array(
			'section'     => 'wpwa_login_slider_slides_section',
			'label'       => __( 'Open Link 7 In New Tab/Window', 'text-domain' ),
			'type'        => 'checkbox',
			'priority'    => 77,
		) );
		

// colors and branding
		$wp_customize->add_section( 'wpwa_login_slider_color_section', array(
			'priority' => 30,
			'capability' => 'manage_options',
			'panel' => 'wpwa_login_slider_panel',
			'theme_supports' => '',
			'title' => __( 'Colors and Branding', 'text-domain' ),
			'description' => '<a href="'. get_admin_url().'customize.php?url='. wp_login_url().'" id="submit" class="button button-primary">View Login Page</a>',
			) );
		
		// logo above form
		$wp_customize->add_setting( 'wpwa_login_options[login-logo]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
			) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpwa_login_options[login-logo]', array(
		    'section'     => 'wpwa_login_slider_color_section',
		    'label'       => __( 'Login Form Logo', 'text-domain' ),
		    'priority'    => 10,
		) ) );
		
		// body background color
		$wp_customize->add_setting( 'wpwa_login_options[body-background]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[body-background]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Body Background', 'text-domain' ),
			'priority'    => 15,
		) ) );
		
		// form background color
		$wp_customize->add_setting( 'wpwa_login_options[form-background]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[form-background]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Form Background', 'text-domain' ),
			'priority'    => 20,
		) ) );
		
		// transparent form background
		$wp_customize->add_setting( 'wpwa_login_options[transparent-form]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[transparent-form]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Transparent Form Background', 'text-domain' ),
			'type'        => 'checkbox',
			'priority'    => 25,
		) );
		
		// remove form shadow
		$wp_customize->add_setting( 'wpwa_login_options[form-shadow]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => '',
		) );
		
		$wp_customize->add_control( 'wpwa_login_options[form-shadow]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Remove Form Shadow', 'text-domain' ),
			'type'        => 'checkbox',
			'priority'    => 30,
		) );
		
		// form label color
		$wp_customize->add_setting( 'wpwa_login_options[form-label]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[form-label]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Form Label Color', 'text-domain' ),
			'priority'    => 35,
		) ) );
		
		// form input background color
		$wp_customize->add_setting( 'wpwa_login_options[form-input-background]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[form-input-background]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Form Input Background Color', 'text-domain' ),
			'priority'    => 40,
		) ) );
		
		// form input text color
		$wp_customize->add_setting( 'wpwa_login_options[form-input-text]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[form-input-text]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Form Input Text Color', 'text-domain' ),
			'priority'    => 45,
		) ) );
		
		// form button text
		$wp_customize->add_setting( 'wpwa_login_options[form-button-text]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[form-button-text]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Form Button Text Color', 'text-domain' ),
			'priority'    => 50,
		) ) );
		
		// form button background
		$wp_customize->add_setting( 'wpwa_login_options[form-button-background]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[form-button-background]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Form Button Background Color', 'text-domain' ),
			'priority'    => 55,
		) ) );
		
		// form button text
		$wp_customize->add_setting( 'wpwa_login_options[form-button-text-hover]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[form-button-text-hover]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Form Button Text Color (Hover)', 'text-domain' ),
			'priority'    => 60,
		) ) );
		
		// form button background
		$wp_customize->add_setting( 'wpwa_login_options[form-button-background-hover]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[form-button-background-hover]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Form Button Background Color (Hover)', 'text-domain' ),
			'priority'    => 65,
		) ) );
		
		// below form links color
		$wp_customize->add_setting( 'wpwa_login_options[login-link]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[login-link]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Below Form Links', 'text-domain' ),
			'priority'    => 70,
		) ) );
		
		// below form links color (hover)
		$wp_customize->add_setting( 'wpwa_login_options[login-link-hover]', array(
			'default'     => '',
			'type'        => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpwa_login_options[login-link-hover]', array(
			'section'     => 'wpwa_login_slider_color_section',
			'label'       => __( 'Below Form Links (Hover)', 'text-domain' ),
			'priority'    => 80,
		) ) );
		
		
	}
	add_action( 'customize_register', 'wpwebapps_login_customizer_register' );
	
	
	
	