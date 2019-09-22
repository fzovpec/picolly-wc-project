<?php
/*
Template Name: Фабрики
*/
?>
<?php get_header() ?>
<section class="section-index content">
    <div class="section-index__head section-factories__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title">ФАБРИКИ</h2>
        </div>
    </div>
    <div class="section-index__underline section-factoriesт__underline"></div>
    <div class="row col-lg-12 col-md-12">
<?php
$taxonomy = 'product_cat';
$product_categories = get_terms( $taxonomy, array(
    'parent'     => 0,
    'hide_empty' => false,
) );
if( !empty($product_categories) ):
    foreach ($product_categories as $key => $category){
        $product_id = $category->term_id;
        $cat_thumb_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
        $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
        $term_link = get_term_link( $category, 'product_cat' );
?>
    <div class="section-index__main-img col-md-4 main-img section-factories__block">
        <div class="main-img__upperblock">
            <span class="main-img__uppertext"><?php echo $category->name; ?></span>
            <a href = "<?php echo esc_url(get_term_link( $category )) ?>"><div class="big-btn">КАТАЛОГ</div></a>
        </div>
        <img src="<?php echo $shop_catalog_img[0]?>" class="main-img__big">
    </div>
<?php }endif;?>
</div>
</section>
<?php get_footer(); ?>
