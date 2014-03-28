<?php 
/*   Template Name: Loaction Template */

get_header();
the_post();?>
			<!--Content Area Starts Here-->
			<div id="content">

				<div class="main">
					<div class="breadcrum-list clearfix">
						<ul>

							<li>
								Contact us
							</li>
						</ul>
					</div>
					<div class="content-bg clearfix location-container">
						<div class="map">
							<h1>Locations</h1>
							<div class="view-map">
								<?php echo get_the_content();?>
							</div>
						</div>
						<div class="sidebar conatct-listing">
							<h1>Contact us</h1>
							<div class="map-contact">
								<?php //the_content();?>
								<!-- <h2>Aeroplex/Aerolease Group</h2>
								<address>
									3333 East Spring Street, Suite #204
									<br/>
									Long Beach, CA 90806
								</address> -->
								<a class="mailto" href="mailto:aerolease@aeroplex.net">aerolease@aeroplex.net</a>
								<div class="call-us">
								<a href="tel:05629812659">p(562) 981-2659</a> <a href="tel:05624265500">f(562) 426-5500</a>
								</div>
								<a href="#" class="learn-more">View Details</a>
							</div>
							<div class="map-contact">
								<h2>Aeroplex/Aerolease Group</h2>
								<address>
									3333 East Spring Street, Suite #204
									<br/>
									Long Beach, CA 90806
								</address>
								<a class="mailto" href="mailto:aerolease@aeroplex.net">aerolease@aeroplex.net</a>
							<div class="call-us">
								<a href="tel:05629812659">p(562) 981-2659</a> <a href="tel:05624265500">f(562) 426-5500</a>
								</div>
								<a href="#" class="learn-more">View Details</a>
							</div>
							<div class="map-contact">
								<h2>Aeroplex/Aerolease Group</h2>
								<address>
									3333 East Spring Street, Suite #204
									<br/>
									Long Beach, CA 90806
								</address>
								<a class="mailto" href="mailto:aerolease@aeroplex.net">aerolease@aeroplex.net</a>
								<div class="call-us">
								<a href="tel:05629812659">p(562) 981-2659 </a> <a href="tel:05624265500">f(562) 426-5500</a>
								</div>
								<a href="#" class="learn-more">View Details</a>
							</div>
							<!-- <h2>Email</h2>
							<a class="mailto" href="mailto:aerolease@aeroplex.net">aerolease@aeroplex.net</a>
							<h2>Phone</h2>
							<a href="tel:05629812659">(562) 981-2659 | (562) 426-5500</a>
							<h2>Fax</h2>
							<a href="tel:05624268236">(562) 426-8236 </a> -->
						</div>
					</div>
				</div>

			</div>
			<!--Content Area Ends Here-->
			<?php get_footer();?>