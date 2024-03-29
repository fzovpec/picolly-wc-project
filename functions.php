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
function force_non_logged_user_wc_session()
{
    if (is_user_logged_in() || is_admin())
        return;
    if (isset(WC()->session)) {
        if (!WC()->session->has_session()) {
            WC()->session->set_customer_session_cookie(true);
       }
    }
}
add_action('woocommerce_init', 'force_non_logged_user_wc_session');
?>
