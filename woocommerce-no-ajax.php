<?php
/**
 * Plugin Name: WooCommerce No Ajax in Checkout
 * Plugin URI: -
 * Description: A plugin to disable Ajax in woocommerce checkouts
 * Version: 0.1.0.0
 * Author: Prismapp.io
 * Author URI: https://www.prismapp.io
 * Text Domain: woocommerce-extension
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
  if (!class_exists( 'WC_No_Ajax_Checkout')) {
    class WC_No_Ajax_Checkout {
      public function __construct() {
        add_action( 'wp_enqueue_scripts', array($this, 'prismappio_27023433_disable_checkout_script') );
      }

      public function prismappio_27023433_disable_checkout_script() {
        wp_dequeue_script( 'wc-checkout' );
      }
    }
  }
}