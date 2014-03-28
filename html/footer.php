<!--Footer Section Starts Here-->

			<div id="footer">
				<!--upper-footer Starts Here-->
				<div class="upper-footer">
					<div class="main clearfix">
						<div class="footer-menu">
							<?php dynamic_sidebar('Footer Menu1');?>
							</div>
							<div class="footer-menu">
								<?php dynamic_sidebar('Footer Menu2');?>
								</div>
							<div class="footer-menu"><?php dynamic_sidebar('Footer Menu3');?></div>
						    <div class="footer-menu">
						     <?php dynamic_sidebar('Footer Menu4');?></div>
							<div class="footer-menu"><?php dynamic_sidebar('Footer Menu5');?></div>
							<div class="footer-menu"><?php dynamic_sidebar('Footer Menu6');?></div>
						<!--  
						 
							<h5>About Us</h5>
							<ul>
								<li>
									<a href="#">services</a>
								</li>
								<li>
									<a href="#">news</a>
								</li>
								<li>
									<a href="#">film with us</a>
								</li>
							</ul> 
						-->

						<!--<div class="footer-menu">
							<h5>Expertise</h5>

						</div>

						<div class="footer-menu">
							<h5>aviation consulting</h5>

						</div>

						<div class="footer-menu">
							<h5>LOCATIONS</h5>
							<ul>
								<li>
									<a href="#">Van Nuys Airport West</a>
								</li>
								<li>
									<a href="#">Van Nuys Airport East</a>
								</li>
								<li>
									<a href="#">ong beach airport</a>
								</li>
							</ul>
						</div>

						<div class="footer-menu">
							<h5>Available Space</h5>
							<ul>
								<li>
									<a href="#">Van Nuys Airport West</a>
								</li>
								<li>
									<a href="#">Van Nuys Airport East</a>
								</li>
								<li>
									<a href="#">ong beach airport</a>
								</li>
							</ul>
						</div>

						<div class="footer-menu  contact-us">
							<h5>contact</h5>
							<ul>

								<li>
									<a href="mailto:aerolease@aeroplex.net">Email: <strong> aerolease@aeroplex.net</strong></a>
								</li>
								<li>
									<a href="tel:05629812659">Phone: (562)981-2659</a>
								</li>
							</ul>
						</div> -->

					</div>
				</div>
				<!--upper-footer ends Here-->
				<div class="lower-footer">
					<div class="main clearfix">
						<p>
							<strong><?php echo of_get_option('aeroplex_text');?></strong>

							<span><?php echo of_get_option('copyright_text');?></span>
						</p>
						<span class="company-info"><?php echo of_get_option('deign_text');?></span>
					</div>
				</div>
			</div>
			<!--Footer Section Ends Here-->
		</div>
		<?php wp_footer();?>
		<!--Wrapper Ends Here-->
	</body>
</html>