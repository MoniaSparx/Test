<?php 
/*   Template Name: About Template*/
get_header();
the_post();?>
			<!--Content Area Starts Here-->
			<div id="content">
				<div class="main">
					<div class="breadcrum-list clearfix">
						<ul>

							<li>
								<?php 
								if(function_exists('bcn_display'))
									{
										bcn_display();
									}?>
							</li>
						</ul>
					</div>
					<div class="content-bg clearfix">
					
					<div class="side-overview">
						<h1><?php the_title();?></h1>
						<div class="side-description">
						<?php the_content();?>
						</div>
						<div class="facilities">
					    		<?php 
								      $aboutpage = of_get_option('about_subpage');
								?>							
								<ul>
									 <?php foreach( $aboutpage as $key=>$value ) {
									 	if($value == 1)
										{ 
											$featured[]=$key;
											} } 
                            
											query_posts(array('post_type' => 'page', 'post__in' => $featured, 'orderby' => 'menu_order','order'=> 'ASC','posts_per_page' => -1));
                                           if (have_posts()) : while (have_posts()) : the_post();?>
														<li>
										<a href="<?php the_permalink();?>"> <?php the_title(); ?></a>
									</li>
							
									<?php endwhile; wp_reset_query(); endif;  ?>
									</ul>									
						</div>
					</div>					
					<div class="side-banner clearfix">						
						<?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>
							<?php if( $attachments->exist() ) : ?>
							    <?php while( $attachments->get() ) : ?>
							    <div class="aboutus-banner alignleft">
							    	<img src="<?php bloginfo('template_url') ?>/timthumb.php?src=<?php echo $attachments->src( 'full' ); ?>&amp;w=255&amp;h=254" alt="" title="" />
							    <i></i>
						</div>
							   <?php endwhile; ?>							  
							<?php endif; ?>
						</div>
					
				</div>
</div>
			</div>
			<!--Content Area Ends Here-->
					<?php get_footer();?>