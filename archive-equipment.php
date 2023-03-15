<?php get_header();

$col= 'col-md-12';
// if ( is_active_sidebar( 'sidebar' ) ) {
//     $col = 'col-md-8';
// }
?>

</div>

<section id="equipment">

  <div class="container">

    <div class="row item">

        <div id="content" class="site-content <?php echo $col; ?>" role="main">

          <div class="lead">
            The <strong>IMaR</strong> center houses state-of-the-art research facilities, both <strong>IMaR</strong> strands focus on state of the art technology innovation and delivery across a number of business sectors in key areas including; Automotive, Telecommunications, Pharmaceutical, Production / Manufacturing, Aeronautical, Environmental and Agri-business.
          </div>

            <?php
            $counter = 0;
             if (have_posts()) { ?>

            <?php while (have_posts()) {
                 the_post();

                 $counter++; ?>
                   <div class="row">
                     <?php
                     //We are in loop so we can check if counter is odd or even
                      if ($counter % 2 == 0) { //It's even

                      get_template_part('post-templates/equipment/content', 'even');

                      }else{ //It's odd

                      get_template_part('post-templates/equipment/content', 'odd');

                       }
                     ?>


                   </div>

                     <?php

             } ?>

            <?php echo zee_pagination(); ?>

            <?php } else { ?>
            <?php //get_template_part( 'post-templates/content', 'none' );?>
            <?php } ?>
          </div>

        </div><!-- /row-->
        <?php //get_sidebar();?>


  </div>
</section>

<?php get_footer();
