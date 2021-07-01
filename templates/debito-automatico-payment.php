<?php
/**
 * Bank Slip - Payment instructions.
 *
 * @author  Pagar.me
 * @package WooCommerce_Pagarme/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php if( $banco == '104' ): ?>
<div class="woocommerce-message">
	<span>Você selecionou o banco <strong>Caixa Econômica</strong> para débito automático. É necessário entrar no <strong>Internet Banking</strong> ou ir a sua agência para autorizar o cadastro do débito automático. Veja abaixo como autorizar pelo aplicativo.</span>
</div>
<div class="row">
    <div class="col-sm-6 col-md">
        <img src="<?php echo WOODEBAUTO_URL . 'resources/img/caixa1.jpg'; ?>">
        <div class="text-center pt-2">Entre no aplicativo da caixa com seu login</div>
    </div>
    <div class="col-sm-6 col-md">
        <img src="<?php echo WOODEBAUTO_URL . 'resources/img/caixa2.jpg'; ?>">
        <div class="text-center pt-2">Toque no menu <strong>Pagamentos</strong> como mostra a imagem</div>
    </div>
    <div class="col-sm-6 col-md">
        <img src="<?php echo WOODEBAUTO_URL . 'resources/img/caixa3.jpg'; ?>">
        <div class="text-center pt-2">Toque em <strong>Autorizar e Rejeitar Cadastro</strong> no menu</div>
    </div>
    <div class="col-sm-6 col-md">
        <img src="<?php echo WOODEBAUTO_URL . 'resources/img/caixa4.jpg'; ?>">
        <div class="text-center pt-2">Selecione a empresa <strong>Intermed</strong> e toque em <strong>Autorizar</strong></div>
    </div>
</div>
<?php endif; ?>