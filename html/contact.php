<?php  
 /*
  Template Name: Contact Template
 */
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
									} ?>
							</li>
						</ul>
					</div>

					<div class="content-bg clearfix">
						<div class="sidebar conatct-location">
							<h1><?php the_title();?></h1>
							<?php echo get_field('aeroplex/aerolease_group_text');?>
							<h2>Email</h2>
							<a href="mailto:<?php echo get_field('email_text');?>" class="mailto"><?php echo get_field('email_text');?></a>
							<h2>Phone</h2>
							<a href="tel:<?php echo get_field('phone');?>"><?php echo get_field('phone');?> |  <a href="tel:<?php echo get_field('phone');?>"><?php echo get_field('phone');?></a>
							<h2>Fax</h2>
							<a href="tel:<?php echo get_field('fax');?>"><?php echo get_field('fax');?> </a>
						</div>
						<div class="contact-description">
							<h1>INQUIRE</h1>
							<div class="contact-enquiry">
								<?php the_content();?>
							</div>
							<div class="contact-form">
								<?php echo do_shortcode('[contact-form-7 id="108" title="Contact form 1"]');?>
								<!-- <form method="get" action="" name="frm1">
									<div>
										<label>Name:</label>
										<input type="text" name="name" value=""/>
									</div>
									<div>
										<label>Email:</label>
										<input type="text" name="email" value=""/>
									</div>
									<div>
										<label>Phone:</label>
										<input type="text" name="phone" value=""/>
									</div>
									<div>
										<label>Company:</label>
										<input type="text" name="company" value=""/>
									</div>
									<div>
										<label>Reason for Inquiry:</label>
										<select name="" class="reason_id">

											<option value="1">Select Reason</option>
											<option value="9">abc</option>

											<option value="2">def</option>
											<option value="3">ghi</option>
											<option value="6">jkl</option>

										</select>

									</div>
									<div>
										<label>Comments:</label>
										<textarea rows="3" cols="1"></textarea>
									</div>
									<div>
										<input type="submit" name="submit" value="submit" class="learn-more"/>
									</div>
								</form> -->
							</div>
						</div>

					</div>

				</div>
			</div>
			<!--Content Area Ends Here-->
			<?php get_footer();?>