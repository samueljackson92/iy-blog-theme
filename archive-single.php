<?php 
/** 
 * Template Name: Archives Template
 * Description: A Page Template that lets us created a dedicated Archives page
 */

get_header(); ?>
<div id="blog-content" class="single">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="post">
			<hr />
			<div class="center-box" id="search-box">
				<h2><?php echo get_the_title(); ?></h2>
				<?php get_search_form(); ?>
			</div>
			<hr />
            <div class="two-column">
            	<div class="left">
		            <h3>Archives by Month:</h3>
		            <ul>
		            	<?php wp_get_archives(); ?>
		            </ul>
		        </div>
		        <div class="right">
		            <h3>Archives by Subject:</h3>
		            <ul> 
		            	<?php wp_list_categories('hierarchical=true&title_li='); ?> 
		            </ul>
		        </div>
	        </div>
	        <hr />
            <div class="center-box">
            	<h3>Tag Cloud</h3>
            	<?php wp_tag_cloud('largest=15&smallest=8'); ?>
            </div>
		</div>

	<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>