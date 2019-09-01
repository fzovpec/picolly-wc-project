<section class="section-index content">
    <div class="section-index__head section-factories__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title"><?php woocommerce_page_title(); ?></h2>
        </div>

    </div>
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
                    <div class="select-brown__category">для девочек</div>
                    <div class="select-brown__category">для девочек</div>
                    <div class="select-brown__category">для девочек</div>
                    <div class="select-brown__category">для девочек</div>
                </div>
            </div>
            <div class="select-brown__container">
                <div class="select-brown">
                    <div class="select-brown__head">Тип товара</div>
                    <div class="select-brown__category">стол</div>
                    <div class="select-brown__category">стул</div>
                    <div class="select-brown__category">шкаф</div>
                    <div class="select-brown__category">кровать</div>
                </div>
            </div>
            <div class="select-brown__container">
                <div class="select-brown">
                    <div class="select-brown__head">ФАБРИКА</div>
                    <div class="select-brown__category">фабрика</div>
                    <div class="select-brown__category">фабрика</div>
                    <div class="select-brown__category">фабрика</div>
                    <div class="select-brown__category">фабрика</div>
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
