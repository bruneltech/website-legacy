<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pyxlwuff
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/fba0knw.css">
	</link>

	<!-- Import font-awesome-->
	<script src="https://kit.fontawesome.com/9d82e68e5b.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

	<!-- Import JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<?php if (!is_home()) : ?>
		<meta property="og:title" content="<?php the_title(); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo get_permalink(); ?>" />
		<meta property="og:image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" />
		<meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
		<meta name="theme-color" content="#3da4f2">

		<!-- Include this to make the og:image larger -->
		<meta name="twitter:card" content="summary_large_image">

	<?php endif; ?>

	<?php
	wp_head();
	?>
</head>

<?php
// Custom Logo URL
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');
$logo_url = $image[0];
?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'pyxlwuff'); ?></a>

		<div class="navBarContainer">
			<div class="ident">
				<div class="identContainer">
					<a href="/">
						<div class="logoContainer">
							<img class="logo" src="<?php echo $logo_url; ?>" alt="logo" />
							<img class="logo_mobile" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" />
							<!-- <h4 style="text-decoration: none; color: white; font-weight: 400; position: absolute; margin-left: 400px;">(Beta)</h4> -->
						</div>
					</a>

					<div class="joinAndSearch">
						<a href="https://brunelstudents.com/societies/tech/">
							<div class="joinButton">
								<p class="joinText">JOIN US</p>
							</div>
						</a>

						<div class="searchContainer">
							<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
								<label>
									<!-- <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'pyxlwuff'); ?></span> -->
									<input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'pyxlwuff'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
								</label>
								<!-- <button type="submit" class="search-submit"><i class="fa fa-search"></i></button> -->
							</form>
						</div>

						<a id="toggle-search" class="search-toggle" href="#search-panel">
							<i class="fa fa-search"></i>
						</a>

						<a id="toggle-search" class="hamburger-toggle" href="#menu-panel">
							<i class="fa fa-bars"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="navigation">
				<!-- Display Menu -->
				<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				));
				?>
			</div>

			<div class="navigation_mobile hidden">
				<!-- Display Menu -->
				<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				));
				?>

				<!-- Join Button -->

				<a href="https://brunelstudents.com/societies/tech/">
					<div class="joinButton_m">
						<p class="joinText">JOIN US</p>
					</div>
				</a>

				<!-- Search Field -->
				<div class="searchContainer_mobile">
					<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
						<label>
							<!-- <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'pyxlwuff'); ?></span> -->
							<input type="search" class="search-field-mobile" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'pyxlwuff'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
						</label>
						<button type="submit" class="search-submit-mobile"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>



			<script>
				// When clicking "Society" in the menu, show sub-menu and hide it when the user clicks elsewhere on the page
				$(document).click(function(event) {
					console.log(event.target);
					// If the text of the clicked element is "Society"
					if ($(event.target).text() == "Society") {
						// Show the sub-menu
						$(".sub-menu").show();
						// Hide the sub-menu when the user clicks anywhere else on the page
						$(document).click(function(event) {
							if ($(event.target).text() != "Society") {
								$(".sub-menu").hide();
							}
						});
					}
				});


				// When hovering over "Society" in the Wordpress menu, show sub-menu and don't hide unless the mouse leaves it.
				// $(document).ready(function() {
				// 	$('.menu-item-has-children').hover(function() {
				// 		$(this).children('.sub-menu').show();
				// 	}, function() {
				// 		$(this).children('.sub-menu').hide();
				// 	});
				// });

				// When hamburger toggle is clicked, show navigation_mobile. When clicked again, hide it.
				$(document).ready(function() {
					$('.hamburger-toggle').click(function() {
						$('.navigation_mobile').toggleClass("hidden");
					});
				});

				// Hide sub-menu by default
				$(".sub-menu").hide();

				// Hide searchContainer by default
				$(".searchContainer").hide();

				// When clicking on toggle-search, show searchContainer and hide the join button, and hide when the user clicks away and show the join button again.
				$("#toggle-search").click(function() {
					$(".searchContainer").toggle();
					$(".joinButton").toggle();
				});
			</script>
		</div>
	</div>
	<!-- <div class="site-header-content">
				<a id="toggle-menu" href="#"><i class="list-toggle fa fa-bars"></i></a>
				<div class="site-branding">
					<?php
					//the_custom_logo();
					?>
				</div> .site-branding -->

	<!-- <a id="toggle-search" class="search-toggle" href="#search-panel">
					<i class="fa fa-search"></i>
				</a>
			</div>

			<div class="rainbowcontainer">
                <div class="rainbow_back"></div>
            </div> -->

	<!-- <div id="search-panel" class="search-panel">
			<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
				<label for="s" class="screen-reader-text"><?php esc_html_e('Search for:', 'pyxlwuff'); ?></label>
				<input type="search" class="search-field" placeholder="<?php esc_html_e('Search &hellip;', 'pyxlwuff'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" id="s">
				<!-- <input type="submit" class="search-submit" value=""> -->
	<!-- <button type="submit" class="search-submit"><i style="font-size: 24px;" class="fa fa-search"></i></button>
			</form>
		</div> -->

	<!-- <div id="menu-panel" class="menu-panel">
			<div class="menu-panel-elements">
				<a class="menu-link" href="https://pyxlwuff.dev"><h3 class="menu-link-txt" >Main Website</h3></a>
				<a class="menu-link" href="https://pyxlwuff.dev"><h3 class="menu-link-txt" >Twitter</h3></a>
				<a class="menu-link" href="https://pyxlwuff.dev"><h3 class="menu-link-txt" >GitHub</h3></a>
			</div>
		</div> -->

	<script>
		//When toggle-search is clicked, toggle the visibility of search-panel
		document.getElementById('toggle-search').addEventListener('click', function(e) {
					e.preventDefault();
					var searchPanel = document.getElementById('search-panel');
					var menu = document.getElementById('menu-panel');
					if (menu.classList.contains('is-visible')) {
						menu.classList.remove('is-visible');
						document.body.style.overflow = '';
						searchPanel.classList.add('is-visible');
					} else {
						if (searchPanel.classList.contains('is-visible')) {
							searchPanel.classList.remove('is-visible');
						} else {
							searchPanel.classList.add('is-visible');
						}
					}


					// });

					//When toggle-menu is clicked, toggle the visibility of search-panel and the menu.
					//Disable scrolling when the menu is visible

					document.getElementById('toggle-menu').addEventListener('click', function(e) {
						e.preventDefault();
						var searchPanel = document.getElementById('search-panel');
						var menu = document.getElementById('menu-panel');
						if (searchPanel.classList.contains('is-visible')) {
							searchPanel.classList.remove('is-visible');
						}
						if (menu.classList.contains('is-visible')) {
							document.body.style.overflow = '';
							menu.classList.remove('is-visible');
						} else {
							menu.classList.add('is-visible');
							//Disable scrolling when the menu is visible
							document.body.style.overflow = 'hidden';
						}
					});
	</script>