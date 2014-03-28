<?php get_header(); ?>
<!--content Section start here-->
<div class="content">
    <div class="page">


        <div class="content-area clearfix">
            <div class="content-data  clearfix">
                <article class="kupon-blog">
                    <h1><?php the_title(); ?></h1>
                    <a href="<?php the_permalink();?>" class="add-image"><?php echo kupon_get_post_thumb($post_id, $url = false, $width = 300, $height = 250) ?></a>
                    <?php the_post(); the_content(); ?>
                </article>
            </div>
             <?php get_sidebar(); ?>
    </div>
</div>
<!--content Section end here-->
<?php get_footer(); ?>