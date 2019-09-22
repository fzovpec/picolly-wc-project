<?php
require('inc/categories-index.php');
require('inc/first-index.php');
require('inc/factories-index.php');
require('inc/order.php');
function exec_php($matches){
    eval('ob_start();'.$matches[1].'$inline_execute_output = ob_get_contents();ob_end_clean();');
    return $inline_execute_output;
}
function inline_php($content){
    $content = preg_replace_callback('/\[exec\]((.|\n)*?)\[\/exec\]/', 'exec_php', $content);
    $content = preg_replace('/\[exec off\]((.|\n)*?)\[\/exec\]/', '$1', $content);
    return $content;
}
add_filter('the_content', 'inline_php', 0);
function params_for_custom($parent){
    $taxonomy = 'product_cat';
    return $parent_cat_ids = get_terms( $taxonomy, array(
        'parent'     => $parent,
        'hide_empty' => false,
    ) );
}
function echo_title_factory(){
    echo '
    <div class="section-index__main-img col-md-6 main-img section-factories__block">
        <div class="main-img__upperblock">
            <span class="main-img__uppertext">'.$category->name.'</span>
            <a href = "'.esc_url(get_term_link( $category )).'"><div class="big-btn">КАТАЛОГ</div></a>
        </div>
    <img src="'.$shop_catalog_img[0].'" class="main-img__big">
    </div>';
}
?>
