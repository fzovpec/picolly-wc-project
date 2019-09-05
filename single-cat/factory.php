<style>
    .woocommerce-notices-wrapper{display: none;}.woocommerce-result-count{display: none;}.woocommerce-ordering{display: none;}
</style>
<?php
    $category = get_queried_object();
    $cat_thumb_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
    $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
?>
<section class="section-index content">
    <div class="section-index__head section-factories__head">
        <div class="section-index__title-block section-index__title-block-single">
            <h2 class="section-index__title"><?php echo $category->name;?></h2>
        </div>
    </div>
    <div class="section-index__underline"></div>
    <div class="product row">
        <div class="product__image col-md-12 col-lg-5 col-xs-12">
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo $shop_catalog_img[0]?>" alt="" class="product__img"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-md-12 col-lg-6 col-xs-12">
            <div class="product__name"><?php echo $category->name;?></div>
            <div class="product__desc">
                <?php echo $category->description; ?>
            </div>
            <a href="<?php echo esc_url(get_term_link( $category )).'&all=true'?>">Посмотреть каталог</a>
        </div>
    </div>
</section>
