<?php


if( ! function_exists('zee_scripts') ){

// adding scripts
    add_action('wp_enqueue_scripts', 'zee_scripts');

    function zee_scripts() {

    // Javascripts
        wp_enqueue_script('bootstrap-js',   get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'));
        wp_enqueue_script('prettyPhoto',    get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js');
        wp_enqueue_script('isotope',        get_template_directory_uri() . '/assets/js/jquery.isotope.min.js');
        wp_enqueue_script('main-js',        get_template_directory_uri() . '/assets/js/main.js');

    // Stylesheet
        wp_enqueue_style('bootstrap-min',   get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('prettyPhoto',     get_template_directory_uri() . '/assets/css/prettyPhoto.css');
        wp_enqueue_style('animate',         get_template_directory_uri() . '/assets/css/animate.css');
        wp_enqueue_style('fontawesome',     get_template_directory_uri() . '/assets/css/font-awesome.min.css');    
        wp_enqueue_style('style',           get_stylesheet_directory_uri() . '/style.css');
    // Inline css
        wp_add_inline_style( 'style',       zee_style_options() );
    }
}


/**

Override the logo() function

.k

**/

//Logo Option
if (!function_exists("logo")) {
    function logo(){
   ?>            
        <a class="navbar-brand" style="background-color:red;" href="<?php echo esc_url( home_url( '/' ) ); ?>" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_imar.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
        </a>
        <a class="navbar-brand pull-right" style="background-color:blue; float:right;" target="_blank" href="http://www.technologygateway.ie/" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech_gateway.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
        </a>
        <?php 
    
}
}


/**

Override the team shortcode

.k

**/


add_action( 'after_setup_theme', 'my_ag_child_theme_setup' );

function my_ag_child_theme_setup() {
   remove_shortcode( 'zee_team' );
   /**
 * Team Shortcode
 * @param  [type] $atts
 * @param  string $content
 * @return [type]
 */

add_shortcode( 'imar_team', function( $atts, $content = null ){

  ob_start();


  $args = array(
    'posts_per_page' => -1,
   'post_type'      =>  'zee_team',
   'order'            => 'ASC',
   'orderby'		=> 'menu_order'
   
   );


  $data = get_posts( $args );
  if(count($data)>0){ ?>
  <div class="team row">
    <?php foreach ($data as $key => $value) { ?>
    <div  class="col-md-3 col-sm-4 col-xs-6">
      <div class="center team-member">
      	<a href="/team/<?php echo $value->post_name; ?>">
        <p>
        <?php
        if ( has_post_thumbnail($value->ID)) {
        echo get_the_post_thumbnail( $value->ID, 'thumbnail', array(
			//'src'	=> $src,
			'class'	=> "img-circle img-thumbnail",
			'alt'	=> trim(strip_tags( $value->post_title )),
			'title'	=> trim(strip_tags( $value->post_title )),
		));
		}else{
		echo '<img width="150" height="150" src="/wp-content/uploads/2014/06/team_holder-150x150.jpg" class="img-circle img-thumbnail wp-post-image" alt="'.trim(strip_tags( $value->post_title )).'" title="'.trim(strip_tags( $value->post_title )).'" />';
		}
        ?>
        
        </p>
        <h4><?php echo $value->post_title; ?>
          <?php if(get_post_meta($value->ID, 'team_designation', true)!=''){ ?>
          <br><small class="designation muted"><?php echo get_post_meta($value->ID, 'team_designation', true)   ?></small>
          <?php } ?>
        </h4>
        </a>
      </div>
    </div><!--/.col-->
    <?php } ?>
  </div><!--/.team-->

  <?php } else { ?>
  <div class="alert alert-danger fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php _e('No Team found!', ZEETEXTDOMAIN); ?>
  </div>
  <?php
}
return ob_get_clean();

});
}

/* replace the login logo */


if(!function_exists('zee_admin_logo')){
    function zee_admin_logo(){
?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php
	}
        add_action( 'login_enqueue_scripts', 'zee_admin_logo' );
    }

/*
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
            padding-bottom: 30px;
            border: 10px solid red;
        }
    </style>
<?php }
add_action( 'zee_admin_logo', 'my_login_logo' );*/


// Post type:  Team

//if( ! function_exists('zee_scripts') ){


add_action('init', function(){

    $labels = array(
        'name'                  => __( 'Team',                      ZEETEXTDOMAIN ),
        'singular_name'         => __( 'Team',                      ZEETEXTDOMAIN ),
        'menu_name'             => __( 'Team',                      ZEETEXTDOMAIN ),
        'all_items'             => __( 'Team Members',              ZEETEXTDOMAIN ),
        'add_new'               => __( 'Add New',                   ZEETEXTDOMAIN ),
        'add_new_item'          => __( 'Add New Member',            ZEETEXTDOMAIN ),
        'edit_item'             => __( 'Edit Member',               ZEETEXTDOMAIN ),
        'new_item'              => __( 'New Member',                ZEETEXTDOMAIN ),
        'view_item'             => __( 'View Member',               ZEETEXTDOMAIN ),
        'search_items'          => __( 'Search Member',             ZEETEXTDOMAIN ),
        'not_found'             => __( 'No Member found',           ZEETEXTDOMAIN ),
        'not_found_in_trash'    => __( 'No Member found in Trash',  ZEETEXTDOMAIN )
        );

$args = array(
    'labels'                => $labels,
    'public'                => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'menu_icon'             => get_template_directory_uri() . '/admin/images/icon-team.png',
	// 'rewrite'               => true,
    'rewrite' => array( 'slug' => 'team', 'with_front' => false ),
   
    'capability_type'       => 'post',
    'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes'),
    'hierarchical' => false
    );
register_post_type('zee_team', $args);
flush_rewrite_rules();
});

// disable the wpautop filter 

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );



