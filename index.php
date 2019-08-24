<?php get_header(); ?>
<?php
global $post;
$args = array(
    'post_type' => 'object',
    'publish' => true,
    'paged' => get_query_var('paged'),
);
query_posts($args);
while( have_posts() ) : the_post();
    $category = get_term_by( 'slug', the_title('','', false), 'product_cat' );
    echo $category->name;
endwhile;
?>
