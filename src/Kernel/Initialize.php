<?php
/**
 * Kernel Class
 */
namespace MGN\Kernel\Initialize;
use MGN\Hooks;

class Initialize{
    public function __construct(){
        $hooks = new Hooks();
    }
}