<?php
    /**
    * Template Name: Partner
    */
    get_header();
    $col= 'col-md-12';
    if ( is_active_sidebar( 'sidebar' ) ) {
        $col = 'col-md-8';
    }

    ?>

    <section id="partners">
        
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
                </div>
            </article>
            <?php comments_page(); ?>
            <?php } ?>
        </div><!--/#content-->
       

            <div class="row">
                <div id="content" class="site-content <?php echo $col; ?>" role="main">
               <!--     <header class="entry-header">
                        <h4 class="entry-title">
                            <?php the_title(); ?>
                        </h4>
                    </header>-->

                </div><!--/#content-->
                
                     
<h2>Industry Partners</h2>
<p>Research outcomes and application enhancements for real-world solutions demand rigorous proof of functionality as well as feasibility studies. IMaR has created partnerships with MNCs and SMEs in order to benefit from their market experience. IMaR in partnership with industry and business, gains pragmatic knowledge through pilot implementation of IMaR proof of concept in the real-world rather than only in laboratories . These mutually beneficial partnerships have been created through EU and nationally funded mechanisms. Some of our partner companies are listed below.</p>

<div class="row show-grid">
				<div class="col-sm-12 col-md-12">
					<div id="industry" class="row show-grid">
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/ge.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/claymon_biomnis.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/thales.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/jettainer.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/neotech.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">

							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/universal_trace.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/punto_qualita.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/dairymaster.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/liebherr.png" class="img-responsive" />
						</div>						
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/spx.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/astellas.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/central_solutions.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/diomac.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/ssu.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/borgwarner.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/vistakon.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/altobridge.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/kostal.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/bolton_electronics.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/rfidineu.png" class="img-responsive" />
						</div>
					</div>
				</div>
			</div>

<h2>Academic Partners</h2>
<p>Research collaboration at IMaR is defined by the strength of our Academic Partners. IMaR aims to work with the best academic institutions in Europe and beyond. Here is a list of some of out academic partners:
</p>

<div class="row show-grid">
				<div class="col-sm-12 col-md-12">
					<div id="academic" class="row show-grid">
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/gust.png" class="img-responsive" />
						</div>

						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/ismb.png" class="img-responsive" />
						</div>

						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/ucl.png" class="img-responsive" />
						</div>

						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/fraunhofer.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/ulb.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/parma.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/technalia.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/iris.png" class="img-responsive" />
						</div>
						
						<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/tcd.png" class="img-responsive" />
						</div>
												<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/ucd.png" class="img-responsive" />
						</div>
												<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/ul.png" class="img-responsive" />
						</div>
												<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/usf.png" class="img-responsive" />
						</div>
												<div class="col-xs-6 col-sm-2 col-md-3">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_logos/unesco.png" class="img-responsive" />
						</div>

					</div>
				</div>
			</div>
                
            </div><!--/.row-->
        </div><!--/.container-->
        
    </section><!--/#partners-->
    

    <?php get_footer(); ?>
