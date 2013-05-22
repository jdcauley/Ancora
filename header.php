<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/bootstrap-responsive.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/app.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
		<script src="<?php echo theme_url('/assets/js/bootstrap.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo current_url(); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>

			<?php
			$latestPostURL = base_url() . Registry::get('posts_page')->slug . '/' . latest_post()->data['slug'];
			$latestPostLink = '<a
				href="' . $latestPostURL . '"
				class="latest-post ' . ($latestPostURL == $_SERVER['REQUEST_URI'] ? 'current' : '') . '"
				title="' . latest_post()->data['title'] . '"
				>Latest Post</a>';
		?>
	</head>
	<body class="<?php echo body_class(); ?>">
					<header class="container">
						<div class="navbar navbar-inverse" style="position: static;">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
                  <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav">
                    	<?php if(has_menu_items()): ?>
               				 <?php while(menu_items()): ?>
												<li <?php echo (menu_active() ? 'class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
											 <?php endwhile; ?>
											<?php endif; ?>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<?php while(categories()): ?>
														<li><a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>"><?php echo category_title(); ?></a></li>
													<?php endwhile; ?>
                        </ul>
                      </li>
                    </ul>
                    <form class="navbar-search pull-right" action="<?php echo search_url(); ?>">
                      <input type="text" class="search-query span2" placeholder="Search" value="<?php echo search_term(); ?>">
                    </form>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
          </header>