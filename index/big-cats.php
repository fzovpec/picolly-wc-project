<?php
global $post;
?>
<section style="text-shadow: 0 5px 9px rgba(0,0,0,.5);" class="container">
    <div class="row" style="margin:auto; max-height: 480px; overflow: hidden;">
        <?php
        $args = array(
            'post_type' => 'object',
            'publish' => true,
            'paged' => get_query_var('paged'),
        );
        query_posts($args);
        while( have_posts() ) : the_post();
            $category = get_term_by( 'slug', the_title('','', false), 'product_cat' );
            $cat_thumb_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
            $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
        ?>
            <div style="margin-bottom: 3%" class="section-index__main-img col-md-6 main-img">
                <div class="main-img__upperblock">
                    <span class="main-img__uppertext" style="text-transform: uppercase"><?php echo $category->name; ?></span>
                    <div class="big-btn">КАТАЛОГ</div>
                </div>
                <img src="<?php echo $shop_catalog_img[0]?>" class="main-img__big">
            </div>
        <?php
        endwhile;
        ?>
    </div>
</section>
