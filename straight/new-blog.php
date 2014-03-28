<?php
/*
  Template Name: new blog
 */
 get_header();
?>

<!--Content Start Here -->
<div id="content" class="clearfix">
    <?php get_template_part(banner, slider); ?> 
    <div class="gallary-section sub-gallary">
        <div class="page clearfix">
            <div class="wrap-gallary clearfix new-gall">
                <?php
                $categories = of_get_option('featured_category');
                // print_r($categories);
                foreach ($categories as $key => $value) {
                    if ($value == 1) {
                        $classes = $key;
                        $cat_name = get_cat_name($classes);
                        ?>
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts(array('post_type' => 'post', 'cat' => $classes, 'posts_per_page' => 6, 'paged' => $paged, 'order' => 'ASC'));
                        if (have_posts()):while (have_posts()):the_post();
                                ?>
                                <div class="gallary">

                                    <div class="gallary-img">
                                        <?php 
                                        $color = get_field('select_color');
                                        
                                        $class="";
                                        $nextClass = "";
                                        if( $color == 'green' ){
                                            $class = "article-green";
                                            $nextClass = "";
                                        }
                                        if( $color == 'blue' ){
                                            $class = "";
                                            $nextClass = "gallary-txt-blue";
                                        }
                                        ?>
                                        <span class="article <?php echo $class;?>">
                                            <?php
                                            $category = get_the_category($value);
                                            echo $category[0]->name;
                                            ?>
                                        </span>
                                        <?php echo straight_get_post_thumb(get_the_ID(), $url, 353, 285); ?>
                                    </div>
                                    
                                    
                                    <div class="gallary-txt <?php echo $nextClass;?>">
                                        
                                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <p>
                                            <?php motorino_truncate_posts(10, 'Read More'); ?>
                                        </p>
                                        <small><?php the_author(); ?>    / <?php comments_number(); ?>  /  <?php the_date(); ?></small>
                                    </div>

                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?> 
                        <?php
                    }
                }
                ?>

            </div>
            <?
            //echo "hgddhdgha";
            wp_pagenavi();
            wp_reset_query();
            ?>

            <!--							<div class="gallary">
                                                                            <div class="gallary-img">
                                                                                    <span class="article">featured article</span>
                                                                                    <img src="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/assets/images/gallary-img2.jpg"  alt="" title="" />
                                                                            </div>
                                                                            <div class="gallary-txt gallary-txt-blue">
                                                                                    <i class="blue-icon"></i>
                                                                                    <h5>harrassment &amp; bullying at your
                                                                                    <br />
                                                                                    high school</h5>
                                                                                    <p>
                                                                                            When it comes to parallax scrolling, the line that separates good and
                                                                                            bad choices is pretty thin. A while back parallax was being used to
                                                                                            deliver an explosion of elements floating around the screen.
                                                                                    </p>
                                                                                    <small>by John Doe  /  4 comments  /  Date</small>
                                                                            </div>
                                                                    </div>
            
                                                                    <div class="gallary">
                                                                            <div class="gallary-img">
                                                                                    <span class="article article-green">featured article</span>
                                                                                    <img src="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/assets/images/gallary-img1.jpg"  alt="" title="" />
                                                                            </div>
                                                                            <div class="gallary-txt">
                                                                                    <h5>harrassment &amp; bullying at your
                                                                                    <br />
                                                                                    high school</h5>
                                                                                    <p>
                                                                                            When it comes to parallax scrolling, the line that separates good and
                                                                                            bad choices is pretty thin. A while back parallax was being used to
                                                                                            deliver an explosion of elements floating around the screen.
                                                                                    </p>
                                                                                    <small>by John Doe  /  4 comments  /  Date</small>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="wrap-gallary clearfix">
                                                                    <div class="gallary">
            
                                                                            <div class="gallary-img">
                                                                                    <span class="article">taken action</span>
                                                                                    <img src="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/assets/images/gallary-img2.jpg"  alt="" title="" />
                                                                            </div>
                                                                            <div class="gallary-txt gallary-txt-blue">
                                                                                    <i class="blue-icon"></i>
                                                                                    <h5>harrassment &amp; bullying at your
                                                                                    <br />
                                                                                    high school</h5>
                                                                                    <p>
                                                                                            When it comes to parallax scrolling, the line that separates good and
                                                                                            bad choices is pretty thin. A while back parallax was being used to
                                                                                            deliver an explosion of elements floating around the screen.
                                                                                    </p>
                                                                                    <small>by John Doe  /  4 comments  /  Date</small>
                                                                            </div>
            
                                                                    </div>
            
                                                                    <div class="gallary">
                                                                            <div class="gallary-img">
                                                                                    <span class="article article-green">featured article</span>
                                                                                    <img src="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/assets/images/gallary-img1.jpg"  alt="" title="" />
                                                                            </div>
                                                                            <div class="gallary-txt">
                                                                                    <h5>harrassment &amp; bullying at your
                                                                                    <br />
                                                                                    high school</h5>
                                                                                    <p>
                                                                                            When it comes to parallax scrolling, the line that separates good and
                                                                                            bad choices is pretty thin. A while back parallax was being used to
                                                                                            deliver an explosion of elements floating around the screen.
                                                                                    </p>
                                                                                    <small>by John Doe  /  4 comments  /  Date</small>
                                                                            </div>
                                                                    </div>
            
                                                                    <div class="gallary">
                                                                            <div class="gallary-img">
                                                                                    <span class="article">featured article</span>
                                                                                    <img src="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/assets/images/gallary-img2.jpg"  alt="" title="" />
                                                                            </div>
                                                                            <div class="gallary-txt gallary-txt-blue">
                                                                                    <i class="blue-icon"></i>
                                                                                    <h5>harrassment &amp; bullying at your
                                                                                    <br />
                                                                                    high school</h5>
                                                                                    <p>
                                                                                            When it comes to parallax scrolling, the line that separates good and
                                                                                            bad choices is pretty thin. A while back parallax was being used to
                                                                                            deliver an explosion of elements floating around the screen.
                                                                                    </p>
                                                                                    <small>by John Doe  /  4 comments  /  Date</small>
                                                                            </div>
                                                                    </div>
                                                            </div>
            
                                                    </div>
                                            </div>-->


            <!--    <div class="pager">
                    <div class="page">
                        <ul class="pagination1 clearfix">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#">...</a>
                            </li>
                            <li>
                                <a href="#">19</a>
                            </li>
                            <li>
                                <a href="#">20</a>
                            </li>
                        </ul>
                        <ul class="next-pev clearfix">
                            <li class="prev">
                                <a href="<?php previous_post(); ?>">prev</a>
                            </li>
                            <li class="next">
                                <a href="<?php next_post(); ?>">next</a>
                            </li>
                        </ul>
                    </div>
                </div>-->
        </div>
            <?php get_template_part(help); ?> 
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
        

        <!--Content End Here-->
        <?php get_footer(); ?>