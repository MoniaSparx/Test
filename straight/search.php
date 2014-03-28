<?php get_header(); ?>
<!--Content Start Here -->
<div id="content">
    <? //php get_template_part(banner, slider); ?> 
    <div class="instractions ">
        <div class="page clearfix">
            <div class="instraction-sidebar">
                <div class="squire">
                    <span>Search result for: <?php echo get_query_var('s'); ?></span>
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
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php motorino_truncate_posts(55, 'Read More...'); ?></p>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>

            <?php wp_pagenavi(); ?>
        </div>
    </div>
</div>

<!--Content End Here-->
<?php get_footer(); ?>