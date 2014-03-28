<?php get_header(); ?>
<!--Content Start Here -->
<div id="content">
    <? //php get_template_part(banner, slider); ?> 
    <div class="instractions ">
        <div class="page clearfix">
            <div class="instraction-sidebar">
                <div class="squire">
                    <span><?php echo "404.Error.Monia "; ?></span>
                </div>
                <ul class="catagory">
                    <li>
                        <a href="<?php echo of_get_option('join_the_campaign_link'); ?>" target="_blank""><?php echo of_get_option('join_the_campaign_text'); ?><i>&nbsp;</i></a>
                    </li>
                    <li>
                        <a href="<?php echo of_get_option('donate_link'); ?>" target="_blank""><?php echo of_get_option('donate_text'); ?><i>&nbsp;</i></a>
                    </li>
                    <li>
                        <a href="<?php echo of_get_option('speak_up_link'); ?>" target="_blank""><?php echo of_get_option('speak_up_text'); ?><i>&nbsp;</i></a>
                    </li>
                    <li>
                        <a href="<?php echo of_get_option('start_a_conversation_link'); ?>" target="_blank""><?php echo of_get_option('start_a_conversation_text'); ?><i>&nbsp;</i></a>
                    </li>
                </ul>
            </div>

            <div class="main-content">
               <p><?php echo "Sorry,That’s an error. The requested URL was not found on this server."; ?></p>
            </div>
        </div>
    </div>
</div>

<!--Content End Here-->
<?php get_footer(); ?>


