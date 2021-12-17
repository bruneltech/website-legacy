<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pyxlwuff
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	if (have_posts()) :

		if (is_home() && !is_front_page()) :
	?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
		<?php
		endif;

		// Get the 10 most recent posts, excluding sticky posts and posts with the 'Projects' category
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 10,
			'orderby' => 'date',
			'order' => 'DESC',
			'post__not_in' => get_option('sticky_posts')
			//'category__not_in' => array(get_cat_ID('Projects'))
		);

		$recent_posts = new WP_Query($args);


		// $recent_posts = new WP_Query(array(
		// 	'post_type' => 'post',
		// 	'posts_per_page' => 10,
		// 	'orderby' => 'date',
		// 	'order' => 'DESC',
		// 	'post__not_in' => get_option("sticky_posts")
		// ));

		$featured_post = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 1,
			'orderby' => 'rand',
			'post__in' => get_option("sticky_posts")
		));

		$categoryName = "";

		?>
		
		<!--Opening Header -->

		<div class="mainContent">
          <div class="imageContainer">
            <div class="textContainer">
              <h1 class="title">Enabling like minded people to learn and collaborate on tech</h1>
			  <!-- Click #about and have it auto scroll to featured-post-container -->
              <a href="#about" class="scrollDown">
			  	<i class="fas fa-angle-double-down"></i>
              </a>
            </div>
          </div>
        </div>

		<script>
			// When clicking on the scroll down arrow, scroll to the featured-post-container
			$(".scrollDown").click(function() {
				$('html, body').animate({
					scrollTop: $("#featured-post-container").offset().top
				}, 1000);
			});
		</script>

		<br><br>

		<!-- Featured Post -->

		<a class="read-more-href" href="<?php the_permalink()?>">
			<div id="featured-post-container" class="featured-post-container">
				<div class="featured-post">
					<?php if ($featured_post->have_posts()) : ?>
						<?php while ($featured_post->have_posts()) : $featured_post->the_post(); ?>
							<div class="featured-post-content">
								<div class="featured-post-meta">
									<div class="featured-post-meta-content">
										<!-- Category of Featured Post -->
										<?php
										$categories = get_the_category();
										if (!empty($categories)) {
											$categoryName = $categories[0]->name;
										}else{
											$categoryName = "Uncategorized";
										}
										?>
										<p class="featured-post-date">Featured Post</p>
										<h2 class="featured-post-title"><?php the_title(); ?></h2>
										<h3 class="read-more-txt">Read More</h3>
									</div>
								</div>

								<?php if (has_post_thumbnail()) : ?>
									<div class="featured-post-img" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
										<?php //the_post_thumbnail( 'pyxlwuff-featured-image' ); 
										?>
									</div>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</a>

		<div class="title-thing">
			<div class="title-container">
				<h1 class="title-txt">Recent Posts</h1>
			</div>
		</div>

		<div class="recent-post-container">

			<div class="recent-posts">
				<?php
				// Display the title, featured image and category of the posts
				while ($recent_posts->have_posts()) : $recent_posts->the_post();
				?>
					<a style="text-decoration: none;" href="<?php the_permalink(); ?>">
						<div class="recent-post" id="post-<?php the_ID(); ?>">
							<header class="entry-header">
								<?php if (has_post_thumbnail()) : ?>
									<div class="entry-thumbnail" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
										<?php //the_post_thumbnail( 'pyxlwuff-featured-image' ); 
										?>
									</div>
								<?php endif; ?>

								<div class="entry-meta">
									<div class="publish-date">
										<time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
											<?php echo esc_html(get_the_date()); ?>
										</time>
									</div>

									<div class="entry-title">
										<h2 class="entry-title"><?php the_title(); ?></h2>
									</div>

									<div class="entry-summary">
										<!-- <p class="entry-category"><?php //the_category(); 
																		?><p> -->
										<!-- Get post category -->
										<?php
										$category = get_the_category();
										$category_id = $category[0]->cat_ID;
										$category_name = $category[0]->cat_name;
										?>
										<div class="entry-summary-content">
											<p class="entry-category"><?php echo $category_name; ?></p>
											<i class="arrowo fa fa-arrow-right"></i>
										</div>
									</div>
								</div>
							</header>
						</div>
					</a>
				<?php
				endwhile;
				?>

				<!-- <a style="text-decoration: none" href="#">
					<div class="recent-post" id="post-seemore">
						<header class="entry-header">
							<div class="entry-meta">
								<div class="seemore-cont">
									<h2 class="seemore-txt">See more -></h2>
								</div>
							</div>
						</header>
					</div>
				</a> -->

			</div>
		</div>

		<div class="title-thing">
			<div class="title-container">
				<h1 class="title-txt">Society News</h1>
			</div>
		</div>

		<div class="recent-post-container">

			<div class="recent-posts">
				<?php
				// Display the title, featured image and category of the posts in the Society News Category
				$args = array(
					'category_name' => 'society-news',
					'posts_per_page' => 3,
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$recent_posts = new WP_Query($args);

				while ($recent_posts->have_posts()) : $recent_posts->the_post();
				?>
					<a style="text-decoration: none;" href="<?php the_permalink(); ?>">
						<div class="recent-post" id="post-<?php the_ID(); ?>">
							<header class="entry-header">
								<?php if (has_post_thumbnail()) : ?>
									<div class="entry-thumbnail" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
										<?php //the_post_thumbnail( 'pyxlwuff-featured-image' ); 
										?>
									</div>
								<?php endif; ?>

								<div class="entry-meta">
									<div class="publish-date">
										<time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
											<?php echo esc_html(get_the_date()); ?>
										</time>
									</div>

									<div class="entry-title">
										<h2 class="entry-title"><?php the_title(); ?></h2>
									</div>

									<div class="entry-summary">
										<!-- <p class="entry-category"><?php //the_category(); 
																		?><p> -->
										<!-- Get post category -->
										<?php
										$category = get_the_category();
										$category_id = $category[0]->cat_ID;
										$category_name = $category[0]->cat_name;
										?>
										<div class="entry-summary-content">
											<p class="entry-category"><?php //echo $category_name;
											echo "";?></p>
											<i class="arrowo fa fa-arrow-right"></i>
										</div>
									</div>
								</div>
							</header>
						</div>
					</a>
				<?php
				endwhile;
				?>
			</div>
		</div>

		<div class="title-thing">
			<div class="title-container">
				<h1 class="title-txt">Opinion</h1>
			</div>
		</div>

		<div class="recent-post-container">

			<div class="recent-posts">
				<?php
				// Display the title, featured image and category of the posts in the Society News Category
				$args = array(
					'category_name' => 'opinion',
					'posts_per_page' => 3,
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$recent_posts = new WP_Query($args);

				while ($recent_posts->have_posts()) : $recent_posts->the_post();
				?>
					<a style="text-decoration: none;" href="<?php the_permalink(); ?>">
						<div class="recent-post" id="post-<?php the_ID(); ?>">
							<header class="entry-header">
								<?php if (has_post_thumbnail()) : ?>
									<div class="entry-thumbnail" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
										<?php //the_post_thumbnail( 'pyxlwuff-featured-image' ); 
										?>
									</div>
								<?php endif; ?>

								<div class="entry-meta">
									<div class="publish-date">
										<time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
											<?php echo esc_html(get_the_date()); ?>
										</time>
									</div>

									<div class="entry-title">
										<h2 class="entry-title"><?php the_title(); ?></h2>
									</div>

									<div class="entry-summary">
										<!-- <p class="entry-category"><?php //the_category(); 
																		?><p> -->
										<!-- Get post category -->
										<?php
										$category = get_the_category();
										$category_id = $category[0]->cat_ID;
										$category_name = $category[0]->cat_name;
										?>
										<div class="entry-summary-content">
											<p class="entry-category"><?php //echo $category_name;
											echo "";?></p>
											<i class="arrowo fa fa-arrow-right"></i>
										</div>
									</div>
								</div>
							</header>
						</div>
					</a>
				<?php
				endwhile;
				?>
			</div>
		</div>
	<?php

	// /* Start the Loop */
	// while ( have_posts() ) :
	// 	// Create a grid of posts with the featured image, title and author.

	// 	the_post();


	// endwhile;

	// the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
