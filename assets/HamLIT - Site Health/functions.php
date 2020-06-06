<?php
/**
 * Register the Site Health Tool settings page
 */
if( function_exists( 'hamlit_menu' ) ) {
        function hamlit_site_health_page() {
        	add_submenu_page(
                'HamLIT-Web-Solutions', //parent slug
                'HamLIT - Site Health', //page title
                'Site Health', //menu text
                'manage_options', //capability level
                '/HamLIT-Site-Health', //slug
                'hamlit_site_health_menu'); //function to run
        }
}
add_action( 'admin_menu', 'hamlit_site_health_page', 10 );

/**
 * Filters the list of registered Site Health Tool tests
 *
 * @param array $tests The array of registered Site Health tests
 * @return array The filtered list of tests.
 */
function hamlit_siteHealth_filter_tests( $tests ) {
	// Don't filter on the plugin settings page
	if ( get_current_screen()->base !== 'settings_page_hamlit_siteHealth-settings' ) {
		$hidden_tests = (array) maybe_unserialize( get_option( 'hamlit_siteHealth_hidden_tests' ) );
		foreach ( $hidden_tests as $test ) {
			unset( $tests['direct'][ $test ] );
			unset( $tests['async'][ $test ] );
		}
	}

	return $tests;
}
add_filter( 'site_status_tests', 'hamlit_siteHealth_filter_tests', 10000 );

/**
 * Disable the dashboard widget
 */
function hamlit_siteHealth_filter_dashboard_widget() {
	if ( ! get_option( 'hamlit_siteHealth_widget_enabled', 1 ) ) {
		global $wp_meta_boxes;
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health'] );
	}
}
add_action( 'wp_dashboard_setup', 'hamlit_siteHealth_filter_dashboard_widget' );


/**
 * Output for the Site Health Tool Settings page
 */
function hamlit_site_health_menu() { ?>

	<div class="wrap">
		<h1><?php _e( 'Site Health Tool Settings', 'HamLIT-Site-Health' ); ?></h1>

	<?php
	// Verify user has proper capability to view this page
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( __( 'Sorry, you are not allowed to manage Site Health tests for this site.', 'HamLIT-Site-Health' ) );
	}

	include_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php';
	$tests    = WP_Site_Health::get_tests();
	$disabled = get_option( 'hamlit_siteHealth_hidden_tests', array() );
	$widget   = get_option( 'hamlit_siteHealth_widget_enabled', 1 );
	$enabled  = array();

	// If tests have been submitted, process the form data
	if ( isset( $_POST['submit'] ) ) {

		// Verify form nonce before saving
		if ( isset( $_POST['hamlit_siteHealth-disable-tests-nonce'] ) && wp_verify_nonce( $_POST['hamlit_siteHealth-disable-tests-nonce'], 'hamlit_siteHealth-disable-tests' ) ) {

			// Validate that submitted tests are actually registered
			$test_names = array_merge( $tests['direct'], $tests['async'] );
			foreach ( $_POST['checked'] as $name ) {
				if ( isset( $test_names[ $name ] ) ) {
					$enabled[] = $name;
				}
			}

			// Only save the list of which tests were not checked.
			// This ensures that any tests that are added after this setting is
			// saved will still get run.
			$new_disabled = array_keys( array_diff_key( $test_names, array_flip( $enabled ) ) );
			update_option( 'hamlit_siteHealth_hidden_tests', $new_disabled );
			$disabled = $new_disabled;

			$widget = ( isset( $_POST['widget'] ) ) ? 1 : 0;
			update_option( 'hamlit_siteHealth_widget_enabled', $widget );

			$classes = 'notice notice-success is-dismissible';
			$message = __( 'Settings saved.', 'HamLIT-Site-Health' );
			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $classes ), esc_html( $message ) );

		} else {
			// Invalid or missing nonce
			$classes = 'notice notice-error is-dismissible';
			$message = __( 'Unable to submit this form, please try again. Your changes have not been saved.', 'HamLIT-Site-Health' );
			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $classes ), esc_html( $message ) );

		}
	}
	?>
	<form method="POST" action="">
		<h2><?php _e( 'Tests Enabled', 'HamLIT-Site-Health' ); ?></h2>
		<p><?php _e( 'Certain tests may not be relevant to your environment. Uncheck a test to remove it from the Site Health Status screen.', 'HamLIT-Site-Health' ); ?></p>
			<?php wp_nonce_field( 'hamlit_siteHealth-disable-tests', 'hamlit_siteHealth-disable-tests-nonce' ); ?>
			<ul>
			<?php
			foreach ( $tests as $type ) {
				$checked = false;
				foreach ( $type as $test => $details ) {
					$checked = ( ! in_array( $test, $disabled ) );
					echo '<li><input type="checkbox" ';
					if ( $checked ) {
						echo 'checked="checked" ';
					}
					echo 'name="checked[]" id="' . $test . '" value="' . $test . '" />';
					echo '<label for="' . $test . '">' . $details['label'] . '</label></li>';
				}
			}
			?>
			</ul>
		<h2><?php _e( 'Other Settings', 'HamLIT-Site-Health' ); ?></h2>
		<ul>
			<li>
				<input type="checkbox" name="widget" id="widget-setting"
					<?php
					if ( $widget ) {
						echo 'checked="checked"';
					}
					?>
				/>
				<label for="widget-setting"><?php _e( 'Dashboard Widget Enabled', 'HamLIT-Site-Health' ); ?></label>
			</li>
		</ul>
		<p>
			<input class="button button-primary" type="submit" value="<?php _e( 'Save Settings', 'HamLIT-Site-Health' ); ?>" name="submit" />
		</p>
	</form>
</div>
	<?php
}
