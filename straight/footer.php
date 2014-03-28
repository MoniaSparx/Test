<!--Footer Start Here-->
<div id="footer">
    <div class="page">
        <div class="footer-content clearfix">
             <a href="<?php bloginfo('url'); ?>" class="mobile-logo"> <img src="<?php echo of_get_option('website_footer_logo'); ?>"  alt="" title="" /></a>
             <a href="<?php bloginfo('url'); ?>" class="desktop-logo"> <img src="<?php echo of_get_option('website_mobile_logo'); ?>"  alt="" title="" /></a>
            <span class="nav-click"></span>
            <?php wp_nav_menu(array('container' => '', 'theme_location' => 'footer_menu', 'menu_class' => '')); ?> 

        </div>
    </div>
</div>
<!--Footer End Here-->
</div>
<?php wp_footer(); ?>
</body>
</html>