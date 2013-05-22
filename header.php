<!DOCTYPE html PUBLIC
  "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head <?php language_attributes(); ?>>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="content-wrap">
			<div id="content">
				<div id="header">
					<h1><a href="<?php bloginfo('url');?>"><?php bloginfo( 'name' ); ?></a></h1>
					<h4 id="tagline"><?php bloginfo('description'); ?></h4>
					<div id="nav-bar">
						 <?php wp_nav_menu(); ?> 
					</div>
					<div id="social-bar">
						<ul class="nav-list">
							<li><a href="http://www.twitter.com/sljack92"><img src="<?php echo get_bloginfo('template_url') ?>/img/Twitter.png"></a></li>
							<li><a href="http://www.github.com/samueljackson92"><img src="<?php echo get_bloginfo('template_url') ?>/img/GitHub.png"></a></li>
							<li><a href="http://www.linkedin.com/profile/view?id=190645648&trk=tab_pro"><img src="<?php echo get_bloginfo('template_url') ?>/img/LinkedIn.png"></a></li>
							<li><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php echo get_bloginfo('template_url') ?>/img/RSS.png"></a></li>
						</ul>
					</div>
				</div>