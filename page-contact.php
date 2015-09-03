<?php
    /**
    * Template Name: Contact Form
    */
    get_header();
    $col= 'col-md-12';
    if ( is_active_sidebar( 'sidebar' ) ) {
        $col = 'col-md-8';
    }

    ?>

    <section id="contact-us">
    
    
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
                    <header class="entry-header">
                        <h4 class="entry-title">
                            <?php the_title(); ?>
                        </h4>
                    </header>

                    <form id="contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo get_template_directory_uri(); ?>/lib/sendemail.php">

                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" required="required" placeholder="<?php _e('Name', ZEETEXTDOMAIN); ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" required="required" placeholder="<?php _e('Email', ZEETEXTDOMAIN); ?>">
                                </div>
                                <div class="form-group">
                                    <input type="url" class="form-control" name="url" placeholder="<?php _e('Website', ZEETEXTDOMAIN); ?>">
                                </div>    
                                 <button class="btn btn-primary btn-lg"><?php _e('Send Message', ZEETEXTDOMAIN); ?></button>
                            </div>
                            <div class="col-lg-6">
                            <div class="form-group">
                            		<input type="text" class="form-control" name="subject" required="required"  placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea rows="10" class="form-control" name="message" name="url" placeholder="Message" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                       
                    </form>
                </div><!--/#content-->
                <div class="col-md-4">
                        <h4><?php _e('Our Location', ZEETEXTDOMAIN); ?></h4>
                        <iframe width="100%" height="<?php echo zee_option('zee_contact_map_height');?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                         src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo zee_option('zee_contact_map_location');?>&amp;aq=0&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo zee_option('zee_contact_map_location');?>&amp;t=m&amp;output=embed"></iframe>
                </div>
                
            </div><!--/.row-->
        </div><!--/.container-->
        
    </section><!--/#contact-us-->
    

<section id="imar-location">
	<div class="container">
	          <div class="row">
	          <p class="lead">
                   IMaR is stategically placed in the manufacturing capital of the South-West of Ireland where we are located in the heart of Tralee, Co. Kerry.
                    We are fully accessible by road, rail and air.<br/>
                    <span class="glyphicon glyphicon-map-marker"></span> Co-ordinates: <strong>N 52&deg; 16.308' / W 09&deg; 41.386'</strong>
                    </p>
            </div><!--/.row-->
		<div class="row">
			<div class="col-sm-4">
<h4>By Air:</h4>
				<ul>
					<li>Aprox. 20 minutes drive from Kerry International Airport</li>
					<li>Aprox. 1 hour 40 minutes drive from both Shannon and Cork Airports</li>
					<li>Aprox. 3 hours 15 minutes drive from Dublin Airport</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<h4>By Rail:</h4>
				<ul>
					<li>Within 10 minute drive from Tralee train station</li>

				</ul>
			</div>
			<div class="col-sm-4">
				<h4>By Road:</h4>
				<ul>
					<li>Aprox. 1 hour 30 minutes drive from Limerick city</li>
					<li>Aprox. 1 hour 40 minutes drive from Cork city</li>
					<li>Aprox. 3 hours 15 minutes drive from Dublin city</li>
				</ul>
		</div>
	</div>
</section>
    <?php get_footer(); ?>
