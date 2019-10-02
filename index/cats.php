<?php 
    $args = array(
        'post_type' => 'object',
        'publish' => true,
        'paged' => get_query_var('paged'),
    );
    query_posts($args);
    $indx_page = 1;
    while( have_posts() ) : the_post();
        $category = get_term_by( 'slug', the_title('','', false), 'product_cat' );
        $cat_thumb_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
        $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
        if($indx_page == 0){
                //section with big image on the left
            require('section-left.php');
            $indx_page = 1;
        }
        else{
            //with right
            require('section-right.php');
            $indx_page = 0;
        }
	endwhile;
?>