<?php
/**
 * Hooks Class
 */
namespace MGN\Hooks;

use MGN\Hooks\Wordpress\PluginsLoaded;

class Hook{
    public function __construct(){
        add_action( 'plugins_loaded', [new PluginsLoaded(), 'init'] );
    }
}
