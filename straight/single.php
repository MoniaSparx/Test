<?php get_header(); ?>
<!--Content Start Here -->
<div id="content">
    <?php get_template_part(banner, slider); ?> 
    <div class="instractions ">
        <div class="page clearfix">
            <div class="instraction-sidebar">
                <div class="squire">
                    <span><?php the_title(); ?></span>
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
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="help-us">
        <div class="page clearfix">
            <?php
            query_posts('page_id=34');
            if (have_posts()):while (have_posts()):the_post();
                    ?>
                    <div class="inner">
                        <?php the_content(); ?>
                        <a class="more-btn" href="<?php echo of_get_option('help_page_link'); ?>" target="_blank">more</a>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    </div>
    <?php
    $val = of_get_option('page_inner');
    query_posts("page_id=$val");
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <div class="acknowledgement">
                <div class="page">
                    <div class="acknowledge-txt">
                        <span class="acknowledge-head"><?php the_title(); ?></span>
                        <div class="txt">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
    endif;
    wp_reset_query();
    ?>
</div>

<!--Content End Here-->
<?php get_footer(); ?>