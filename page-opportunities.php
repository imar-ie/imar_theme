<?php get_header(); ?>
<section id="page">
    <div class="container">
        <div id="content" class="site-content" role="main">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) { the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right ">', '</small><div class="clearfix"></div>' ); ?>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
                <div class="entry-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php } ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php zee_link_pages(); ?>
                   

					<?php 
						$args = array( 'cat' => 11,
										'order'       => 'asc', 	
										'meta_query' => array(
							
														array(
																'key' => 'opportunity_expired',
																//'value' => 'true',
																'compare' => 'NOT EXISTS'
																)
															)
											);


						//$my_query = new WP_Query( 'cat=11'.'&orderby=date&order=dec' );
						$my_query = new WP_Query( $args );
						
						echo '<div class="well">';
						//var_dump($my_query);
						if($my_query->have_posts()){
							echo "<p><h3>We currently have the following open vacancies:</h3></p>";
							
							
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  <div class="row">
					  	 <div class="col-sm-11 col-sm-offset-1">
						    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						    <small>Posted <?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
					    </div>
					  </div>
					<?php
					endwhile;

					 }else{
						echo "<h3>Sorry no vacancies at present...</h3>";
					}
					echo '</div>';
						 ?>
                  
                   
                   
                </div>
            </article>
            <?php comments_page(); ?>
            <?php } ?>
        </div><!--/#content-->
    </div>
</section><!--/#page-->
<?php get_footer();