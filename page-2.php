
<?php get_header(); ?>
<!-- =============================== impressum seite======================================== -->
<div id="impressum" class="container_12">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="grid_12">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>