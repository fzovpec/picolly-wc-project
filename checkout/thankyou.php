<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="section-index">
	<?php if ( $order ) :
		do_action( 'woocommerce_before_thankyou', $order->get_id() ); ?>
	<div class="empty_basket">
		<h1 class="empty_basket__title">СПАСИБО ЗА ЗАКАЗ!</h1><br>

		<h4 class="empty_basket__title">Номер Вашего заказа: <span style="text-decoration: underline">№<?php if ( $order ) :echo $order->get_order_number(); endif; ?></span></h4>
		<a class="check_status" href="deliver_info.html"><h4 class="empty_basket__title">Узнать статус заказа</h4></a>

		<div class="empty_basket__btn">
			<a href="/"><button type="button" name="button" style="width: 220px" class="btn-add-to-cart">Продолжить покупки</button></a>
		</div>
	</div>
<?php endif;?>

</section>
