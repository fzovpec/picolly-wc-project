<?php get_header() ?>
<?php
    $category = $_GET['product_cat'];
    if( !empty($category) ){
        if( $category->category_parent == 0) {
            require('single-cat/factory.php');
        }
    }
?>
<?php get_footer() ?>
