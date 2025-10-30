<?php
/**
 * Plugin Name: UD Block: Wellen-Grafik
 * Description: Block zum Darstellen einer dynamischen Wellen-Grafik.
 * Version:         1.2.2
 * Author:          ulrich.digital gmbh
 * Author URI:      https://ulrich.digital/
 * License:         GPL v2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 */

defined('ABSPATH') || exit;

define('UD_WELLEN_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('UD_WELLEN_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once UD_WELLEN_PLUGIN_DIR . 'includes/helpers.php';
require_once UD_WELLEN_PLUGIN_DIR . 'includes/block-register.php';
