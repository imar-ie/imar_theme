<?php /**
 * Template Name: Single Team
 */
get_header();
$col = 'col-md-12';
if (is_active_sidebar('sidebar')) {
	$col = 'col-md-8';
}
    ?>

    <section id="team-members">
    
        <div class="container">
      <div class="row">  
       <div id="content" class="site-content" role="main">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) { the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php edit_post_link(__('Edit', ZEETEXTDOMAIN), '<small class="edit-link pull-right ">', '</small><div class="clearfix"></div>'); ?>



		
				<div  class="col-md-6 col-sm-4 col-xs-12 text-right">
					       <header class="entry-header">
                	        <?php //thumbnail
							if (has_post_thumbnail($post -> ID)) {
								echo get_the_post_thumbnail($post -> ID, 'medium', array(
								//'src'	=> $src,
								'class' => "img-circle img-thumbnail", 'alt' => trim(strip_tags($post -> post_title)), 'title' => trim(strip_tags($post -> post_title)), ));
							} else {
								echo '<img width="295" height="300" src="/wp-content/uploads/2014/06/team_holder-300x300.jpg" class="img-circle img-thumbnail wp-post-image" alt="'.trim(strip_tags($post -> post_title)).'" title="'.trim(strip_tags($post -> post_title)).'" />';
							}
        ?>
                        <h1 class="entry-title">
                            <?php the_title(); ?>
                            <?php if(get_post_meta($post->ID, 'team_designation', true)!=''){ ?>
          					<br><small class="designation muted"><?php echo get_post_meta($post->ID, 'team_designation', true)   ?></small>
          					<?php } ?>
                        </h1>
                    </header>
				</div>

				<div  class="col-md-6 col-sm-8 col-xs-12">

					<p><?php echo $post -> post_content; ?></p>

				</div>
								<div  class="col-md-6 col-sm-8 col-xs-12 pull-right text-center">

					        <div class="social-btns clearfix">
          <?php if(get_post_meta($post->ID, 'team_facebook', true)!=''){ ?>
          <a class="btn btn-social btn-facebook" href="<?php echo  get_post_meta($post->ID, 'team_facebook', true)   ?>"><i class="icon-facebook"></i></a>
          <?php } ?>
          <?php if(get_post_meta($post->ID, 'team_twitter', true)!=''){ ?>
          <a class="btn btn-social btn-twitter" href="<?php echo get_post_meta($post->ID, 'team_twitter', true)?>"><i class="icon-twitter"></i></a>
          <?php } ?>        
          <?php if(get_post_meta($post->ID, 'team_gplus', true)!=''){ ?>
          <a class="btn btn-social btn-google-plus" href="<?php echo get_post_meta($post->ID, 'team_gplus', true)?>"><i class="icon-google-plus"></i></a>
          <?php } ?>
          <?php if(get_post_meta($post->ID, 'team_linkedin', true)!=''){ ?>
          <a class="btn btn-social btn-linkedin" href="<?php echo get_post_meta($post->ID, 'team_linkedin', true)?>"><i class="icon-linkedin"></i></a>
          <?php } ?>                
          <?php if(get_post_meta($post->ID, 'team_pinterest', true)!=''){ ?>
          <a class="btn btn-social btn-pinterest" href="<?php echo get_post_meta($post->ID, 'team_pinterest', true)?>"><i class="icon-pinterest"></i></a>
          <?php } ?>    
        </div>

				</div>

			
			 </article>
		</div>
           
            <?php } ?>
            </div><!--/.row-->
        </div><!--/#content-->

<div class="row">
		<div  class="col-md-6 col-sm-8 col-xs-12 pull-right return-link top-buffer">
			<p>
				<a href="/team" class="btn btn-primary btn-lg" role="button"> Entire IMaR team <span class="glyphicon glyphicon-chevron-right"></span></a>
			</p>
		</div>
	</div>
        
    </section><!--/#team-member-->
    

    <?php get_footer(); ?>
