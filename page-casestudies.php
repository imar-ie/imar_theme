<?php
    /**
    * Template Name: Case Studies
    */
    get_header();

    ?>

    <section id="casestudies">

        <div class="container">

          <?php echo do_shortcode('[zee_portfolio column=4]');

          the_content(); ?>

        </div><!--/.container-->

    </section><!--/#casestudies-->

    <?php get_footer(); ?>
