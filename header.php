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
							<?php
								$urls = get_option("social_icons");
								$size = get_option("social_icons_size");
								foreach ($urls as $key => $url) {
									if($url != "") {
							?>
							<li><a href="<?php echo $url; ?>"><img src="<?php echo get_bloginfo('template_url') ?>/img/icons/<?php echo $size;?>/<?php echo $key; ?>.png"></a></li>
							<?php
									}
								}
							?>
						</ul>
					</div>
				</div>