<?php 
  /*Template Name: Avaliable Template*/

get_header();?>
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
					<!--banner container starts Here-->
					<div class="banner-container">
				<!--banner Starts Here-->
						<div class="banner">
							<img src="assets/images/available-banner.jpg" alt="" title="" />
							<i class="left-shadow"></i>
							<i class="right-shadow"></i>
						</div>
						<!--banner ends Here-->

						<div class="banner-description">
							<h1>Aerolease West</h1>
							<h4>Van Nuys Airport (VNY)</h4>
							<ul>
								<li>
									<a href="#">Premier <strong>FBO</strong> services &amp; facilities</a>
								</li>
								<li>
									<a href="#">xclusive hangar, office &amp; shop space</a>
								</li>
								<li>
									<a href="#">Private, safe &amp; secure operations</a>
								</li>
								<li>
									<a href="#">Personal aircraft t-hangars</a>
								</li>
								<li>
									<a href="#"> Unique &amp; flexible lease options</a>
								</li>
								<li>
									<a href="#">Airport consulting &amp; management services</a>
								</li>
							</ul>
						</div>
					<!--availability starts Here-->
					<div class="availability clearfix">
						<div class="sidebar overview">
							<a class="learn-more" href="#">Overview</a>
							<a class="learn-more" href="#">Inquire now</a>
							<div class="area-location">

								<h2>area</h2>
								<ul>
									<li>
										<a href="#">10.2-acre gross site area </a>
									</li>
									<li>
										<a href="#">165,083-square-foot building area</a>
									</li>
								</ul>
								<h2>Location</h2>
								<ul>
									<li>
										<a href="#">West side of Van Nuys Airport (VNY)</a>
									</li>
									<li>
										<a href="#">Between Hayvenhurst Ave. &amp; Hayvenhurst Place</a>
									</li>
									<li>
										<a href="#">Close to downtown Los Angeles</a>
									</li>
								</ul>
								<h2>Hangars</h2>
								<ul>
									<li>
										<a href="#">40 T-hangars for private aircraft (46’, 54’ and 57’)</a>
									</li>
									<li>
										<a href="#">8 corporate aircraft hangars for exclusive or
										multiple aircraft fleet</a>
									</li>
									<li>
										<a href="#">Pilot lounge</a>
									</li>
									<li>
										<a href="#">Internal and external office areas</a>
									</li>
									<li>
										<a href="#">Complete FBO services </a>
									</li>

								</ul>
							</div>
						</div>
						<!--space section starts Here-->
						<div class="space">
							<h1>available space</h1>
							<?php query_posts('post_type=available_space&post_per_page=-1');
							      if(have_post()): while(have_post()) : the_post();?>
							<div class="available-description clearfix">
								<div class="space-image">
									<img src="assets/images/space1.png" alt="" title="" />
								</div>
								<div class="space-description">
									<h5>54-57' T-Hangar</h5>
									<p>
										This recently remodeled T-Hangar can fit an aircraft with a 54-57' wingspan and is approximately 48' deep. In addition to the T-Hangar, you have access to an executive pilot's lounge equipped with restrooms, a kitchen, and conference area.
									</p>
									<a href="#">Inquire Now</a>
								</div>
							</div>
							<?php endwhile; wp_reset_query(); endif;?>

							<!-- <div class="available-description clearfix">
								<div class="space-image">
									<img src="assets/images/space2.png" alt="" title="" />
								</div>
								<div class="space-description">
									<h5>46' T-Hangar</h5>
									<p>
										This recently remodeled T-Hangar can fit an aircraft with a 54-57' wingspan and is approximately 48' deep. In addition to the T-Hangar, you have access to an executive pilot's lounge equipped with restrooms, a kitchen, and conference area.
									</p>
									<a href="#">Inquire Now</a>
								</div>
							</div> -->

							<!-- <div class="available-description clearfix">
								<div class="space-image">
									<img src="assets/images/space3.png" alt="" title="" />
								</div>
								<div class="space-description">
									<h5>40' T-Hangar</h5>
									<p>
										This recently remodeled T-Hangar can fit an aircraft with a 54-57' wingspan and is approximately 48' deep. In addition to the T-Hangar, you have access to an executive pilot's lounge equipped with restrooms, a kitchen, and conference area.
									</p>
									<a href="#">Inquire Now</a>
								</div>
							</div> -->

						</div>
						<!--space section ends Here-->
					</div>
					<!--availability ends Here-->
					</div>
						<!--banner container ends Here-->
				</div>

			</div>
			<!--Content Area Ends Here-->
			<?php get_footer();?>