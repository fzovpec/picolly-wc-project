<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */
global $product;
global $cart;
$get_checkout_url = wc_get_checkout_url();
defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_cart' );
do_action( 'woocommerce_before_cart_table' ); ?>

<section class="section-index content">
	<div class="section-index__head section-factories__head">
		<div class="section-index__title-block">
			<h2 class="section-index__title">КОРЗИНА</h2>
		</div>
	</div>
	<div class="section-index__underline section-factoriesт__underline"></div>
	<div class="commodities-basket">
		<div class="row">
			<?php do_action( 'woocommerce_before_cart_table' ); ?>
			<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
			?>
			<div class="col-lg-6 col-md-12" style="width:100vw">
				<div class="commodities-basket__commodity">
					<div class="commodities-basket__upper">
						<div class="commodities-basket__img-block">
							<img src="<?php echo wp_get_attachment_image_src($_product->get_image_id())[0] ?>" alt="" class="commodities-basket__img">
						</div>
						<div class="commodities-basket__text">
							<span class="commodities-basket__name">
								<?php
								$formated_value = explode('-', $_product->get_name());
								if ( ! $product_permalink ) {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $formated_value[0], $cart_item, $cart_item_key ) . '&nbsp;' );
								} else {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
								}?>
							</span>
							<div class="commodities-basket__characteristics">
								<style>
									.product__attr-bold{
										font-size: 16px;
									}
									.product__attr-normal{
										font-size: 16px;
									}
								</style>
								<?php wc_display_product_attributes( $_product ); ?>
								<div class="commodities-basket__color-block">
									<div class="commodities-basket__bold-char" style="padding-top: 2px;?>">ЦВЕТ: </div>
									<div class="commodities-basket__color" style="background: <?php echo $formated_value[1];?>"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="commodities-basket__additional">
						<div class="commodities-basket__quantity">
							<div class="commodities-basket__quantity-text">
								<?php

			                    echo apply_filters( 'woocommerce_loop_add_to_cart_link',
			                        sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">+</a>',
			                            esc_url( $_product->add_to_cart_url()),
			                            esc_attr( $_product->id ),
			                            esc_attr( $_product->get_sku() ),
			                            $_product->is_purchasable() ? 'add_to_cart_button' : '',
			                            esc_attr( $_product->product_type ),
			                            esc_html( $_product->add_to_cart_text() )
			                        ),
			                        $_product );
								?>

								<?php echo $cart_item['quantity']; ?>
									<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMCAxMGgyNHY0aC0yNHoiLz48L3N2Zz4=">
								<?php
									if(isset($_POST['decrease'])){
										WC()->cart->set_quantity($_product->id, $cart_item['quantity'] - 1);
									}
								?>
							</div>
						</div>
						<div class="commodities-basket__price">
							<span class="commodities-basket__price-text">ЦЕНА: <?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?></span>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
		</div>
	</div>
	<div class="sum-btn">СУММА: <?php wc_cart_totals_subtotal_html(); ?></div>
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		 do_action( 'woocommerce_cart_collaterals' );
	?>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<?php do_action( 'woocommerce_after_cart' ); ?>
