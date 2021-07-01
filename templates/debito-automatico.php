<?php
/**
 * Credit Card - Checkout form.
 *
 * @author  Pagar.me
 * @package WooCommerce_Pagarme/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<fieldset id="mgn-debito-automatico">
	<p class="form-row">
		<label for="mgn-banco">Banco<span class="required">*</span></label>
		<select class="input-text" name="banco" style="width: 100%;font-size: 1.5em;">
			<option value="104">Caixa Econômica</option>
			<option value="237">Bradesco</option>
		</select>
	</p>
	<p class="form-row">
		<label for="mgn-tipo">Tipo de conta<span class="required">*</span></label>
		<select id="mgn-tipo" name="tipo_conta" class="input-text" style="width: 100%;font-size: 1.5em;">
			<option value="001">Conta Corrente</option>
			<option value="012">Conta Poupança</option>
			<option value="023">Conta Fácil</option>
			<option value="003">Conta Empresarial</option>
		</select>		
	</p>
	<div class="clear"></div>
	<p class="form-row form-row-first">
		<label for="mgn-agencia">Agencia <span class="required">*</span></label>
		<input id="mgn-agencia" name="agencia" class="input-text" type="text" autocomplete="off" placeholder="0000" style="font-size: 1.5em; padding: 8px;" />
	</p>
	<p class="form-row form-row-last">
		<label for="mgn-conta">Conta <span class="required">*</span></label>
		<input id="mgn-conta" name="conta" class="input-text" type="text" autocomplete="off" placeholder="Conta com dígito" style="font-size: 1.5em; padding: 8px;" />
	</p>
	<div class="clear"></div>
	<?php if ( apply_filters( 'wc_pagarme_allow_credit_card_installments', 1 < $max_installment ) ) : ?>
		<p class="form-row form-row-wide">
			<label for="pagarme-card-installments"><?php esc_html_e( 'Installments', 'woocommerce-pagarme' ); ?> <span class="required">*</span></label>
			<select name="pagarme_installments" id="pagarme-installments" style="font-size: 1.5em; padding: 8px; width: 100%;">
				<option value="0"><?php printf( esc_html__( 'Please, select the number of installments', 'woocommerce-pagarme' ) ); ?></option>
				<?php
				foreach ( $installments as $number => $installment ) :
					if ( 1 !== $number && $smallest_installment > $installment['installment_amount'] ) {
						break;
					}

					$interest           = ( ( $cart_total * 100 ) < $installment['amount'] ) ? sprintf( __( '(total of %s)', 'woocommerce-pagarme' ), strip_tags( wc_price( $installment['amount'] / 100 ) ) ) : __( '(interest-free)', 'woocommerce-pagarme' );
					$installment_amount = strip_tags( wc_price( $installment['installment_amount'] / 100 ) );
					?>
				<option value="<?php echo absint( $installment['installment'] ); ?>"><?php printf( esc_html__( '%1$dx of %2$s %3$s', 'woocommerce-pagarme' ), absint( $installment['installment'] ), esc_html( $installment_amount ), esc_html( $interest ) ); ?></option>
				<?php endforeach; ?>
			</select>
		</p>
	<?php endif; ?>
</fieldset>