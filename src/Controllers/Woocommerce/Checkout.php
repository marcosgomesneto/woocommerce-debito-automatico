<?php
/**
 * WooCommerce Controller
 */

 namespace MGN\Controllers\Woocommerce;

 use MGN\Controllers\Woocommerce\DebitoAutomaticoGateway;


 class Checkout{

    public function __construct(){
        if ( class_exists( 'WC_Payment_Gateway' ) ) {
            $this->upgrade();
            add_filter( 'woocommerce_payment_gateways', array( $this, 'add_gateway' ) );
        }
    }

    public function add_gateway( $methods ) {
        $methods[] = 'WC_Debito_Automatico_Gateway';
        return $methods;
    }

    private function upgrade() {
        if ( is_admin() ) {

                $debito_automatico = array(
                    'enabled'        => 'yes',
                    'title'          => 'Débito Automático'
                );

                update_option( 'woocommerce_debito-automatico_settings', $debito_automatico );


        }
    }

 }