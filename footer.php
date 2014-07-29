			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          <hr />
		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					<div class="foot">
						<p class="attribution">&copy; <?php bloginfo('name'); ?>  - Thank you for visiting. Self made Teo Flat Portfolio Theme.</p>
						<p class="pull-right"></p>
					</div>
			
					
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	<div id="wrap">
 		<a href="#top" id="top-link">Back to Top</a>
	</div>
	<script>
	jQuery(document).ready(function() {
	  jQuery('[data-toggle=offcanvas]').click(function() {
	    jQuery('.row-offcanvas').toggleClass('active');
	  });

	  jQuery('#top-link').topLink({
   		min: 500,
    	fadeSpeed: 100
	  });
	  //smoothscroll
	  jQuery('#top-link').click(function(r) {    
	    jQuery("html, body").animate({ scrollTop: 0 }, 300);
	  });
	});
	</script>
	</body>

</html>