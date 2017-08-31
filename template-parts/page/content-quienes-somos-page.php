<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CODIMUBA
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header banner-page quienes-somos" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></header><!-- .entry-header -->
	<div class="entry-content container-fluid back-olivo white">
		<div class="container">
			<div class="row">
				<div class="first-block-page col-xs-12 col-sm-8 col-md-7 quienes-somos">
					<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<div class="container">
		<div class="phrase-image-container col-md-10 col-md-offset-1" style="background-image:url(<?php the_field('phrase_background_image') ?>)">
			<div class="row">
				<div class="phrase amarillo raleway cien_font"><?php the_field('phrase') ?></div>
			</div>
		</div>

		<div class="complementary-text col-xs-12">
			<?php the_field('complementary_text') ?>
		</div>
	</div>

</article><!-- #post-## -->
