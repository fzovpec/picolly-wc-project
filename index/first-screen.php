<section class="first-index swiper-container" id="big_swiper">

    <div class="first-index__arrow first-index__left">
        <img src="<?php echo get_template_directory_uri() ?>/img/first_arrow_left.png" class="swiper_first swiper-button-prev swiper-button-prev_big" id="big_swiper_prev">
        <img src="<?php echo get_template_directory_uri() ?>/img/first_index_right.png" class="swiper_first swiper-button-next swiper-button-next_big swiper_first_next" id="big_swiper_next">
    </div>


    <div class="swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'first',
            'publish' => true,
            'paged' => get_query_var('paged'),
        );
        query_posts($args);
        while( have_posts() ) : the_post();?>
        <div class="first-index__slide swiper-slide" style = "background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
            <div class="first-index__content-block">
                <div class="first-index__text indx-first-text">
                    <div class="indx-first-text__brown indx-first-text__simple"><?php the_title() ?></div>
                    <?php echo the_content(); ?>
                    <div class="btn-opacity"><a href="<?php echo the_permalink(); ?>">ПОДРОБНЕЕ</a></div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</section>
