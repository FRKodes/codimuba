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
			
			<div class="form-container col-md-10 col-md-offset-1">
				<form method="POST" action="">
					<div class="col-sm-6">
						
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" class="form-control">
						</div>

						<div class="form-group">
							<label for="telefono">Teléfono (opcional)</label>
							<input type="text" name="telefono" class="form-control">
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						
						<div class="col-sm-6">
							<div class="row first">
								<div class="form-group">
									<label for="ciudad">Ciudad (opcional)</label>
									<input type="text" name="ciudad" class="form-control">
								</div>
							</div>
						</div>	
						
						<div class="col-sm-6">
							<div class="row last">
								<div class="form-group">
									<label for="estado">Estado (opcional)</label>
									<input type="text" name="estado" class="form-control">
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="form-group">
							<label for="comentarios">Comentarios</label>
							<textarea name="comentarios" class="form-control" id="comentarios" cols="30" rows="10"></textarea>
						</div>
						
						<div class="form-group">
							<button class="btn btn-primary raleway send-btn">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
