<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
global $wp;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.?>
<div class="product__price">ЦЕНА: <?php echo $product->get_price_html(); ?></div>
<?php if ( $product->is_in_stock() ) : ?>
<div class="slider-indx__add-to-cart">
<?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
   sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s"><button name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn-add-to-cart" style="width: 230px;float: left; margin-top: 25px" type="submit">ДОБАВИТЬ В КОРЗИНУ</button></a>',
	   esc_url( $product->add_to_cart_url().'&url='.get_permalink( $product->get_id() ) ),
	   esc_attr( $product->id ),
	   esc_attr( $product->get_sku() ),
	   $product->is_purchasable() ? 'add_to_cart_button' : '',
	   esc_attr( $product->product_type ),
	   esc_html( $product->add_to_cart_text() )
   ),
  $product );?>
 </div>
<?php endif; ?>
