<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="search__block">
	<div class="search__line">
		<img src="<?php echo get_template_directory_uri() ?>/img/search_line.png" class="search__line">
	</div>
	<div class="search__arrow">
		<img src="<?php echo get_template_directory_uri() ?>/img/search_arrow.png" alt="">
	</div>
	<form class="search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__( 'Поиск;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
		<select>
			<option>Все категории</option>
			<option>Тест</option>
			<option>Тест</option>
			<option>Тест</option>
		</select>
		<button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>"><?php echo esc_html_x( 'Search', 'submit button', 'woocommerce' ); ?>>
			<div class="search__box">
				<img src="<?php echo get_template_directory_uri() ?>/img/search_icon.png">
			</div>
		</button>
		<input type="hidden" name="post_type" value="product" />
	</form>
</div>
