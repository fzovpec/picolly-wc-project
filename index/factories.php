<section class="section-index content">
    <div class="section-index__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title">ФАБРИКИ</h2>
        </div>
    </div>
    <div class="section-index__underline"></div>
    <div class="categorical">
        <div class="row">
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
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="row">
                    <img src="<?php echo $shop_catalog_img[0]?>" alt="">
                    <span style="width: 100%"><?php echo $category->name; ?></span>
                    <p><?php echo $category->description; ?></p>
                </div>
            </div>
        <?php }
    endif; ?>
        </div>
        <span><a href="">Посмотреть все</a></span>
    </div>
</section>
