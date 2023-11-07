<?php
/**
 * Plugin Name: Integration for Billingo & WooCommerce
 * Version: 3.4.0
 * Requires at least: 5.3
 * Requires PHP: 5.6
 * License: GPL v2 or later
 * Description: Billingo online számlázó összeköttetés WooCommerce-hez
 * Author: PWS Online Kft. <info@pws-online.com>
 * Author URI: https://pws-online.com
 * Text Domain: billingo
 */

if (!defined('WPINC')) {
    die();
}

define('BILLINGO__PLUGIN_URL', plugin_dir_url(__FILE__));
define('BILLINGO__PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once BILLINGO__PLUGIN_DIR . 'includes/PWSBillingo.php';
require_once BILLINGO__PLUGIN_DIR . 'includes/class-billingo.php';

register_activation_hook(__FILE__, ['WC_Billingo', 'install']);

add_action('init', ['WC_Billingo', 'init']);

if (is_admin()) {
    require_once BILLINGO__PLUGIN_DIR . 'admin/class-billingo-admin.php';
    add_action('init', ['Billingo_Admin', 'init']);
}
