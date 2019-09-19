<?php
$args = array(
    'post_type'      => 'product',
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    $prdt = wc_get_product( get_the_ID() ) ;
    $product_attribute = $prdt->get_attribute('type');
    if(!empty($product_attribute)){
        array_push($types, $product_attribute);
    }
endwhile;
$types = array_unique($types);
