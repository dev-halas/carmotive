<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />

		<!-- Stylesheets-->
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	</head>
	

	<body <?php body_class()?>>

		<?php $logo = get_field('header_logo', 'option'); ?>
		<header class="header">
			<div class="header--inner">
				<a href="<?php echo esc_url(home_url('/')) ?>" class="headerLogo">
					<img src="<?php echo $logo['url']; ?>" alt="LOGO" class="headerlogo--img">
				</a>
				<nav class="headerLinks">
					<?php wp_nav_menu(array(
							'theme_location' => 'main_nav'
						));
					?>  
				</nav>
				<button class="hamburger">
					<span class="hamburger__box">
						<span class="hamburger__inner"></span>
					</span>
				</button>
			</div>
		</header>
		<div class="headerDistance"></div>