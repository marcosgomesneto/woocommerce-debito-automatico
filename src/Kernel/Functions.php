<?php
/**
 * MGN Functions
 */

function mgn_add_action( string $tag, $function_to_add, int $priority = 10, int $acceptd_args = 1 ){
    
    add_action('plugins_loaded', $function_to_add, $priority, $acceptd_args);
}
