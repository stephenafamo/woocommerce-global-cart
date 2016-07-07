<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://stephenafamo.com
 * @since             0.1.0
 * @package           Woocommerce_Global_Cart
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Global Cart
 * Plugin URI:        http://stephenafamo.com/woocommerce-global-cart/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1.0
 * Author:            Stephen Afam-Osemene
 * Author URI:        http://stephenafamo.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-global-cart
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-global-cart-activator.php
 */
function activate_woocommerce_global_cart() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-global-cart-activator.php';
	Woocommerce_Global_Cart_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-global-cart-deactivator.php
 */
function deactivate_woocommerce_global_cart() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-global-cart-deactivator.php';
	Woocommerce_Global_Cart_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_global_cart' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_global_cart' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-global-cart.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_woocommerce_global_cart() {

	$plugin = new Woocommerce_Global_Cart();
	$plugin->run();

}
run_woocommerce_global_cart();
