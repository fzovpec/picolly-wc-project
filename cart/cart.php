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

defined( 'ABSPATH' ) || exit;
get_header();
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
								if ( ! $product_permalink ) {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
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
									<div class="commodities-basket__bold-char" style="padding-top: 2px">ЦВЕТ: </div>
									<div class="commodities-basket__color"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="commodities-basket__additional">
						<div class="commodities-basket__quantity">
							<div class="commodities-basket__quantity-text">
								<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjQgMTBoLTEwdi0xMGgtNHYxMGgtMTB2NGgxMHYxMGg0di0xMGgxMHoiLz48L3N2Zz4=">
								<?php echo $cart_item['quantity']; ?>
								<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMCAxMGgyNHY0aC0yNHoiLz48L3N2Zz4=">
							</div>
						</div>
						<div class="commodities-basket__price">
							<span class="commodities-basket__price-text">ЦЕНА: <?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?> Р.</span>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
		</div>
	</div>
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		 do_action( 'woocommerce_cart_collaterals' );
	?>
	<form type = 'POST'>
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
					<input type="text" name="name">
				</div>
				<div class="order__title">ТЕЛЕФОН</div>
				<div class="order__input">
					<input type="text" name="phone">
				</div>
				<div class="order__title">EMAIL</div>
				<div class="order__input">
					<input type="email" name="email">
				</div>
				<div class="order__title">АДРЕС ДОСТАВКИ</div>
				<div class="order__input">
					<input type="text" name="adress">
				</div>
				<div class="order__title">КОММЕНТАРИЙ</div>
				<div class="order__input" style="margin-bottom: 0px">
					<textarea style="height: 115px" name="comment"></textarea>
				</div>
			</div>
			<div class="order__info col-lg-5 col-md-12 order__right">
				<div class="section-index__head section-factories__head">
					<div class="section-index__title-block">
						<h2 class="section-index__title">ОПЛАТА</h2>
					</div>
				</div>
				<div class="section-index__underline section-factories__underline section-basket__underline"></div>

				<form class="payment_type" action="index.html" method="post">
					<div class="row">
						<label class="" for="#ayment_after_delivery">Оплата наличными курьеру</label>
						<input checked type="radio" name="payment_type" value="cash" id="payment_after_delivery">
					</div>
					<br>
					<div class="row">


						<label class="" for="#payment_online">Оплата онлайн</label>

						<input type="radio" name="payment_type" value="online" id="payment_online">

					</div>
					<button type="submit" name="button"  class="btn-add-to-cart" id="continue_basket">Продолжить</button>
				</form>
				<div id="make_payment" class="">
					<div class="order__title">НОМЕР КАРТЫ</div>
					<div class="order__input">
						<input type="text" name="card_number">
						<img src="img/Visa-MasterCard-Maestro-Mir.png" alt="">
					</div>
					<div class="order__title">ИМЯ ДЕРЖАТЕЛЯ КАРТЫ</div>
					<div class="order__input">
						<input type="text" name="">
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="order__title">СРОК ДЕЙСТВИЯ</div>
							<div class="order__input">
								<input type="text" name="validity">
							</div>
						</div>
						<div class="col-md-4">
							<div class="order__title">CVV 2</div>
							<div class="order__input">
								<input type="number" name="cvv">
							</div>
						</div>
						<div class="order__text">
							В случае если Ваш банк поддерживает технологию безопасного проведения нтернет-платежей Verified By Visa или MasterCard Secure Code, для роведения платежа также может потребоваться ввод специального пароля. Способы и
							возможность получения паролей для совершения интернет-платежей Вы можете уточнить в банке, выпустившем карту.
							Настоящий сайт поддерживает 256-битное шифрование. Конфиденциальность сообщаемой персональной информации обеспечивается ПАО "Сбербанк России". Введенная информация не будет предоставлена третьим лицам за исключением
							случаев,
							предусмотренных законодательством РФ. Проведение платежей по банковским картам осуществляется в строгом соответствии с
						</div>
						<button type="submit" name="button"  class="btn-add-to-cart">Оплатить</button>
					</div>
				</div>
			</div>
	</form>
</section>


<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<?php do_action( 'woocommerce_after_cart' ); ?>
