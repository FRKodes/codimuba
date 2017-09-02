<?php
/**
 * Displays content for product archive page
 *
 * @package WordPress
 * @subpackage CODIMUBA
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>">

	<div class="panel-content">
		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
