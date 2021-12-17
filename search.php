<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Pyxlwuff
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<!-- <h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				//printf(esc_html__('Search Results for: %s', 'pyxlwuff'), '<span>' . get_search_query() . '</span>');
				?>
			</h1> -->
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		//while ( have_posts() ) :
		//the_post();

		/**
		 * Run the loop for the search to output the results.
		 * If you want to overload this in a child theme then include a file
		 * called content-search.php and that will be used instead.
		 */
		//get_template_part( 'template-parts/content', 'search' );

		//endwhile;
		?>
		<div class="title-thing">
			<div class="title-container">
				<?php
				//the_archive_title('<h1 class="title-txt">', '</h1>');

				?>
				<h1 class="title-txt"><?php printf(esc_html__('Search Results for: %s', 'pyxlwuff'), '<span>' . get_search_query() . '</span>');?>
			</div>
		</div>

		<div class="recent-post-container">

			<div class="recent-posts">
				<?php
				// Display the title, featured image and category of the posts
				while (have_posts()) : the_post();
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

	<?php

	//the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
