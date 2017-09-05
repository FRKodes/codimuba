<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage CODIMUBA
 * @since 1.0
 * @version 1.2
 */
?>
		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-4 first-block">
						<ul class="social-links">
							<li><a target="_blank" href="https://www.facebook.com/codimuba" class="icon-facebook"></a></li>
							<li><a target="_blank" href="https://www.instagram.com" class="icon-instagram"></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-8 second-block">
						<div class="footer-menu-block"><?php wp_nav_menu( array('theme_location' => 'footer', 'menu_class' => 'one') ); ?></div>
						<div class="footer-menu-block"><?php wp_nav_menu( array('theme_location' => 'footer_2', 'menu_class' => 'two') ); ?></div>
						<div class="footer-menu-block"><?php wp_nav_menu( array('theme_location' => 'footer_3', 'menu_class' => 'three') ); ?></div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>