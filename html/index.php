<?php get_header();?> 
			<!--Content Area Starts Here-->
			<div id="content">

				<div class="main">
					<!--slider Starts Here-->
					<div class="slider">
						<div class="flexslider">
							<ul class="slides">
								<?php query_posts('post_type=slider&order=ASC&posts_per_page=-1');
								if(have_posts()) : while(have_posts()): the_post();
								 $thumb = rem_get_post_thumb(get_the_ID());								
									
									?>
										 
								<li>
									<div class="slider-data clearfix">
										<div class="slider-image">
										<?php $img = get_field('mobile_banner_image');?>
										<img src="<?php bloginfo('template_url') ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;w=703&amp;h=414" alt="" title="" class="desktop-view"/>
											<img src="<?php bloginfo('template_url') ?>/timthumb.php?src=<?php echo $img; ?>&amp;w=476&amp;h=284" alt="" title="" class="mobile-view"/>
										</div>
										<div class="slide-content">
											<h1><?php the_title();?></h1>
											<?php the_excerpt();?>
											<a href="<?php the_permalink();?>" class="learn-more">Learn More</a>
										</div>

									</div>
								</li>
								<?php endwhile; endif;wp_reset_query();?>
							</ul>
						</div>
					</div>
					<!--slider ends Here-->
					<!--sub-content starts Here-->
					<div class="sub-content clearfix">
                       <?php query_posts('post_type=testimonial&posts_per_page=1');
								if(have_posts()) : while(have_posts()): the_post();?>
						<div class="block">
							<blockquote>
								<?php the_content();?>

								<span class="overview-details"><?php the_field('client_name');?></span>
							</blockquote>
							<i></i>
						</div>
						<?php endwhile; endif;wp_reset_query();?>


                           <?php query_posts('post_type=page&page_id=17');
								if(have_posts()) : while(have_posts()): the_post();?>
						<div class="sub-area">
							<h2>Serving today’s dynamic business
							aviation needs:</h2>
							<?php the_field('intro_text');?>
							<?php //the_content();?>
							<a href="<?php the_permalink();?>" class="learn-more">Learn More</a>
						</div>
						<?php endwhile; endif;wp_reset_query();?>
						
						
						
                           <?php //query_posts('post_type=page&page_id=17');
								//if(have_posts()) : while(have_posts()): the_post();?>
						<div class="available">
							<h2>Now Available</h2>
							<div class="available-container">
								
								<ul>
									<li>
										<a href="#"> Private corporate hangar </a>
									</li>
									<li>
										<a href="#">Community hangar space</a>
									</li>
									<li>
										<a href="#">50’ x 100’ box hangar</a>
									</li>
									<li>
										<a href="#">60’ x 60’ box hangar </a>
									</li>

								</ul>
								<a href="#" class="learn-more">Learn More</a>
							</div>
						</div>
					</div>
					<!--sub-content ends Here-->
				</div>

				<!--ssocial-news starts Here-->
				<div class="social-news">
					<div class="main">
						<div class="social-activity clearfix">
							<div class="facebook-like">

								<h2>Facebook</h2>
								<div class="mobile-box">
									<?php dynamic_sidebar('Sidebar');?>
									<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=240793632769475";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
									<div class="fb-like-box" data-href="http://www.facebook.com/FacebookDevelopers" data-width="320" data-height="319" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div> -->									
									<!-- <img src="<?php bloginfo('template_url');?>/assets/images/facebook.png" alt="" title="" /> -->
								</div>
							</div>
							
							<?php query_posts('cat=-1&posts_per_page=1');
								if(have_posts()) : while(have_posts()): the_post();?>
							<div class="news">
								<h2>News</h2>
								<div class="mobile-box">
									<h3><?php the_title();?></h3>
									<span class="overview-details"><?php the_date('F d, Y');?></span>
									<?php the_excerpt();?>
									<a href="<?php the_permalink();?>" class="learn-more">Learn More</a>
								</div>
							</div>
							<?php endwhile; endif;wp_reset_query();?>
							<div class="twitter-like">
								<h2>Twitter</h2>
								<div class="mobile-box">
									<?php dynamic_sidebar('Twitter Sidebar');?>
									<!-- <img src="<?php bloginfo('template_url');?>/assets/images/twitter.png" alt="" title="" /> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--ssocial-news ends Here-->

			</div>
			<!--Content Area Ends Here-->
			<?php get_footer();?>