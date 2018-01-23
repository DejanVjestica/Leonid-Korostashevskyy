<?php get_header(); ?>
<div id="single" class="wrapper">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
