<?php
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 10,
    'product_cat'    => $_GET['product_cat']
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    $product_attribute = $product->get_attribute('type');
    array_push($types, $product_attribute);
endwhile;
array_unique($types);