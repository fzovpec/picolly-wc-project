<section class="section-index content">
    <div class="section-index__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title">ФАБРИКИ</h2>
        </div>
    </div>
    <div class="section-index__underline"></div>
    <div class="categorical">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'factories',
                'publish' => true,
                'paged' => get_query_var('paged'),
                'post_per_page' => 6
            );
            query_posts($args);
            while( have_posts() ) : the_post();?>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="row">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                    <span style="width: 100%"><?php the_title() ?></span>
                    <p><?php echo the_content(); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
        <span><a href="<?php the_permalink() ?>">Посмотреть все</a></span>
    </div>
</section>
