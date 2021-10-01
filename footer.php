<?php if (!is_page()) { ?>
</div><!--/#primary-->
</div><!--/.col-lg-12-->
</div><!--/.row-->
</div><!--/.container.-->
</section><!--/#main-->
<?php } ?>

<section id="bottom" class="imar-footer">
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar('bottom'); ?>
    </div>
  </div>
</section>
<section id="gateway-info" class="hidden-xs">
  <div class="container">
    <div class="row">
      IMaR is part of the Munster Technological University, a nationwide resource for industry aimed at assisting in the delivery of innovative and/or near to market solutions for both local and national industry.
    </div>
  </div>
</section>

<!--#social-->
<section id="social" class="">
	<div class="container">
		<div class="row">
			<ul>
				<li>
					<div class="social-btns clearfix">
						<a class="btn btn-social btn-twitter" href="http://twitter.com/imar_ie" target="_blank" title="Follow IMaR on Twitter"> <i class="icon-twitter"></i> </a>
					</div>
				</li>
				<li>
					<div class="social-btns clearfix">
						<a class="btn btn-social btn-facebook" href="https://www.facebook.com/imar.technology.gateway" target="_blank" title="Follow IMaR on Facebook"> <i class="icon-facebook"></i> </a>
					</div>
				</li>
				<li>
					<div class="social-btns clearfix">
						<a class="btn btn-social btn-linkedin" href="https://www.linkedin.com/company/imar-technology-gateway" target="_blank" title="Follow IMaR on Linkedin"> <i class="icon-linkedin"></i> </a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<!--#supporters-->
<section id="supporters" class="">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<!--<h3>Funding partners (?):</h3>-->
				<ul>
					<li>
						<a href="http://www.enterprise-ireland.com/" target="_blank" title="Enterprise Ireland">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/supporters_logos/ei.png" alt="Enterprise Ireland" width="175" height="60" />
						</a>
					</li>
					<li>
						<a href="http://www.mtu.ie" target="_blank" title="Munster Technological University ">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/supporters_logos/mtu.png" alt="Munster Technological University" width="175" height="60" />
						</a>
					</li>
          <li>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech_gateway.png" alt="IMaR" width="200" height="60" />
					</li>
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/supporters_logos/eu_regional_dev_fund_logo.png" alt="EU RDF" width="175" height="60" />
          </li>
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/supporters_logos/eu_struct_fund_logo.png" alt="EU Structural and Inverstment fund" width="175" height="60" />
          </li>
				</ul>
				<p>
					<em>Investing in your future</em>
				</p>
			</div>
		</div>
	</div>
</section>
<!--/#supporters-->

<footer id="footer" class="">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php show_footer();?>
      </div>
      <div class="col-sm-8 hidden-xs">
        <ul class="pull-right">
          <?php
          wp_nav_menu(
              array(
            'theme_location' => 'footer',
            'container'  => false,
            'menu_class' => '',
            'items_wrap'=>'%3$s'
            )
          );
          ?>
          <li>
            <a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a><!--#gototop-->
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer><!--/#footer-->

  <?php if (zee_option('zee_theme_layout')=='boxed') { ?>
    </div><!--/#boxed-->
  <?php } ?>

<?php google_analytics();?>

<?php wp_footer(); ?>

</body>
</html>
