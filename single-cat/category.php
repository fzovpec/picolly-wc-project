<?php
    global $product;
    $ages = array();
    $types = array();
    require('get_ages.php');
    require('get_types.php');
?>
<section class="section-index content">
    <div class="section-index__head section-factories__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title"><?php woocommerce_page_title(); ?></h2>
        </div>

    </div>
    <?php
        $category = get_queried_object();
        $product_categories = get_terms( $taxonomy, array(
            'parent'     => $category->term_id,
            'hide_empty' => false,
        ) );
    ?>
    <div class="section-index__underline section-factoriesт__underline"></div>
    <div class="section-index__images category__row row">
        <div class="col-lg-3 col-md-12 row select-brown__container">
            <div class="select-brown__container">
                <div class="select-brown open-filters">
                    <div class="select-brown__head">ФИЛЬТРЫ</div>
                </div>
            </div>
            <div class="select-brown__container">
                <div class="select-brown">
                    <div class="select-brown__head">КАТЕГОРИЯ</div>
                    <?php if( !empty($product_categories) ):
                        foreach ($product_categories as $key => $cat){?>
                            <a href = "<?php echo esc_url(get_term_link( $cat )) ?>">
                                <div class="select-brown__category"><?php echo $cat->name; ?></div>
                            </a>
                    <?php }
                        endif;?>
                </div>
            </div>
            <div class="select-brown__container">
                <div class="select-brown">
                    <div class="select-brown__head">Тип товара</div>
                    <?php foreach ($types as $key => $type){ ?>
                        <a href="<?php echo esc_url(get_term_link( get_queried_object()->term_id )).'&type='. $type;?>"><div class="select-brown__category"><?php echo $type; ?></div></a>
                    <?php } ?>
                </div>
            </div>
            <div class="select-brown__container">
                <div class="select-brown">
                    <div class="select-brown__head">Возраст</div>
                    <?php foreach ($ages as $key => $age){ ?>
                    <a href="<?php echo esc_url(get_term_link( get_queried_object()->term_id )).'&age='. $age;?>"><div class="select-brown__category"><?php echo $age; ?></div></a>
                    <?php } ?>
                </div>
            </div>
        </div>
            <?php
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 10,
                    'product_cat'    => $_GET['product_cat']
                );
                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();
                if(isset($_GET['type'])){
                    if($product->get_attribute('type') != $_GET['type']){
                        continue;
                    }
                }
                if(isset($_GET['age'])){
                    if($product->get_attribute('age') != $_GET['age']){
                        continue;
                    }
                }
            ?>
            <div class="row col-lg-9 col-md-12">
                <div class="slider-indx__slide col-lg-4 col-md-6">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="slider-indx__main-img">
                    <div class="slider-indx__title"><?php the_title(); ?></div>
                    <div class="slider-indx__underline"></div>
                    <div class="slider-indx__price-list">
                        <div class="slider-indx__info">
                            <span class="slider-indx__price"><?php echo get_post_meta(get_the_ID(), '_regular_price', true) . ' Р.'; ?></span>
                            <div class="slider-indx__rate">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                            </div>
                        </div>
                        <div class="slider-indx__add-to-cart">
                            <div class="btn-add-to-cart">В КОРЗИНУ</div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
    ?>
    </div>
</section>
