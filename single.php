<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pyxlwuff
 */

?>


<head>
<?php
	get_header();
	
?>

</head>

<main id="primary" class="site-main">
	<?php
	// if(have_posts()){
	// 	while ( have_posts() ) :
	// 		the_post();
	// 		//the_post_thumbnail();
	// 		//the_title();
	// 		//the_content();

	// 		get_template_part( 'template-parts/content', get_post_type() );

	// 	endwhile; // End of the loop.
	// }
	// 
	$post = get_post();
	setup_postdata($post);

	$authorName = get_the_author_meta('display_name');
	$thing = get_author_posts_url(get_the_author_meta('ID'));

	?>
	<!-- Set post thumbnail as div background -->
	<div class="featured-image" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)"></div>

	<div class="post-content-container">
		<?php
		$category = get_the_category();
		$category_id = $category[0]->cat_ID;
		$category_name = $category[0]->cat_name;
		$category_link = get_category_link($category_id);
		?>

		<div class="category-container">
			<a class="caturl" href="<?php echo $category_link;?>">
				<div class="post-category">
					<p class="catname"><?php echo strtoupper($category_name);?></p>
				</div>
			</a>
		</div>

		<div class="post-content-stuff">
			<!--Post metadata-->
			<div class="post-meta">
				<!--Post category with link-->

				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="author-meta">
					<div class="author-person">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author_meta('display_name'); ?></a></div>
					<div class="published-when">Published <span class="post-date"><?php echo get_the_date(); ?></span></div>
				</div>
			</div>

			<!-- Post Content-->
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>


</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
