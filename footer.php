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
	
	     
    </body>
</html>
