<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CODIMUBA
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<div class="top-home-images-container raleway">

			<?php
			$the_query_main = new WP_Query( array('post_type' => 'links_home', 'posts_per_page' => 1, 'orderby'=> 'order_menu','order'=>'ASC') );

			while ( $the_query_main->have_posts() ) : $the_query_main->the_post();?>
				<div class="image main" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
					<a href="<?php the_field('link'); ?>">
						<span class="text-container">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</span>
					</a>
				</div><?php 
			wp_reset_postdata();
			endwhile;

			$the_query_secondary = new WP_Query( array('post_type' => 'links_home', 'posts_per_page' => 2, 'offset' => 1, 'orderby'=> 'order_menu','order'=>'ASC') ); ?>
			<div class="secondary-images-container"><?php
			while ( $the_query_secondary->have_posts() ) : $the_query_secondary->the_post();?>
				<div class="image secondary" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
					<a href="<?php the_field('link') ?>"><span class="cat-title"><?php the_title() ?></span> </a>
				</div><?php
				endwhile;
			wp_reset_postdata(); ?>
			</div>
		</div>

		<div class="container">
			<div class="row raleway verde">
				<h2 class="title">LO MÁS TRENDY</h2>

				<?php
				$the_query = new WP_Query( array(
				    'post_type' => 'producto',
				    'tax_query' => array(
				        array (
				            'taxonomy' => 'categoria_prod',
				            'field' => 'slug',
				            'terms' => 'lo-mas-trendy',
				        )
				    ),
				) );

				while ( $the_query->have_posts() ) :
				    $the_query->the_post();?>
				    <div class="col-xs-6 col-sm-3 trendy-item">
						<div class="image-container" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
							<a href="<?php the_permalink(); ?>"></a>
						</div>
						<div class="info-container">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</div> <?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
		

		<div class="container">
			<div class="row raleway verde">
				<h2 class="title">¿POR QUÉ CODIMUBA?</h2>
				
				<div class="why-container">
					<div class="item">
						<div class="why-icon-container text-center">
							<span class="icon-calidad"></span>
						</div>
						<div class="why-info-container">
								<div class="title">Productos de la más alta calidad</div>
								<div class="info">Contamos sólo con los mejores productos en tendencia y estilos realizados con materiales de alta calidad a precios competitivos.</div>

						</div>
					</div>
					<div class="item">
						<div class="why-icon-container text-center">
							<span class="icon-experiencia"></span>
						</div>
						<div class="why-info-container">
							<div class="title">Más de 20 años en el mercado</div>
							<div class="info">A medida que los años han transcurrido y que nuestro negocio ha crecido, nos hemos convertido rápidamente en uno de los mayoristas de muebles de mayor preferencia.</div>
						</div>
					</div>
					<div class="item">
						<div class="why-icon-container text-center">
							<span class="icon-exclusivas"></span>
						</div>
						<div class="why-info-container">
							<div class="title">Marcas exclusivas</div>
							<div class="info">Con los nuevos productos que se integran continuamente a nuestro amplio catálogo, con la seguridad de obtener, al mismo tiempo, servicio, calidad y atención, logrando de esta manera, mantener la satisfacción de nuestros clientes.</div>
						</div>
					</div>
				</div>

			</div>
		</div>


		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				//get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			//get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
