<?php
/**
 * Activation tools.
 *
 * @package ssl-alp
 */

if ( ! defined( 'WPINC' ) ) {
	// Prevent direct access.
	exit;
}

/**
 * Fired during plugin activation.
 */
class SSL_ALP_Activator {
	/**
	 * Activate plugin.
	 */
	public static function activate() {
		self::add_options();
	}

	/**
	 * Add plugin options and their default values.
	 */
	public static function add_options() {
		// Add options with default values (if they already exist, nothing happens).
		add_option( 'ssl_alp_require_login', true );
		add_option( 'ssl_alp_allow_multiple_authors', true );
		add_option( 'ssl_alp_disable_post_trackbacks', true );
		add_option( 'ssl_alp_enable_crossreferences', true );
		add_option( 'ssl_alp_enable_edit_summaries', true );
		add_option( 'ssl_alp_enable_tex', true );

		// Add network options.
		add_site_option( 'ssl_alp_additional_media_types', '' );
		add_site_option( 'ssl_alp_katex_use_custom_urls', false );
		add_site_option( 'ssl_alp_katex_js_url', '' );
		add_site_option( 'ssl_alp_katex_copy_js_url', '' );
		add_site_option( 'ssl_alp_katex_css_url', '' );
		add_site_option( 'ssl_alp_katex_copy_css_url', '' );
	}
}