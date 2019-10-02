<section class="section-index content">
    <div class="section-index__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title"><?php echo $category->name; ?></h2>
        </div>
        <div class="section-index__arrows">
            <img class="section-index__arrow swiper-button-prev" id="swiper-button-prev_1" src="<?php echo get_template_directory_uri() ?>/img/arrow_left.png">
            <img class="section-index__arrow swiper-button-next" id="swiper-button-next_1" src="<?php echo get_template_directory_uri() ?>/img/arrow_right.png">
        </div>
    </div>
    <div class="section-index__underline"></div>
    <div class="section-index__images row">
        <div class="section-index__main-img col-md-6 main-img">
            <div class="main-img__upperblock">
                <span class="main-img__uppertext"><?php echo $category->name; ?></span>
                <div class="big-btn">КАТАЛОГ</div>
            </div>
            <img src="<?php echo $shop_catalog_img[0]?>" class="main-img__big">
        </div>

        <div class="section-index__slider slider-indx col-md-6 swiper-container" id="swiper-container_1">
            <div class="flex-row swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'product',
                        'orderby' => 'rand',
                        'product_cat' => $category->term_ID
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ):
                        while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="slider-indx__slide col-md-12 col-lg-6 swiper-slide">
                    <a href="<?php echo the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="slider-indx__main-img"></a>
                    <div class="slider-indx__title"><?php echo the_title(); ?></div>
                    <div class="slider-indx__underline"></div>
                    <div class="slider-indx__price-list">
                        <div class="slider-indx__info">
                            <span class="slider-indx__price"><?php echo $product->get_price_html(); ?></span>
                            <div class="slider-indx__rate">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/star.png">
                            </div>
                        </div>
                        <div class="slider-indx__add-to-cart">
                            <a href="<?php echo the_permalink(); ?>"><div class="btn-add-to-cart">В КОРЗИНУ</div></a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
    </div>
</section>