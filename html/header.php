<?php
/**
 * @package WordPress
 * @subpackage Options Framework Theme
 */
?>		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--  <meta name="viewport" content="width:device-width; initial-scale=1.0" /> -->
     <title><?php wp_title( '|', true, 'right' ); ?></title>
   
   <?php wp_head();?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/assets/images/favicon.png">
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/all-ie.css">
		<![endif]-->
	</head>

	<body>
		<!--Wrapper Starts Here-->
		<div id="wrapper">
			<!--Header Section Starts Here-->
			<div id="header">
				<div class="main clearfix">

					<div class="connect-us clearfix">

						<ul class="social-icon clearfix">
							<li>
								<a href="<?php echo of_get_option('twitter_link');?>" target="_blank"  class="twitter"></a>
							</li>
							<li>
								<a href="<?php echo of_get_option('facebook_link');?>"  target="_blank" class="facebook"></a>
							</li>
							<li>
								<a href="<?php echo of_get_option('google_link');?>"  target="_blank" class="google-plus"></a>
							</li>
							<li>
								<a href="<?php echo of_get_option('linkedin_link');?>"  target="_blank" class="linkedin"></a>
							</li>
						</ul>

						<ul class="phone-email">
							<li class="phone">
								<a href="tel:<?php echo of_get_option('tell_no');?>"><i></i>Tel:<?php echo of_get_option('tell_no');?></a>
							</li>
							<li class="email">
								<a href="mailto:<?php echo of_get_option('mail');?>"><i></i>Email:<?php echo of_get_option('mail');?> </a>
							</li>
						</ul>
					</div>

					<div class="logo">
						<?php $logo= get_option('logo');
						if($logo){?>
						<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $logo;?>" alt="" title="" /> </a>
					    <?php } else { ?>
					    	<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url');?>/assets/images/logo.png" alt="" title="" /> </a>
							
					    <?php }?>
					</div>

					<div class="main-nav-bg">
						<div id="dd" class="wrapper-dropdown-5">
							<span class="mobile-view">Navigation</span>
							<?php wp_nav_menu(array('menu_class' => 'main-nav dropdown clearfix','container' => '', 'theme_location' => 'mainmenu'));?>
						</div>
					</div>
				</div>
			</div>
			<!--Header Section Ends Here-->