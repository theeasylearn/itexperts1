<?php
/**
 * The translations model class for ThemeIsle SDK
 *
 * @package     ThemeIsleSDK
 * @subpackage  Modules
 * @copyright   Copyright (c) 2024, Bogdan Preda
 * @license     http://opensource.org/licenses/gpl-3.0.php GNU Public License
 * @since       3.3.23
 */

namespace ThemeisleSDK\Modules;

use ThemeisleSDK\Common\Abstract_Module;
use ThemeisleSDK\Product;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Translations module for ThemeIsle SDK.
 */
class Translations extends Abstract_Module {

	const API_URL = 'https://translations.themeisle.com/wp-json/gpb-themeisle/';

	/**
	 * Check if we should load module for this.
	 *
	 * @param Product $product Product to check.
	 *
	 * @return bool Should load ?
	 */
	public function can_load( $product ) {
		if ( $this->is_from_partner( $product ) ) {
			return false;
		}

		if ( $product->is_wordpress_available() ) {
			return false;
		}

		if ( ! $product->is_plugin() ) {
			return false;
		}

		return apply_filters( $product->get_slug() . '_sdk_enable_private_translations', false );
	}

	/**
	 * Load module logic.
	 *
	 * @param Product $product Product to load.
	 *
	 * @return Translations Module instance.
	 */
	public function load( $product ) {

		$this->product = $product;

		add_filter( 'pre_set_site_transient_update_plugins', [ $this, 'add_translations' ], 11 );

		// Allow external downloads for this API.
		add_filter(
			'http_request_host_is_external',
			function ( $external, $host, $url ) {
				if ( strpos( $url, self::API_URL ) === 0 ) {
					return true;
				}
				return $external;
			},
			10,
			3 
		);

		return $this;
	}

	/**
	 * Get translations from API.
	 *
	 * @return mixed
	 */
	private function get_api_translations() {
		$translation_data = $this->get_translation_data();
		if ( empty( $translation_data ) ) {
			return false;
		}

		return $translation_data;
	}

	/**
	 * Get translation data from API.
	 *
	 * @return mixed
	 */
	private function get_translation_data() {
		$response = $this->safe_get(
			sprintf(
				'%stranslations',
				self::API_URL
			),
			array(
				'timeout'   => 15, //phpcs:ignore WordPressVIPMinimum.Performance.RemoteRequestTimeout.timeout_timeout, Inherited by wp_remote_get only, for vip environment we use defaults.
				'sslverify' => false,
			)
		);
		if ( is_wp_error( $response ) || 200 != wp_remote_retrieve_response_code( $response ) ) {
			return false;
		}
		$data = json_decode( wp_remote_retrieve_body( $response ) );
		if ( ! is_array( $data ) ) {
			return false;
		}

		return (array) $data;
	}

	/**
	 * Append translations that are available via API.
	 *
	 * @param array $_transient_data The transient data.
	 *
	 * @return mixed
	 */
	public function add_translations( $_transient_data ) {
		$locales = array_values( get_available_languages() );
		$locales = apply_filters( 'plugins_update_check_locales', $locales );
		$locales = array_unique( $locales );

		// append translations via API call
		$translations = $this->get_api_translations();
		if ( is_wp_error( $translations ) ) {
			return $_transient_data;
		}

		if ( ! is_array( $translations ) ) {
			return $_transient_data;
		}

		if ( ! isset( $_transient_data->translations ) ) {
			return $_transient_data;
		}

		foreach ( $translations as $translation ) {
			$translation = (array) $translation;
			if ( isset( $translation['language'] ) && in_array( $translation['language'], $locales, true ) ) {
				$_transient_data->translations[] = $translation;
			}
		}

		return $_transient_data;
	}
}
