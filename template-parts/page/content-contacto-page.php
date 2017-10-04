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
				<form method="POST" action="http://<?php echo $_SERVER['HTTP_HOST'] ?>/sendmail" id="contactForm">
					<div class="col-sm-6">
						
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" class="form-control" data-validate="required">
						</div>

						<div class="form-group">
							<label for="telefono">Teléfono</label>
							<input type="text" name="telefono" class="form-control" data-validate="required">
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control" data-validate="required|email">
						</div>
						
						<div class="col-sm-6">
							<div class="row first">
								<div class="form-group">
									<label for="ciudad">Ciudad</label>
									<input type="text" name="ciudad" class="form-control" data-validate="required">
								</div>
							</div>
						</div>	
						
						<div class="col-sm-6">
							<div class="row last">
								<div class="form-group">
									<label for="estado">Estado</label>
									<input type="text" name="estado" class="form-control" data-validate="required">
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="form-group">
							<label for="comentarios">Comentarios</label>
							<textarea name="comentarios" class="form-control" id="comentarios" cols="30" rows="10" data-validate="required"></textarea>
						</div>
						
						<div class="form-group">
							<button class="btn btn-primary raleway send-btn">Enviar</button>
						</div>

					</div>
					<div class="form-group">
						
						<div class="email-sent-alert"><strong>Gracias!</strong><br>Tu mensaje ha sido enviado con éxito. En breve nos podremos en contacto contigo.</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
