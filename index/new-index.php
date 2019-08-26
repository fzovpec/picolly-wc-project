<section class="section-index content">
    <div class="section-index__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title">Новинки</h2>
        </div>
        <div class="section-index__arrows">
            <img class="section-index__arrow swiper-button-prev" id="swiper-button-prev_3" src="<?php echo get_template_directory_uri() ?>/img/arrow_left.png">
            <img class="section-index__arrow swiper-button-next" id="swiper-button-next_3" src="<?php echo get_template_directory_uri() ?>/img/arrow_right.png">
        </div>
    </div>
    <div class="section-index__underline"></div>
    <div class="section-index__images row">
        <div class="section-index__slider slider-index col-md-12 swiper-container" id="swiper-container_3">
            <div class="flex-row swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'orderby' => 'date',
                );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ):
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="slider-indx__slide  swiper-slide">
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
                            <a href="<?php echo the_permalink(); ?>"><div class="btn-add-to-cart">В КОРЗИНУ</div></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif;
            ?>
            </div>
        </div>
    </div>
    </div>
</section>
