<?php get_header(); ?>
<!--Content Start Here-->
<div id="content">
<?php get_template_part( banner, slider ); ?>
	<div class="feature-article">
		<div class="page">
		<?php
		$posts = of_get_option('post_select');
		//print_r($posts);
		foreach ($posts as $key => $val):
		if ($val == 1) {
			?>
			<div class="flag">
				<span class="article"><?php $category = get_the_category($key);
				echo $category[0]->name; ?> </span>

				<h1>
				<?php the_title(); ?>
					<br /> <span><?php echo of_get_option('full_detail_story'); ?><i>&nbsp;</i>
					</span>
				</h1>
				<a href="<?php the_permalink(); ?>" class="read-more">read <br />
					more</a>
					<?php echo straight_get_post_thumb(get_the_ID(), $url, 1068, 356); ?>
			</div>
			<?php
		}
		endforeach;
		?>
		</div>
	</div>


	<?php
	$page_about = of_get_option('page_about');
	$pagedata = get_post($page_about, $output, $filter);
	//print_r($pagedata);
	?>
	<div class="slogan">
		<div class="page clearfix">
			<div class="slogan-left">
				<span><?php echo  get_field('words_to_describe', $page_about);//str_replace('\r','<br />',get_field('words_to_describe', $page_about)); ?>
					<!-- <i><?php echo get_the_title($page_about); ?> </i>  --> </span>
			</div>
			<div class="slogan-right ">
				<div class="flexslider">
					<ul class="slides">
					<?php echo do_shortcode(get_field('home_page_slides', $page_about));
					//do_shortcode($pagedata->post_content); ?>
					</ul>

				</div>
			</div>
		</div>
		<div class="slogen-bg">&nbsp;</div>
	</div>

	<div class="gallary-section ">
		<div class="page ">
			<div class="wrap-gallary clearfix">
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
					query_posts(array('post_type' => 'post', 'cat' => $classes, 'posts_per_page' => 3, 'paged' => $paged, 'order' => 'ASC'));
					if (have_posts()):while (have_posts()):the_post();
					?>
				<div class="gallary">
					<div class="gallary-img">
						<a href="<?php the_permalink(); ?>" class="gallary-icon">&nbsp;</a>
						<?php echo straight_get_post_thumb(get_the_ID(), $url, 357, 285); ?>
					</div>
					<div class="gallary-txt">
						<h4>
						<?php the_title(); ?>
						</h4>
						<p>
						<?php motorino_truncate_posts(30, 'Read More'); ?>
						</p>
					</div>
				</div>
				<?php
				endwhile;
				endif;
				wp_reset_query();
				?>
				<?php
				}
			}
			?>
			</div>
		</div>
	</div>

	<?php get_template_part('help'); ?>

	<?php get_footer('widget'); ?>

</div>
<!--Content End Here-->
	<?php get_footer(); ?>