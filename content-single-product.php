<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="section-index content">
	<div class="section-index__head section-factories__head">
		<div class="section-index__title-block section-index__title-block-single">
			<h2 class="section-index__title" style="text-transform: uppercase;"><?php the_title() ?></h2>
		</div>
		<div class="section-index__arrows section-index__arrows-single">
			<img class="section-index__arrow swiper-button-prev" id="swiper-button-prev_gallery" src="<?php echo get_template_directory_uri() ?>/img/arrow_left.png">
			<img class="section-index__arrow swiper-button-next" id="swiper-button-next_gallery" src="<?php echo get_template_directory_uri() ?>/img/arrow_right.png">
		</div>
	</div>
	<div class="section-index__underline"></div>
	<div class="product row">
		<div class="product__image col-md-12 col-lg-5 col-xs-12">
			<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>
		<div class="col-lg-1"></div>
		<div class="col-md-12 col-lg-6 col-xs-12">
			<style>
				.woocommerce{
					display: none;
				}
			</style>
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
	</div>

<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
?>
<?php do_action( 'woocommerce_after_single_product' ); ?>
</section>
