<?php
/**
 * Plugin Name: WooCommerce Débito Automático
 * Plugin URI: https://github.com/marcosgomesneto/woocommerce-debito-automatico
 * Description: Plugin debito automático woocommerce
 * Version: 1.0.0
 * Author: MGNTech
 * Author URI: https://mgntech.com.br
 * Text Domain: woocommerce-debito-automatico
 * Domain Path: /i18n/languages/
 * Requires at least: 5.3
 * Requires PHP: 7.0
 *
 * @package WooDebAuto
 */

defined( 'ABSPATH' ) || exit;

define( 'WOODEBAUTO_VERSION', '2.1.3' );
define( 'WOODEBAUTO_PATH', plugin_dir_path( __FILE__ ) );
define( 'WOODEBAUTO_URL', plugin_dir_url( __FILE__ ) );
define( 'WOODEBAUTO_TEMPLATES_PATH', plugin_dir_path( __FILE__ ) . 'templates/' );

if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
    require __DIR__ . '/vendor/autoload.php';
}else{
    return;
}
include_once WOODEBAUTO_PATH . 'src/MGN.php';

MGN::init();