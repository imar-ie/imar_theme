<div class="row imar-blue even">
  <div class="col-md-6 padding-0">
    <?php

        if (has_post_thumbnail()) :
          the_post_thumbnail();
        endif;
      ?>
  </div>
  <div class="col-md-6 info">

    <a href="<?php the_permalink(); ?>">
      <h2><?php the_title(); ?></h2>
            <?php
            $excerpt = '';
      if (has_excerpt()) {
          $excerpt = wp_strip_all_tags(get_the_excerpt());
      }
       ?>
       <p>
         <?php echo $excerpt;
         ?>
       </p>
    </a>
  </div>

</div>
