<?php
    $orderby = 'date';
    $order = 'asc';
    $hide_empty = false;
    $taxonomy = 'product_cat';
    $parent_cat_ids = get_terms( $taxonomy, array(
        'parent'     => 0,
        'hide_empty' => false,
        'fields'     => 'ids'
    ) );

    // Get only "child" WP_Term Product categories
    $product_categories = get_terms( $taxonomy, array(
        'exclude'     => $parent_cat_ids,
        'orderby'    => 'name',
        'order'      => 'asc',
        'hide_empty' => false,
    ) );
    global $wp_query;
?>
<section class="section-index content">
    <div class="section-index__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title">Категории</h2>
        </div>
        <div class="section-index__arrows">
            <img class="section-index__arrow swiper-button-prev" id="swiper-button-prev_5" src="<?php echo get_template_directory_uri() ?>/img/arrow_left.png">
            <img class="section-index__arrow swiper-button-next" id="swiper-button-next_5" src="<?php echo get_template_directory_uri() ?>/img/arrow_right.png">
        </div>
    </div>
    <div class="section-index__underline"></div>
    <div class="section-index__images row">
        <div class="section-index__slider slider-index col-md-12 swiper-container" id="swiper-container_5">
            <div class="flex-row swiper-wrapper">
                <?php
                if( !empty($product_categories) ):
                    foreach ($product_categories as $key => $category){
                        $product_id = $category->term_id;
                        $cat_thumb_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
                        $term_link = get_term_link( $category, 'product_cat' );
                ?>
                    <div class="slider-indx__slide  swiper-slide">
                        <a href = "<?php echo esc_url(get_term_link( $category )) ?>">
                            <img src="<?php echo $shop_catalog_img[0]?>" class="slider-indx__main-img">
                            <div class="slider-indx__title"><?php echo $category->name; ?></div>
                            <div class="slider-indx__underline"></div>
                        </a>
                    </div>
                    <?php }
                endif;
                ?>
            </div>
        </div>
    </div>
    </div>
</section>
