<?php 
/*
	Shows a single post.
	Includes comment support.

	Author: Samuel Jackson
	Date: 2013-05-21
*/

get_header(); ?>

<div id="blog-content" class="single">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>
		<div class="post">
			<hr />
			<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>