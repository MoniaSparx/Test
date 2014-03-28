<div class="slider-wrapper">
        <div class="flexslider">
            <ul class="slides">
                <?php
                query_posts('post_type=banner_slider&orderby=menu_order');
                if (have_posts()): while (have_posts()): the_post();
                        ?>
                        <li>
                            <div class="caption-text">
                                <span class="big"><?php the_field('tagline'); ?></span><span class="small"><?php the_field('sub_tagline'); ?></span>
                            </div>
                            <?php echo straight_get_post_thumb(get_the_ID(), $url, 1399, 585); ?>            </li> 
                        <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>
            </ul>

        </div>
    </div>