<?php get_header() ?>
<?php
    $category = $_GET['is_parent'];
    if( $category == 0 ) {
        require('single-cat/factory.php');
    }
    else {
        require('single-cat/category.php');
    }
?>
<?php get_footer() ?>
