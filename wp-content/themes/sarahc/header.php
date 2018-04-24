<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- MOBILE NAVIGATION HAMBURGER -->
		<div class="hamburger" id="hamburger-1">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</div>
		<!-- /MOBILE NAVIGATION HAMBURGER -->
								
		<!-- MOBILE NAVIGATION  -->
		<div class="mobile-nav">
			<?php html5blank_nav(); ?>
		</div>
		<!-- /MOBILE NAVIGATION -->
		
		<!-- wrapper -->
		<div id="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
									
				<div id="left-side" class="left-side">
										
					<div class="inner clearfix">
						
						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
						
						<!-- LOGO -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>"><h1>SARAH MIHARA CREAGEN</h1></a>
						</div>
						<!-- /LOGO -->
						
					</div>
										
				</div>

			</header>
			<!-- /header -->
