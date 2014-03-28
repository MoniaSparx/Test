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