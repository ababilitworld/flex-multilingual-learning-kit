<?php

namespace AbabilIthub\FlexMultilingualLearningKit;

/**
 * Flex Multilingual Learning Kit By Ababilithub
 *
 * @package ababilithub/flex-multillk-by-ababilithub
 *
 * @wordpress-plugin
 * Plugin Name:       Flex Multilingual Learning Kit By Ababilithub
 * Plugin URI:        https://ababilithub.com/wp-plugin/flex-multillk-by-ababilithub
 * Description:       Flexible Interactive multilingual learning kit for Wordpress, Exclusively by Ababil IT Hub.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * WC requires at least: 3.0.9
 * WC tested up to:   6.5
 * Requires Plugins:  
 * Author:            Ababil IT Hub
 * Author URI:        https://ababilithub.com/
 * Author Email:      ababilithub@gmail.com
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       flex-multillk-by-ababilithub
 * Domain Path:       /language
 *
 * Contributors:
 *  - Ababil IT Hub (ababilithub@gmail.com, https://ababilithub.com/)
 *  - Md Shafiul Alam (cse.shafiul@gmail.com, https://ababilithub.com/)
 */

(defined('ABSPATH') && defined('WPINC')) || die();

require_once __DIR__ . '/bootstrap.php';

 use Ababilithub\{
   FlexMultilingualLearningKit\Package\Package,
 };

 use const Ababilithub\FlexMultilingualLearningKit\{
    PLUGIN_NAME,
    PLUGIN_DIR,
    PLUGIN_URL,
    PLUGIN_FILE,
    PLUGIN_VERSION
};
 
$package = Package::instance();
     
register_activation_hook(__FILE__, [$package, 'activate']);
register_deactivation_hook(__FILE__, [$package, 'deactivate']);
