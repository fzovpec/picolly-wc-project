<?php while (have_posts()) : the_post(); ?>

    <?php
          if(isset($_GET['product_cat'])){
              require('single-cat/category.php');
          }
    ?>

  <?php the_content(); ?>

<?php endwhile; ?>
