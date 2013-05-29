</div>
	<footer class="container" id="bottom">
		<div class="row">
	  	<div class="span6">
	    	<small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>
			</div>
			<div class="span6">
	      <ul class="footer-nav">
	        <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	       <?php if(twitter_account()): ?>
	        <li><a href="<?php echo twitter_url(); ?>" target="_blank">@<?php echo twitter_account(); ?></a></li>
	       <?php endif; ?>
	        <li><a href="<?// php echo admin_url(); ?>/admin" title="Administer your site!">Admin area</a></li>
	        <li><a href="/" title="Return to my website.">Home</a></li>
	      </ul>
	    </div>
	  </div>
	</footer>
	<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
	<script src="<?php echo theme_url('/assets/js/bootstrap.js'); ?>"></script>
	<script src="<?php echo theme_url('/assets/js/app.js'); ?>"></script>
	<!--  Custom Javascript -->
    		<?php if(customised()): ?>
    			<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	     	<script type="text/javascript">
					var _gaq = _gaq || [];
 			 			_gaq.push(['_setAccount', '<?php echo google_analytics(); ?>']);
 						_gaq.push(['_trackPageview']);
				 (function() {
    			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  				})();
			</script>
    </body>
</html>
