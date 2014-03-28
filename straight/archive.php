<?php get_header(); ?>
<!--Content Start Here -->
<div id="content">
    <? //php get_template_part(banner, slider); ?> 
    <div class="instractions ">
        <div class="page clearfix">
            <div class="instraction-sidebar">
                <div class="squire">
                    <span><?php if (is_day()) : ?>
                            <?php printf(__('Daily Archives : %s', 'CSS2645'), '<small>' . get_the_date() . '</small>'); ?>
                        <?php elseif (is_month()) : ?>
                            <?php printf(__('Monthly Archives : %s', 'CSS2645'), '<small>' . get_the_date(_x('F Y', 'monthly archives date format', 'CSS2645')) . '</small>'); ?>
                        <?php elseif (is_year()) : ?>
                            <?php printf(__('Yearly Archives : %s', 'CSS2645'), '<small>' . get_the_date(_x('Y', 'yearly archives date format', 'CSS2645')) . '</small>'); ?>
                        <?php else : ?>
                            <?php _e('Blog Archives', 'CSS2645'); ?>
                        <?php endif; ?></span>
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
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php motorino_truncate_posts(55, 'Read More'); ?></p>
                        <?php
                    endwhile;
                endif;
                ?>
                <?php wp_pagenavi(); ?>
            </div>
        </div>
    </div>
</div>

<!--Content End Here-->
<?php get_footer(); ?>






