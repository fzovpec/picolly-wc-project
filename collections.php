<?php
/*
Template Name: Коллекции
*/
?>
<?php
$cat_post = $_POST['factory'];
$cat_str = '';
foreach ($cat_post as $cat_post) {
    $cat_str .= $cat_post . '_';
}
$cat_get = $_GET['id_cat'];
$cat_pp = explode('_', $cat_get);
if(isset($_GET['fil'])){
    header('Location: '. get_page_link( $page->ID ).'&id_cat='.$cat_str);
}
get_header();
?>
<?php $page = get_queried_object();
?>
<section class="section-index content">
    <div class="section-index__head section-factories__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title">КОЛЛЕКЦИИ</h2>
        </div>
    </div>
    <div class="section-index__underline section-factoriesт__underline"></div>
    <div class="section-index__images category__row row">
        <div class="col-lg-3 col-md-12 row select-brown__container">
            <div class="select-brown__container">
                <div class="select-brown open-filters">
                    <div class="select-brown__head">ФИЛЬТРЫ</div>
                </div>

                <form action="<?php echo get_page_link( $page->ID ).'&fil=true';?>" method="post">
                    <div class="select-brown__container">
                        <div class="select-brown">
                            <div class="select-brown__head">ФАБРИКА</div>
                            <?php
                            $taxonomy = 'product_cat';
                            $parent_cat = get_terms( $taxonomy, array(
                                'parent'     => 0,
                                'hide_empty' => false,
                            ) );
                            if( !empty($parent_cat) ):
                                foreach ($parent_cat as $key => $category){
                            ?>
                            <input type="checkbox" name="factory[]" value="<?php echo $category->term_id?>"> <?php echo $category->name;?></input><br>
                            <?php }endif;?>

                        </div>

                    </div>

                    <input type="submit" style="background:#ce2a6e; margin-top: 10px;margin-bottom: 50px;" class="sum-btn" value="Применить">

                </form>
            </div>
        </div>
        <div class="row col-lg-9 col-md-12">
            <?php
            $parent_cat_ids = get_terms( $taxonomy, array(
                'parent'     => 0,
                'hide_empty' => false,
            ) );
            if( !empty($parent_cat_ids) ):
                foreach ($parent_cat_ids as $key => $parent){
                    if(isset($_GET['id_cat']) && !empty($_GET['id_cat'])){
                        if(!in_array($parent->term_id, $cat_pp)){
                            continue;
                        }
                    }
                    $taxonomy = 'product_cat';
                    $product_categories = get_terms( $taxonomy, array(
                        'parent'     => $parent->term_id,
                        'hide_empty' => false,
                    ) );
                    if( !empty($product_categories) ):
                        foreach ($product_categories as $key => $category){
                            $product_id = $category->term_id;
                            $cat_thumb_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                            $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
                            $term_link = get_term_link( $category, 'product_cat' );?>
            <div class="section-index__main-img col-md-6 main-img section-factories__block">
                <div class="main-img__upperblock">
                    <span class="main-img__uppertext"><?php echo $category->name; ?></span>
                    <a href = "<?php echo esc_url(get_term_link( $category )) ?>"><div class="big-btn">КАТАЛОГ</div></a>
                </div>
                <img src="<?php echo $shop_catalog_img[0]?>" class="main-img__big">
            </div>
            <?php }
            endif;
        }
    endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
