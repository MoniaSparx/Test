<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"/>
        <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.less"/>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/less-1.5.0.min.js"></script>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/css3-mediaqueries.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie.css" media="screen">
        <![endif]-->
        <?php wp_head(); ?>
    </head>
   
    <body>
        <div id="wrapper">
            <!--Head Start Here-->
            <div id="header">
                <div class="page">
                    <div class="clearfix">
                        <a href="<?php echo site_url(); ?>" class="logo"> <img src="<?php echo of_get_option('website_logo'); ?>"  title="" alt=""/> </a>
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
                    <?php
                    $defaults = array(
                        'theme_location' => 'main_menu',
                        'container' => '',
                        'echo' => true,
                        'items_wrap' => '<ul  class="nav clearfix">%3$s</ul>',
                    );

                    wp_nav_menu($defaults);
                    ?>

                </div>
            </div>