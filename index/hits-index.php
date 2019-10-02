<section class="section-index content">
    <div class="section-index__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title">Хиты продаж</h2>
        </div>
        <div class="section-index__arrows">
            <img class="section-index__arrow swiper-button-prev" id="swiper-button-prev_2" src="<?php echo get_template_directory_uri() ?>/img/arrow_left.png">
            <img class="section-index__arrow swiper-button-next" id="swiper-button-next_2" src="<?php echo get_template_directory_uri() ?>/img/arrow_right.png">
        </div>
    </div>
    <div class="section-index__underline"></div>
    <div class="section-index__images row">
        <div class="section-index__slider slider-index col-md-12 swiper-container" id="swiper-container_2">
            <div class="flex-row swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'product',
                        'meta_key' => 'total_sales',
                        'posts_per_page' => 10,
                        'orderby' => 'meta_value_num',
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $prdct = wc_get_product( get_the_ID() ) ;
                ?>
                <div class="slider-indx__slide  swiper-slide">
                    <a href = "<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="slider-indx__main-img">
                    </a>
                    <div class="slider-indx__title"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
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
                            <a href="<?php home_url( '/' ). '?am='.$prdct->id.'&url='. home_url( '/' ) ?>" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s"><button name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn-add-to-cart" style="float: left;" type="submit">В КОРЗИНУ</button></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
    </div>
</section>
