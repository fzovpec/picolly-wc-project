<?php
$args = array(
    'post_type'      => 'product',
    'product_cat'    => $_GET['product_cat']
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    $prdt = wc_get_product( get_the_ID() ) ;
    $product_attribute = $prdt->get_attribute('age');
    if(!empty($product_attribute)){
        array_push($ages, $product_attribute);
    }
endwhile;
$ages = array_unique($ages);
