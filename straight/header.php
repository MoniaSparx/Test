<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico"/>
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/style.less"/>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrapper">
            <!--Head Start Here-->
            <div id="header">
                <div class="page">
                    <div class="clearfix">
                        <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php echo of_get_option('website_logo'); ?>"  title="" alt=""/></a>   
                        <div class="social-icons">
                            <a href="#"> follow us </a>
                            <ul class="header-icons clearfix">
                                <li class="fb">
                                    <a href="<?php echo of_get_option('facebook_link'); ?>" target="_blank">&nbsp;</a>
                                </li>
                                <li class="flicker">
                                    <a href="<?php echo of_get_option('flicker_link'); ?>" target="_blank">&nbsp;</a>
                                </li>
                                <li class="twt">
                                    <a href="<?php echo of_get_option('twitter_link'); ?>" target="_blank">&nbsp;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-wrap clearfix"><span class="nav-click"></span>
                    	<div class="nav-sec">
                    	<div class="mobNav">	
                    		
                    	<div class="search-sec m-search-sec">
                        	<form action="<?php echo site_url(); ?>">
                        		<input type="button" class="m-search-btn" value="" name="search-btn"/>
                        		<span class="m-search-bar"><input type="text" name="s" class="search-box" value="Search" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" /></span>
                        	</form>
                        </div>
                    	 <?php wp_nav_menu(array('container' => '', 'theme_location' => 'main_menu', 'menu_class' => 'nav')); ?> 
                       </div>
                        <div class="search-sec">
                        	<form action="<?php echo site_url(); ?>">
                        		<input type="button" class="search-btn" value="" name="search-btn"/>
                        		<span class="search-bar"><input type="text" name="s" class="search-box" value="Search Query Here" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" /></span>
                        	</form>
                        </div>
                        </div>
                    </div>
                    
                    </div>
            </div>
            <!--Head End Here-->