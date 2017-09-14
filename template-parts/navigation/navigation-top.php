<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage CODIMUBA
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation navbar navbar-expand-md fixed-top" role="navigation" aria-label="Top Menu">
	
	<a class="navbar-brand" href="//<?php echo $_SERVER['HTTP_HOST'] ?>/demo"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-codimuba.svg" alt="Logo CODIMUBA"></a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' 	=> 'header',
		'menu_id'        	=> 'navbarCollapse',
		'menu_class' 		=> 'collapse navbar-collapse'
	) ); ?>
</nav><!-- #site-navigation -->
