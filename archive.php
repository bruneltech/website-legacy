<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pyxlwuff
 */

get_header();
?>

<main id="primary" class="site-main">
	<!--<h1>owo archive</h1>-->
	<?php if (have_posts()) : ?>

		<header class="page-header">
			<?php
			//the_archive_title('<h1 class="page-title">', '</h1>');
			//the_archive_description('<div class="archive-description">', '</div>');
			?>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		//while (have_posts()) :
			//the_post();

		?>
			<div class="title-thing">
				<div class="title-container">
					<?php
						the_archive_title('<h1 class="title-txt">', '</h1>');
					?>
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
			/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			//get_template_part('template-parts/content', get_post_type());

		//endwhile;

		//the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
