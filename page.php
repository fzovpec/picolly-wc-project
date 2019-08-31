<?php while (have_posts()) : the_post(); ?>

    <?php
          if(isset($_GET['product_cat'])){
              if(isset($_GET['factory'])){
                  require('single-cat/factory.php');
              }
              else{
                  require('single-cat/category.php');
              }
          }
          else{
              the_content();
          }
    ?>

<?php endwhile; ?>
