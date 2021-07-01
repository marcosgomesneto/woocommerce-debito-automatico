<?php
/**
 * MGN Class
 */
use MGN\Hooks\Hook;

class MGN{
    public static function init(){
        include 'Kernel/Functions.php';
        new Hook();
    }
}