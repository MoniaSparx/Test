<?php 
/*
  Template Name: About News Template
 */
get_header();
the_post();
?>
			<!--Content Area Starts Here-->
			<div id="content">
				<div class="main">
					<!--main-content Starts Here-->
					<div class="breadcrum-list clearfix">
						<ul>
							<li>
								<?php 
								if(function_exists('bcn_display'))
									{
										bcn_display();
									} ?>
							</li>
						</ul>
					</div>

					<div class="content-bg clearfix">
						<div class="main-content">
							<h1><?php the_title();?></h1>

							<div class="content-description">
								
								<?php $thumb = rem_get_post_thumb(get_the_ID());	?>
								<div class="aboutus-banner alignright">
									<img src="<?php bloginfo('template_url') ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;w=255&amp;h=254"" alt="" title="" />
									<i></i>
								</div>
								<div class="aboutus-desc">
								 <?php the_content();?>
								</div>
							</div>
						</div>
						<!--main-content ends Here-->
						<!--sidebar Starts Here-->
						<div class="sidebar">
							<h1>Recent News</h1>
							<ul>
								<?php query_posts('cat=-1&post_per_page=-1');
								      if(have_posts()) : while(have_posts()): the_post();  ?>
								    
								<li>
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
								</li>
									<?php endwhile; endif;wp_reset_query();?>
								
							</ul>
							<a class="learn-more" href="<?php echo get_catergory_link('3');?>">More</a>
						</div>
						<!--sidebar ends Here-->
					</div>
				</div>

			</div>
			<!--Content Area Ends Here-->
			<?php get_footer();?>