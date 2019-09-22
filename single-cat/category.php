<?php
    global $product;
    $ages = array();
    $types = array();
    $category = get_queried_object();
    require('get_ages.php');
    require('get_types.php');
    $category = get_queried_object();
    $ages_post = $_POST['age'];
    $ages_str = '';
    foreach ($ages_post as $age_post) {
        $ages_str .= $age_post . '_';
    }
    $age_get = $_GET['age'];
    $age_pp = explode('_', $age_get);
    $type_post = $_POST['type'];
    $type_str = '';
    foreach ($type_post as $type_post) {
        $type_str .= $type_post . '_';
    }
    $type_get = $_GET['type'];
    $type_pp = explode('_', $type_get);
    if(isset($_GET['fil'])){
        header('Location: '.esc_url(get_term_link( $category )).'&url='.$_POST['categor'].'&type='.$type_str.'&age='.$ages_str);
    }
?>
<section class="section-index content">
    <div class="section-index__head section-factories__head">
        <div class="section-index__title-block">
            <h2 class="section-index__title"><?php woocommerce_page_title(); ?></h2>
        </div>

    </div>
    <?php
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
            <form action="<?php echo esc_url(get_term_link( $category )).'&fil=true';?>" method="post">
                <?php if( !empty($product_categories) ):?>
                <div class="select-brown__container">
                    <div class="select-brown">
                        <div class="select-brown__head">КАТЕГОРИЯ</div>
                        <?php
                            foreach ($product_categories as $key => $cat){?>
                                <input type="checkbox" name="categor" value="<?php echo esc_url(get_term_link( $cat )) ?>"> <?php echo $cat->name; ?></input><br>
                        <?php }?>

                    </div>
                </div>
            <?php endif; ?>
                <div class="select-brown__container">
                    <div class="select-brown">
                        <div class="select-brown__head">Тип товара</div>
                        <?php foreach ($types as $key => $type){ ?>
                            <input type="checkbox" name="type[]" value="<?php echo $type?>"> <?php echo $type; ?></input><br>
                        <?php } ?>
                    </div>
                </div>
                <div class="select-brown__container">
                    <div class="select-brown">
                        <div class="select-brown__head">Возраст</div>
                        <?php foreach ($ages as $key => $age){ ?>
                            <input type="checkbox" name="age[]" value="<?php echo $age ?>"> <?php echo $age; ?></input><br>
                        <?php } ?>
                    </div>
                </div>

                <input type="submit" style="background:#ce2a6e; margin-top: 10px;margin-bottom: 50px;" class="sum-btn" value="Применить">
            </form>
        </div>
        <div class="row col-lg-9 col-md-12">
            <?php
                $args = array(
                    'post_type'      => 'product',
                    'product_cat'    => $_GET['product_cat']
                );
                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();
                $prdt = wc_get_product( get_the_ID() ) ;
                if(isset($_GET['type']) && !empty($_GET['type'])){
                    if(!in_array($prdt->get_attribute('type'), $type_pp)){
                        continue;
                    }
                }
                if(isset($_GET['age']) && !empty($_GET['age'])){
                    if(!in_array($prdt->get_attribute('age'), $age_pp)){
                        continue;
                    }
                }
            ?>
                <div class="slider-indx__slide col-lg-4 col-md-6">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="slider-indx__main-img">
                    <a href="<?php echo the_permalink() ?>"><div class="slider-indx__title"><?php the_title(); ?></div></a>
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
                            <?php if ( $prdt->is_in_stock() ) : ?>
                                <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                   sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s"><div class="btn-add-to-cart">В КОРЗИНУ</div></a>',
                                	   esc_url( $prdt->add_to_cart_url().'&url='.esc_url(get_term_link( $category )) ),
                                	   esc_attr( $prdt->id ),
                                	   esc_attr( $prdt->get_sku() ),
                                	   $prdt->is_purchasable() ? 'add_to_cart_button' : '',
                                	   esc_attr( $prdt->product_type ),
                                	   esc_html( $prdt->add_to_cart_text() )
                                   ),
                                  $prdt );?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
        <?php endwhile;
    ?>
    </div>
    </div>
</section>
