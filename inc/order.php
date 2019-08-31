<?php
function add_to_cart_redirect(){
       global $woocommerce, $product, $post;
       $address = array(
           'first_name' => $_POST['name'],
           'email'      => $_POST['email'],
           'phone'      => $_POST['phone'],
           'address_1'  => $_POST['adress'],
           'comment'    => $_POST['comment']
       );

       // Create the order object.
       $order = wc_create_order();

       foreach( WC()->cart->get_cart() as $cart_item ){
           $product_id = $cart_item['product_id'];
           $order->add_product(get_product(''.$product_id.''));
       }
       // Add a product, make sure that this product exists!
       $order->set_address( $address, 'billing' );
       $order->calculate_totals();
       wc_empty_cart();

}
add_filter ('woocommerce_add_to_cart_redirect', 'add_to_cart_redirect');
