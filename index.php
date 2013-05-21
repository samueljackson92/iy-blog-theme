<?php get_header(); ?>
<div id="blog-content">

	<!--START of wordpress post loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<div class="post">
			<hr />
			<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<small><?php the_time('F jS, Y') ?></small>
			<div class="entry">
				<?php the_content("Read More..."); ?>
			</div>
		</div>

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	<!-- END of wordpress post loop -->
	<div id="pagination">
		<?php paginate(); ?>
	</div>
</div>
<?php get_footer(); ?>
