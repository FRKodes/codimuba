<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CODIMUBA
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header container-fluid back-olivo">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="entry-meta"> <?php the_title( '<h1 class="entry-title col-xs-12">', '</h1>' ); ?> </div>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-12 col-lg-offset-0">
				<div class="product-gallery">
					<?php if (get_field('foto_de_producto_1')) { ?><div class="item" style="background-image: url(<?php the_field('foto_de_producto_1') ?>)"></div><?php } ?>
					<?php if (get_field('foto_de_producto_2')) { ?><div class="item" style="background-image: url(<?php the_field('foto_de_producto_2') ?>)"></div><?php } ?>
					<?php if (get_field('foto_de_producto_3')) { ?><div class="item" style="background-image: url(<?php the_field('foto_de_producto_3') ?>)"></div><?php } ?>
					<?php if (get_field('foto_de_producto_4')) { ?><div class="item" style="background-image: url(<?php the_field('foto_de_producto_4') ?>)"></div><?php } ?>
					<?php if (get_field('foto_de_producto_5')) { ?><div class="item" style="background-image: url(<?php the_field('foto_de_producto_5') ?>)"></div><?php } ?>
				</div>
			</div>
		</div>

		<div class="row">
			
			<div class="entry-content col-sm-10 col-sm-offset-1 col-lg-12 col-lg-offset-0">
				<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'codimuba-custom-theme' ),
					get_the_title()
				) );
				?>
			</div><!-- .entry-content -->

		</div>

		<div class="row">
			<div class="product-details">
				<div class="col-sm-4 col-sm-offset-1 col-lg-4 col-lg-offset-0">
					<p>
						<b>Clave:</b> <br>
						<?php the_field('clave'); ?>
					</p>
					<p>
						<b>Dimensiones:</b> <br>
						<?php the_field('dimensiones'); ?>
					</p>
				</div>
				<div class="col-sm-7 col-lg-8">
					<p>
						<b>Material:</b> <br>
						<?php if (get_field('material_1')) { ?> <img src="<?php the_field('material_1'); ?>" alt="Material opción 1 <?php the_title(); ?>"> <?php } ?>
						<?php if (get_field('material_2')) { ?> <img src="<?php the_field('material_2'); ?>" alt="Material opción 2 <?php the_title(); ?>"> <?php } ?>
						<?php if (get_field('material_3')) { ?> <img src="<?php the_field('material_3'); ?>" alt="Material opción 3 <?php the_title(); ?>"> <?php } ?>
						<?php if (get_field('material_4')) { ?> <img src="<?php the_field('material_4'); ?>" alt="Material opción 4 <?php the_title(); ?>"> <?php } ?>
						<?php if (get_field('material_5')) { ?> <img src="<?php the_field('material_5'); ?>" alt="Material opción 5 <?php the_title(); ?>"> <?php } ?>
					</p>

					<p>
						<b>Tapiz:</b> <br>
						<?php if (get_field('tapiceria_1')) { ?> <img src="<?php the_field('tapiceria_1'); ?>" alt="Tapicería opción 1 <?php the_title(); ?>"> <?php } ?>
						<?php if (get_field('tapiceria_2')) { ?> <img src="<?php the_field('tapiceria_2'); ?>" alt="Tapicería opción 2 <?php the_title(); ?>"> <?php } ?>
						<?php if (get_field('tapiceria_3')) { ?> <img src="<?php the_field('tapiceria_3'); ?>" alt="Tapicería opción 3 <?php the_title(); ?>"> <?php } ?>
						<?php if (get_field('tapiceria_4')) { ?> <img src="<?php the_field('tapiceria_4'); ?>" alt="Tapicería opción 4 <?php the_title(); ?>"> <?php } ?>
						<?php if (get_field('tapiceria_5')) { ?> <img src="<?php the_field('tapiceria_5'); ?>" alt="Tapicería opción 5 <?php the_title(); ?>"> <?php } ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->

<div class="container">
		<div class="row"><?php
			$prod_rel_args = array( 'post_type' => 'producto',
				'meta_query'	=> array(
						'relation'		=> 'AND',
						array(
							'key'		=> 'categoria_producto',
							'value'		=> 1, //id de la categoría actual
							'compare'	=> '='
						)
					)
			);
			
			$prod_rel_args = array( 'post_type' => 'producto', 'posts_per_page' => 4, 'orderby' => 'rand');
			$productos_relacionados = new WP_Query( $prod_rel_args);

			if ($productos_relacionados->have_posts()) { ?>
				<h2 class="title raleway">PRODUCTOS SIMILARES</h2>
			<?php }

			while ( $productos_relacionados->have_posts() ) : $productos_relacionados->the_post();?>
				<div class="col-xs-6 col-sm-3 related-item">
					<div class="photo" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
						<a href="<?php the_permalink() ?>" class="" title="<?php the_title(); ?>"></a>
					</div>
					<div class="info">
						<a href="<?php the_permalink() ?>" class="" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>	
		</div>
</div>