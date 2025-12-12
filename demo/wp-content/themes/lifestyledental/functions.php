<?php

	add_action('wp_print_styles', 'wps_deregister_styles', 100);
	function wps_deregister_styles()
	{
		wp_dequeue_style('wp-block-library');
	}

	add_filter('upload_mimes', function ($mimes) {
		$mimes['webp'] = 'image/webp';

		return $mimes;
	});

	// Echo dist path
	function the_dist_path($file = false)
	{
		echo get_dist_path($file);
	}

	// Get dist path
	function get_dist_path($file = false)
	{
		$path = get_template_directory_uri() . "/dist/";

		if ($file) {
			$path .= $file;
		}

		return $path;
	}

	add_theme_support('post-thumbnails');

	// Register menus
	register_nav_menus(array(
		'main_nav'     => 'Main Navigation',
		'footer_nav_1' => 'Footer Navigation 1',
		'footer_nav_2' => 'Footer Navigation 2',
		'footer_nav_3' => 'Footer Navigation 3',
		'footer_nav_4' => 'Footer Navigation 4'
	));

	// Register widgets
	add_action('widgets_init', 'pop_widgets_init');
	function pop_widgets_init()
	{
		register_sidebar(array(
			'name'          => __('Facebook Review Widget', 'lifestyldental'),
			'id'            => 'sidebar-1',
			'description'   => __('Displays Facebook Reviews Widget.', 'lifestyldental'),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		));
	}

	// Add options page
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page(array(
			'page_title'    => 'Theme Settings',
			'menu_title'    => 'Theme Settings',
			'menu_slug'     => 'theme-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false,
			'icon_url'      => 'dashicons-admin-tools'
		));
	}

	// Finance calculator shortcode
	function finance_calculator_shortcode()
	{
		ob_start();
		get_template_part('_components/finance-calculator');
		return ob_get_clean();
	}
	add_shortcode('finance-calculator', 'finance_calculator_shortcode');

	// Blocks wrapper shortcode
	function blocks_wrapper_shortcode($atts, $content = '') {
		$atts = shortcode_atts(array(
				'class' => '',
			), $atts);
		return '<div class="'. $atts['class'] .'">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode('block', 'blocks_wrapper_shortcode');

	// Blocks row shortcode
	function blocks_row_shortcode($atts, $content = '') {
		$atts = shortcode_atts(array(
				'class' => '',
			), $atts);
		return '<div class="row '. $atts['class'] .'">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'row', 'blocks_row_shortcode' );

	// Blocks column shortcode
	function blocks_column_shortcode($atts, $content = '') {
		$atts = shortcode_atts(array(
				'class' => '',
			), $atts);
		return '<div class="col-12 '. $atts['class'] .'">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'column', 'blocks_column_shortcode' );

	// Video shortcode
	function video_shortcode($atts, $content = '') {
		$atts = shortcode_atts(array(
			'file-name' => '',
		), $atts);
		return '<video controls="controls" width="100%" height="200"><source src="https://www.lifestyledental.co.uk/wp-content/themes/lifestyledental/dist/videos/' . $atts['file-name'] . '" type="video/mp4">Your browser does not support the video tag.</video>';
	}

	add_shortcode( 'video', 'video_shortcode' );

	// YouTube shortcode
	function youtube_shortcode($atts) {
		$yid = $atts['id'];

		return '
			<a href="https://www.youtube.com/watch?v='.$yid.'" class="youtube-video" data-youtube-id="'.$yid.'" target="_blank">
				<img src="https://img.youtube.com/vi/'.$yid.'/mqdefault.jpg">
			</a>
		';
	}

	add_shortcode( 'youtube', 'youtube_shortcode' );

	// Braces form shortcode
	function braces_form_shortcode()
	{
		ob_start();
		get_template_part('_components/braces-form');
		return ob_get_clean();
	}
	add_shortcode('braces-form', 'braces_form_shortcode');

add_action(
	'wp_footer',
	function() {
		?>

	<script>
		AOS.init();

		jQuery(function($) {

			//Mobile footer button
			var isScrolling;

			$(window).on('scroll', function() {
				var y = $(this).scrollTop();
				window.clearTimeout(isScrolling);

				isScrolling = setTimeout(function() {
					if (y > 300 && y < 4500) {
						$("#floating-btn").addClass("show");
					}
					$(window).on('scroll', function() {
						$("#floating-btn").removeClass("show");
					})
				}, 500);
			});

			$('.aligner-slider').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 4000,
				responsive: [{
						breakpoint: 1024,
						settings: {
							slidesToShow: 2,
						}
					},
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 1,
						}
					}
				]

			});

			// $(window).scroll(function() {
			// 	var scroll = $(this).scrollTop() - 3600;
			// 	$(".parallax2").css({
			// 		"background-positionY": scroll / 5 + "px"
			// 	})
			// })

			// $(window).scroll(function() {
			// 	var scroll = $(this).scrollTop() - 2380;
			// 	$(".parallax2").css({
			// 		"background-positionY": scroll / 10 + "px"
			// 	})
			// })



		});

		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight) {
					panel.style.maxHeight = null;
					panel.style.opacity = 0;
				} else {
					panel.style.maxHeight = panel.scrollHeight + 10 + "px";
					panel.style.opacity = 1;
				}
			});
		}

		var openLightbox = document.querySelectorAll('.open-lightbox');

		for (var i = 0; i < openLightbox.length; i++) {
			openLightbox[i].addEventListener('click', function() {
				this.parentElement.classList.add('open');
			});

		}

		var openLightbox = document.querySelectorAll('.close-lightbox');

		for (var i = 0; i < openLightbox.length; i++) {
			openLightbox[i].addEventListener('click', function() {
				this.parentElement.parentElement.parentElement.classList.remove('open');
			});

		}

		function toggleForm() {
			var element = document.getElementById("popup-finance-form");
			element.classList.toggle("open");
		}
	</script>	

	<?php
	},
	10
);

add_action(
	'wpcf7_before_send_mail',
	function( $contact_form ) {
		$form_id = $contact_form->id();

		if ( ( 4860 == $form_id ) ) { // General Smile Assessment form
			$submission  = WPCF7_Submission::get_instance();
			$posted_data = $submission->get_posted_data();

			$first_name    = ( $posted_data['first-name'] ) ?: '[Not Set]';
			$last_name     = ( $posted_data['last-name'] ) ?: '[Not Set]';
			$email_address = ( $posted_data['email-address'] ) ?: '[Not Set]';
			$phone_number  = ( $posted_data['best-number'] ) ?: '[Not Set]';

			$notes = '';

			if ( $posted_data['gender'] ) {
				$notes .= sprintf( "Gender: %s. \n\r", $posted_data['gender'][0] );
			}

			if ( $posted_data['age_range'] ) {
				$notes .= sprintf( "Age Range: %s. \n\r", $posted_data['age_range'][0] );
			}

			if ( $posted_data['dentist_for'] ) {
				$notes .= sprintf( "Dentist is for: %s. \n\r", implode( ', ', $posted_data['dentist_for'] ) );
			}

			if ( $posted_data['main_dental_concerns'] ) {
				$notes .= sprintf( "Main dental concerns: %s. \n\r", implode( ', ', $posted_data['main_dental_concerns'] ) );
			}

			if ( $posted_data['anxiety_level'] ) {
				$notes .= sprintf( "Anxiety level: %s. \n\r", $posted_data['anxiety_level'][0] );
			}

			if ( $posted_data['quickly_like_to_be_seen'] ) {
				$notes .= sprintf( "How quickly to be seen: %s. \n\r", $posted_data['quickly_like_to_be_seen'][0] );
			}

			if ( $posted_data['interested_in_treatments'] ) {
				$notes .= sprintf( "Interested in these treatments: %s. \n\r", implode( ', ', $posted_data['interested_in_treatments'] ) );
			}

			if ( $posted_data['is_an_emergency'] ) {
				$notes .= sprintf( "Is an emergency? %s. \n\r", $posted_data['is_an_emergency'][0] );
			}

			if ( $posted_data['opt-in-email'] ) {
				$notes .= sprintf( "Opted into email communications? %s. \n\r", ( ! empty( $posted_data['opt-in-email'][0] ) ) ? 'Yes' : 'No' );
			}

			$base_url = 'https://api.infusionsoft.com/crm/rest/v1/';
			$token    = 'KeapAK-44f55e1de73b75f00bb01b6f3d837fe7b7b01b5184ad65a004';

			/**
			 * CREATE contact
			 */
			$payload = [
				'family_name' => $last_name,
				'given_name'  => $first_name,
				'email_addresses' => [
					[
						'email' => $email_address,
						'field' => 'EMAIL1',
					]
				],
				'phone_numbers' => [
					[
						'number' => $phone_number,
						'field'  => 'PHONE1'
					]
				]
			];

			$contact_response = wp_remote_post(
				$base_url . 'contacts',
				[
					'headers' => [
						'X-Keap-API-Key' => $token,
						'Content-Type'   => 'application/json',
					],

					'body' => json_encode( $payload ),
				]
			);

			$contact_id = json_decode( $contact_response['body'] )->id;

			/**
			 * ADD NOTES to contact
			 */
			$payload = [
				"notes" => $notes
			];

			$wp_request = new WP_Http;

			$wp_request->request(
				$base_url . 'contacts/' . $contact_id,
				[
					'method'  => 'PATCH',
					'headers' => [
						'X-Keap-API-Key' => $token,
						'Content-Type'   => 'application/json',
					],
					'body' => json_encode( $payload )
				]
			);

			/**
			 * TAG contact
			 */
			$payload = [
				"tagIds" => [ 1194 ] // General Smile Assessment tag
			];

			wp_remote_post(
				$base_url . 'contacts/' . $contact_id . '/tags',
				[
					'headers' => [
						'X-Keap-API-Key' => $token,
						'Content-Type'   => 'application/json',
					],

					'body' => json_encode( $payload ),
				]
			);
		}
    }
);

/*
 * -----------------------------------------------------------------------------
 * NZ
 * -----------------------------------------------------------------------------
*/


function capture_utm_parameters() {
    session_start();
    if (isset($_GET['utm_source']) || isset($_GET['utm_medium']) || isset($_GET['utm_campaign']) || isset($_GET['utm_term']) || isset($_GET['utm_content'])) {
        $_SESSION['utm_source']   = isset($_GET['utm_source']) ? sanitize_text_field($_GET['utm_source']) : '';
        $_SESSION['utm_medium']   = isset($_GET['utm_medium']) ? sanitize_text_field($_GET['utm_medium']) : '';
        $_SESSION['utm_campaign'] = isset($_GET['utm_campaign']) ? sanitize_text_field($_GET['utm_campaign']) : '';
        $_SESSION['utm_term']     = isset($_GET['utm_term']) ? sanitize_text_field($_GET['utm_term']) : '';
        $_SESSION['utm_content']  = isset($_GET['utm_content']) ? sanitize_text_field($_GET['utm_content']) : '';
    }
}
add_action('wp', 'capture_utm_parameters');


add_action('wp_footer', 'debug_session_data');
function debug_session_data() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // Debug output for session data
    echo '<div class="debug">';
    echo 'UTM Source: ' . (isset($_SESSION['utm_source']) ? $_SESSION['utm_source'] : 'instagram') . '<br>';
    echo 'UTM Medium: ' . (isset($_SESSION['utm_medium']) ? $_SESSION['utm_medium'] : 'social') . '<br>';
    echo 'UTM Campaign: ' . (isset($_SESSION['utm_campaign']) ? $_SESSION['utm_campaign'] : '') . '<br>';
    echo 'UTM Term: ' . (isset($_SESSION['utm_term']) ? $_SESSION['utm_term'] : '') . '<br>';
    echo 'UTM Content: ' . (isset($_SESSION['utm_content']) ? $_SESSION['utm_content'] : '') . '<br>';
    echo '<input type="text" id="user_utm_source" value="' . (isset($_SESSION['utm_source']) ? $_SESSION['utm_source'] : 'instagram') . '">';
    echo '<input type="text" id="user_utm_medium" value="' . (isset($_SESSION['utm_medium']) ? $_SESSION['utm_medium'] : 'social') . '">';
    echo '<input type="text" id="user_utm_campaign" value="' . (isset($_SESSION['utm_campaign']) ? $_SESSION['utm_campaign'] : '') . '">';
    echo '<input type="text" id="user_utm_term" value="' . (isset($_SESSION['utm_term']) ? $_SESSION['utm_term'] : '') . '">';
    echo '<input type="text" id="user_utm_content" value="' . (isset($_SESSION['utm_content']) ? $_SESSION['utm_content'] : '') . '">';
    echo '</div>';
}

function add_debug_css_to_footer() {
    // Output the CSS to hide/show the debug class in the footer
    echo "
    <style>
        .debug {
            display: none;
        }
        .admin-bar .debug {
            display: block;
        }
    </style>
    ";
}
add_action('wp_footer', 'add_debug_css_to_footer');

function add_custom_js_to_footer() {
    ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            // Retrieve the UTM user fields
            var userUtmSourceField = document.getElementById('user_utm_source');
            var userUtmMediumField = document.getElementById('user_utm_medium');
            var userUtmCampaignField = document.getElementById('user_utm_campaign');
            var userUtmTermField = document.getElementById('user_utm_term');
            var userUtmContentField = document.getElementById('user_utm_content');

            // Select the UTM input fields that need to be populated
            var utmSourceField = document.getElementById('utm_source');
            var utmMediumField = document.getElementById('utm_medium');
            var utmCampaignField = document.getElementById('utm_campaign');
            var utmTermField = document.getElementById('utm_term');
            var utmContentField = document.getElementById('utm_content');

            // Populate the UTM fields with values from the user input fields
            if (utmSourceField && userUtmSourceField) {
                utmSourceField.value = userUtmSourceField.value || 'google';
            }
            if (utmMediumField && userUtmMediumField) {
                utmMediumField.value = userUtmMediumField.value || 'organic';
            }
            if (utmCampaignField && userUtmCampaignField) {
                utmCampaignField.value = userUtmCampaignField.value || '';
            }
            if (utmTermField && userUtmTermField) {
                utmTermField.value = userUtmTermField.value || '';
            }
            if (utmContentField && userUtmContentField) {
                utmContentField.value = userUtmContentField.value || '';
            }
        }, 2000);
    });
</script>

    <?php
}
add_action('wp_footer', 'add_custom_js_to_footer');