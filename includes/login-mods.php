<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// add slider to footer on login screen
	function wpwebapps_login_slider_begin() {
		
		// extract options
		$wpwa_login_options = get_option( 'wpwa_login_options' );
		
		$slide1 = $wpwa_login_options['image1'];
		$slide2 = $wpwa_login_options['image2'];
		$slide3 = $wpwa_login_options['image3'];
		$slide4 = $wpwa_login_options['image4'];
		$slide5 = $wpwa_login_options['image5'];
		$slide6 = $wpwa_login_options['image6'];
		$slide7 = $wpwa_login_options['image7'];
		
		$slide_link_1 = $wpwa_login_options['imagelink1'];
		$slide_link_2 = $wpwa_login_options['imagelink2'];
		$slide_link_3 = $wpwa_login_options['imagelink3'];
		$slide_link_4 = $wpwa_login_options['imagelink4'];
		$slide_link_5 = $wpwa_login_options['imagelink5'];
		$slide_link_6 = $wpwa_login_options['imagelink6'];
		$slide_link_7 = $wpwa_login_options['imagelink7'];
		
		$newtab1 = $wpwa_login_options['imagelink1open'];
		$newtab2 = $wpwa_login_options['imagelink2open'];
		$newtab3 = $wpwa_login_options['imagelink3open'];
		$newtab4 = $wpwa_login_options['imagelink4open'];
		$newtab5 = $wpwa_login_options['imagelink5open'];
		$newtab6 = $wpwa_login_options['imagelink6open'];
		$newtab7 = $wpwa_login_options['imagelink7open'];
		
		$transition_style = $wpwa_login_options['transition-style'];
		
		if ($wpwa_login_options['auto-play'] != '') {
			$auto_play = $wpwa_login_options['auto-play'];
		} else {
			$auto_play = 5000;
		}
		
		$login_logo                   = $wpwa_login_options['login-logo'];
		$body_background              = $wpwa_login_options['body-background'];
		$form_background              = $wpwa_login_options['form-background'];
		$transparent_form             = $wpwa_login_options['transparent-form'];
		$form_shadow                  = $wpwa_login_options['form-shadow'];
		$form_label                   = $wpwa_login_options['form-label'];
		$form_input_background        = $wpwa_login_options['form-input-background'];
		$form_input_text              = $wpwa_login_options['form-input-text'];
		$form_button_text             = $wpwa_login_options['form-button-text'];
		$form_button_background       = $wpwa_login_options['form-button-background'];
		$form_button_text_hover       = $wpwa_login_options['form-button-text-hover'];
		$form_button_background_hover = $wpwa_login_options['form-button-background-hover'];
		$login_link                   = $wpwa_login_options['login-link'];
		$login_link_hover             = $wpwa_login_options['login-link-hover'];
		
		?>
		
			<div class="wpwa-login-announcements">
			
				<div class="owl-carousel">
					
					<?php if ( $slide1 != '' ) { ?>
						<a class="slide" id="slide-1" style="background-image: url( <?php echo $slide1; ?> );" <?php if ( $slide_link_1 != '' ) { ?>href="<?php echo $slide_link_1; ?>"<?php } ?><?php if ( $newtab1 != '' ) { ?> target="_blank"><?php } ?></a>
					
					<?php } if ( $slide2 != '' ) { ?>
						<a class="slide" id="slide-2" style="background-image: url( <?php echo $slide2; ?> );" <?php if ( $slide_link_2 != '' ) { ?>href="<?php echo $slide_link_2; ?>"<?php } ?><?php if ( $newtab2 != '' ) { ?> target="_blank"><?php } ?></a>
					
					<?php } if ( $slide3 != '' ) { ?>
						<a class="slide" id="slide-3" style="background-image: url( <?php echo $slide3; ?> );" <?php if ( $slide_link_3 != '' ) { ?>href="<?php echo $slide_link_3; ?>"<?php } ?><?php if ( $newtab3 != '' ) { ?> target="_blank"><?php } ?></a>
					
					<?php } if ( $slide4 != '' ) { ?>
						<a class="slide" id="slide-4" style="background-image: url( <?php echo $slide4; ?> );" <?php if ( $slide_link_4 != '' ) { ?>href="<?php echo $slide_link_4; ?>"<?php } ?><?php if ( $newtab4 != '' ) { ?> target="_blank"><?php } ?></a>
					
					<?php } if ( $slide5 != '' ) { ?>
						<a class="slide" id="slide-5" style="background-image: url( <?php echo $slide5; ?> );" <?php if ( $slide_link_5 != '' ) { ?>href="<?php echo $slide_link_5; ?>"<?php } ?><?php if ( $newtab5 != '' ) { ?> target="_blank"><?php } ?></a>
					
					<?php } if ( $slide6 != '' ) { ?>
						<a class="slide" id="slide-6" style="background-image: url( <?php echo $slide6; ?> );" <?php if ( $slide_link_6 != '' ) { ?>href="<?php echo $slide_link_6; ?>"<?php } ?><?php if ( $newtab6 != '' ) { ?> target="_blank"><?php } ?></a>
					
					<?php } if ( $slide7 != '' ) { ?>
						<a class="slide" id="slide-7" style="background-image: url( <?php echo $slide7; ?> );" <?php if ( $slide_link_7 != '' ) { ?>href="<?php echo $slide_link_7; ?>"<?php } ?><?php if ( $newtab7 != '' ) { ?> target="_blank"><?php } ?></a>
					
					<?php } ?>
					
				</div>
				
				<style>
				
					<?php if ( $login_logo != '' ) { ?>		
						body.login div#login h1 a {
							background-image: none !important;
							content: url('<?php echo $login_logo; ?>');
							width: auto;
							height: auto;
							max-width: 100%;
						}
					
					<?php } if ( $body_background != '' ) { ?>
						body.login {
							background-color: <?php echo $body_background; ?>;
						}
						
					<?php } if ( $form_background != '' ) { ?>
						#login form#loginform {
							background-color: <?php echo $form_background; ?>;
						}
						
					<?php } if ( $transparent_form != '' ) { ?>
						.login form {
							background: transparent;
						}
						
					<?php } if ( $form_shadow != '' ) { ?>
						.login form {
							box-shadow: none;
							-webkit-box-shadow: none;
						}
						
					<?php } if ( $form_input_text != '' || $form_input_background != '' ) { ?>
						#loginform input {
							color: <?php echo $form_input_text; ?>;
							background-color: <?php echo $form_input_background; ?>;
						}
					
					<?php } if ( $form_button_background != '' || $form_button_text != '' ) { ?>	
						#login input.button {
							background-color: <?php echo $form_button_background; ?>;
							color: <?php echo $form_button_text; ?>;
						}
					
					<?php } if ( $form_button_background_hover != '' || $form_button_text_hover != '' ) { ?>	
						#login input.button:hover {
							background-color: <?php echo $form_button_background_hover; ?>;
							color: <?php echo $form_button_text_hover; ?>;
						}
					
					<?php } if ( $login_link != '' || $login_link != '' ) { ?>	
						.login p#nav a,
						.login p#backtoblog a {
							color: <?php echo $login_link; ?>;
						}
					
					<?php } if ( $login_link_hover != '' || $login_link_hover != '' ) { ?>	
						.login p#nav a:hover,
						.login p#backtoblog a:hover {
							color: <?php echo $login_link_hover; ?>;
						}
					
					<?php } ?>

				</style>

				<script>
					jQuery(document).ready(function() {
						
						jQuery('.owl-carousel').owlCarousel({
							singleItem		: true,
							autoPlay		: <?php echo $auto_play; ?>,
							slideSpeed		: 1000,
							addClassActive	: 'active-slide',
							navigation		: true,
							navigationText	: false,
							pagination		: true,
							<?php if ( $transition_style != '' ) { ?>
							transitionStyle : "<?php echo $transition_style; ?>"
							<?php } ?>
						});
					
					});
				</script>

			</div>	

		<?php

	}
	add_action( 'login_footer', 'wpwebapps_login_slider_begin' );
	

// change logo url
	function wpwebapps_login_logo_url() {
	
	    return home_url();
	
	}
	add_filter( 'login_headerurl', 'wpwebapps_login_logo_url' );


// change logo text	
	function wpwebapps_login_logo_url_title() {
		
	    return get_bloginfo( 'name' );
	
	}
	add_filter( 'login_headertitle', 'wpwebapps_login_logo_url_title' );
	