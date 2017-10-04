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
				<div class="first-block-page col-xs-12 col-sm-8 col-md-7 contacto">
					<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<div class="container">
		<div class="row">
			
			<?php $the_avisos_query = new WP_Query( array('post_type' => 'aviso', 'posts_per_page' => 20,'order'=>'DESC') );

			while ( $the_avisos_query->have_posts() ) : $the_avisos_query->the_post();?>
				<div class="col-xs-12 aviso-item">
					<h2 class="aviso-title"><?php the_title(); ?>: </h2>
					<p class="aviso-date"><?php the_date(); ?></p>
					<?php the_content(); ?>

					<?php if (get_field('pdf')) { ?>
						<div class="pdf">
							<a class="amarillo" href="<?php the_field('pdf'); ?>" title="Ver PDF"><img src="<?php echo get_template_directory_uri(); ?>/images/pdf.svg" alt=""> &nbsp; <span>Ver PDF</span> &nbsp; <span class="icon-arrow"></span></a>
						</div><?php
					} ?>
				</div><?php 
			wp_reset_postdata();
			endwhile;?>

		</div>
	</div>

</article><!-- #post-## -->
