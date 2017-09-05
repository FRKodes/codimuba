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
			<div class="image main">
				<a href="#main">
					<span class="text-container">
						<h1>Lo + nuevo colección 2017</h1>
						<p>colección completa <span class="icon-arrow"></span></p>
					</span>
			</a>
			</div>

			<div class="secondary-images-container">
				<div class="image secondary bed">
					<a href="#secondary-one">
						<span class="cat-title">RECÁMARAS</span>
					</a>
				</div>
				<div class="image secondary sofa">
					<a href="#secondary-two">
						<span class="cat-title">SALAS</span>
					</a>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row raleway verde">
				<h2 class="title">LO MÁS TRENDY</h2>
				<?php for ($i=0; $i <= 7; $i++) { ?>
					<div class="col-xs-6 col-sm-3 ">
						<div class="image-container">
							<a href="#"></a>
						</div>
						<div class="info-container">
							<h3><a href="#">OVERTURE</a></h3>
						</div>
					</div> <?php
				} ?>
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
								<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi ad corporis itaque repellendus a nesciunt delectus .</div>
						</div>
					</div>
					<div class="item">
						<div class="why-icon-container text-center">
							<span class="icon-experiencia"></span>
						</div>
						<div class="why-info-container">
							<div class="title">Más de 20 años en el mercado</div>
							<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi ad corporis itaque repellendus a nesciunt delectus .</div>
						</div>
					</div>
					<div class="item">
						<div class="why-icon-container text-center">
							<span class="icon-exclusivas"></span>
						</div>
						<div class="why-info-container">
							<div class="title">Marcas exclusivas</div>
							<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi ad corporis itaque repellendus a nesciunt delectus .</div>
						</div>
					</div>
					<div class="item">
						<div class="why-icon-container text-center">
							<span class="icon-exclusivas"></span>
						</div>
						<div class="why-info-container">
							<div class="title">Puntualidad en las entregas</div>
							<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi ad corporis itaque repellendus a nesciunt delectus .</div>
						</div>
					</div>
					<div class="item">
						<div class="why-icon-container text-center">
							<span class="icon-exclusivas"></span>
						</div>
						<div class="why-info-container">
							<div class="title">Inventario siempre disponible</div>
							<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi ad corporis itaque repellendus a nesciunt delectus .</div>
						</div>
					</div>
					<div class="item">
						<div class="why-icon-container text-center">
							<span class="icon-exclusivas"></span>
						</div>
						<div class="why-info-container">
							<div class="title">El mejor trato</div>
							<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi ad corporis itaque repellendus a nesciunt delectus .</div>
						</div>
					</div>
					<div class="item">
						<div class="why-icon-container text-center">
							<span class="icon-exclusivas"></span>
						</div>
						<div class="why-info-container">
							<div class="title">Lorem ipsum dolor sit amet.</div>
							<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi ad corporis itaque repellendus a nesciunt delectus .</div>
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
