<?php
/*
  Template Name: sub page two
 */
get_header();
?>
<!--Content Start Here -->
<div id="content">
    <?php get_template_part(banner, slider); ?> 
    <div class="instractions take-ack">
        <div class="page clearfix">
            <div class="instraction-sidebar">
                <div class="squire">
                    <span><?php the_title(); ?></span>
                </div>
                <?php dynamic_sidebar('social-count-sidebar'); ?>
            </div>
            <div class="main-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php get_template_part(help); ?> 

    <?php get_template_part(page, inner); ?> 
</div>

<!--Content End Here-->
<?php get_footer(); ?>