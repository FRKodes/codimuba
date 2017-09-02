<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage CODIMUBA
 * @since 1.0
 * @version 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" class="col-xs-6 col-sm-3">
	<div class="image-container" style="background: url(<?php the_post_thumbnail_url(); ?>)">
		<a href="<?php the_permalink() ?>"></a>
	</div>
	<div class="info-container">
		<a href="<?php the_permalink(); ?> "><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
	</div>
</article><!-- #post-## -->