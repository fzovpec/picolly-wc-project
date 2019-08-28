<?php
?>
<section class="section-index content">
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <div class="section-index__head section-factories__head">
        <div class="section-index__title-block section-index__title-block-single">
            <h2 class="section-index__title"><?php the_title() ?></h2>
        </div>
    </div>
    <div class="section-index__underline"></div>
    <div class="product row">
        <div class="product__image col-md-12 col-lg-5 col-xs-12">
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="product__img"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-md-12 col-lg-6 col-xs-12">
            <div class="product__name"><?php the_title() ?></div>
            <div class="product__desc">
                <?php the_content() ?>
            </div>
        </div>
    </div>
    <?php
        endwhile;
        endif;
        wp_reset_postdata();
    ?>
</section>
