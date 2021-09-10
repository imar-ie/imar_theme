<?php /**
 * Template Name: Single CaseStudy
 */
get_header();
$col = 'col-md-12';
if (is_active_sidebar('sidebar')) {
    $col = 'col-md-8';
}
    ?>

    <section id="case-study">

        <div class="container">
      <div class="row">
       <div id="content" class="site-content" role="main">
            <?php /* The loop */ ?>
            <?php while (have_posts()) {
        the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php edit_post_link(__('Edit', ZEETEXTDOMAIN), '<small class="edit-link pull-right ">', '</small><div class="clearfix"></div>'); ?>

				<div  class="col-md-5 col-sm-3 col-xs-12 text-right">
					       <header class="entry-header">
                	        <?php //thumbnail
                            if (has_post_thumbnail($post -> ID)) {
                                echo get_the_post_thumbnail($post -> ID, '', array(
                                //'src'	=> $src,
                                'class' => "ximg-circle img-thumbnail", 'alt' => trim(strip_tags($post -> post_title)), 'title' => trim(strip_tags($post -> post_title)), ));
                            } else {
                                echo '<img width="295" height="300" src="/wp-content/uploads/2014/06/team_holder-300x300.jpg" class="img-circle img-thumbnail wp-post-image" alt="'.trim(strip_tags($post -> post_title)).'" title="'.trim(strip_tags($post -> post_title)).'" />';
                            } ?>
                        <h1 class="entry-title">
                            <?php the_title(); ?>
                            <?php if (get_post_meta($post->ID, 'team_designation', true)!='') { ?>
          					<br><small class="designation muted"><?php echo get_post_meta($post->ID, 'team_designation', true)   ?></small>
          					<?php } ?>
                        </h1>
												<?php if (get_post_meta($post->ID, 'team_designation', true)!='') { ?>
								<br><small class="designation muted"><?php echo get_post_meta($post->ID, 'team_designation', true)   ?></small>
								<?php } ?>
                    </header>

										<?php

                                        $terms = wp_get_post_terms($post->ID, 'cat_portfolio');

        if ($terms) {
            foreach ($terms as $tag) {
                echo '<a  class="btn btn-sm btn-default">'.$tag->name.'</a> ';
            }
        } ?>

				</div>

				<div  class="col-md-7 col-sm-9 col-xs-12">

					<?php echo apply_filters('the_content', $post->post_content); ?>

				</div>

			 </article>
		</div>

            <?php
    } ?>
            </div><!--/.row-->
        </div><!--/#content-->

<div class="row">
		<div  class="col-md-6 col-sm-8 col-xs-12 pull-right return-link top-buffer">
			<p>
				<a href="/case-studies" class="btn btn-primary btn-lg" role="button"> All Case studies <span class="glyphicon glyphicon-chevron-right"></span></a>
			</p>
		</div>
	</div>

    </section><!--/#case-study-->


    <?php get_footer(); ?>
