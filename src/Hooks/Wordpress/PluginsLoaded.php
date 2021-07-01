<?php
/**
 * Wordpress Plugins Loaded Hook
 */
namespace MGN\Hooks\Wordpress;

use MGN\Controllers\Woocommerce\Checkout;

class PluginsLoaded{
    public function init(){
        include_once WOODEBAUTO_PATH . 'classes/class-wc-debito-automatico-gateway.php';
        new Checkout();
    }
}