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
      IMaR, based in Munster Technological University Kerry, is a nationwide resource for companies seeking to develop new products, processes or services. Supported by Enterprise Ireland, IMaR asissts in the delivery of state of the art digital solutions across all sectors of enterprise in Ireland.
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
  <div class="container mt-3" style="margin-top:5em">
    <div class="row">
      <p>
        <em> “IMaR Technology Gateway is co-funded by the Government of Ireland and the European Union through the ERDF Southern, Eastern & Midland Regional Programme 2021-27”.</em>
      </p>
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
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/supporters_logos/gov_ie.png" alt="IMaR"/>
          </li>
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/supporters_logos/eu.png" alt="European Union"/>
          </li>
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/supporters_logos/sra.png" alt="Southern Regional Agency"/>
          </li>
					<li>
						<a href="http://www.enterprise-ireland.com/" target="_blank" title="Enterprise Ireland">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/supporters_logos/ei.png" alt="Enterprise Ireland"/>
						</a>
					</li>
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech_gateway.png" alt="EI Technology Gateway Network"/>
          </li>
				</ul>
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
