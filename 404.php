<?php /**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

?>
<?php get_header(); ?>
	<div class="center-box" id="blog-content">
		<hr />
		<h2>404: Not Found.</h2>
		<p>Oops! Looks like the content your looking for doesn't exist!</p>
		<p>Click <a href="<?php echo get_settings('home'); ?>">here</a> to return home.</p>
	</div>
<?php get_footer(); ?>