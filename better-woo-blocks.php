<?php
/**
 * Plugin Name:       Better Blocks For WooCommerce
 * Description:       Better and advanced blocks for your WooCommerce store.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Ohidul Islam
 * Author URI:        https://ohidul.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       better-woo-blocks
 * Requires Plugins:  woocommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Include autoloader.
require_once __DIR__ . '/vendor/autoload.php';