<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
<?php echo do_shortcode('[woocommerce_cart]'); ?>
<style>.woocommerce-checkout-review-order{display: none;}</style>
<form style="width:100%" name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
<section class = "section-index content">
<div class="order row">
		<div class="order__info col-lg-7 col-md-12">
			<div class="section-index__head section-factories__head">
				<div class="section-index__title-block">
					<h2 class="section-index__title">ОФОРМЛЕНИЕ ЗАКАЗА</h2>
				</div>
			</div>
			<div class="section-index__underline section-factories__underline section-basket__underline"></div>
			<div class="order__title">ФИО</div>
			<div class="order__input">
				<input type="text" name="billing_first_name">
			</div>
			<div class="order__title">ТЕЛЕФОН</div>
			<div class="order__input">
				<input type="tel" name="billing_phone">
			</div>
			<div class="order__title">EMAIL</div>
			<div class="order__input">
				<input type="email" name="billing_email">
			</div>
			<div class="order__title">АДРЕС ДОСТАВКИ</div>
			<div class="order__input">
				<input type="text" name="billing_address_1">
			</div>
			<div class="order__title">КОММЕНТАРИЙ</div>
			<div class="order__input" style="margin-bottom: 0px">
				<textarea style="height: 115px" name="order_comments"></textarea>
			</div>
		</div>
		<div class="order__info col-lg-4 col-md-12 order__right">
			<div class="section-index__head section-factories__head">
				<div class="section-index__title-block">
					<h2 class="section-index__title">ОПЛАТА</h2>
				</div>
			</div>
			<div class="section-index__underline section-factories__underline section-basket__underline"></div>
			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>
			<button type="submit" name="woocommerce_checkout_place_order"  class="btn-add-to-cart">Оплатить</button>
			<?php wp_nonce_field( 'woocommerce-process_checkout' ); ?>
		</div>
</div>
</section>
</form>
