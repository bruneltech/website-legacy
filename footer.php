<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pyxlwuff
 */

?>

	<footer id="colophon" class="site-footer">
		<!-- Displaying Sponsorships, comment container out if none. -->
		<!-- <div class="footerContainer">
			<div class="sponsors">
				<p class="copytxt">SPONSORS</p>
				<div class="sponsors_content">
					
				</div>
			</div>			
		</div> -->

		<!-- General info like copyright, socials and union logo -->

		<div class="footerContainer">
            <div class="footerContent">

                <div class="copyInfo">
                    <p class="copytxt">&copy; Brunel Tech Society <?php echo date("Y"); ?></p>
                </div>

                <div class="socialMedia">
                    <a href="https://brunelstudents.com/societies/tech/"><div class="unionIcon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/union-brand.svg" alt="Union of Brunel Students Logo">
                    </div></a>

					<a href="https://facebook.com/bruneltech"><div class="socialIcon">
						<img class="socialLogo" src="<?php echo get_template_directory_uri(); ?>/img/facebook_logo.png" alt="Facebook">
					</div></a>

					<a href="https://instagram.com/"><div class="socialIcon">
						<img class="socialLogo" src="<?php echo get_template_directory_uri(); ?>/img/instagram_logo.png" alt="Instagram">
					</div></a>

					<a href="https://twitter.com/BrunelTechSoc"><div class="socialIcon">
						<img class="socialLogo" src="<?php echo get_template_directory_uri(); ?>/img/twitter_logo.svg" alt="Twitter">
					</div></a>
				</div>
        	</div>
        </div>

		<!--<div class="site-info">
			<p class="copyright">&copy; <?php echo date('Y'); ?> Pyxlwuff</p>
			<a class="siteurl" href="https://pyxlwuff.dev"><p>Main Website</p></a>
		</div>< -->

		<!--       _
        .__(.)< (MEOW)
        \___)   
 		~~~~~~~~~~~~~~~~~~-->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
