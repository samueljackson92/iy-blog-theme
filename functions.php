<?php 

function paginate() {
global $wp_query;

$big = 999999999; // need an unlikely integer
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
}

function setup_theme_settings() {
	add_submenu_page('themes.php', 'Social Icons', 'Social Icons', 'manage_options','social-icons-elements', 'theme_social_icons_settings');
}

function theme_social_icons_settings() {
	if (!current_user_can('manage_options')) {  
   		wp_die('You do not have sufficient permissions to access this page.');  
	}


	$filename = get_bloginfo('template_url') . "/img/icons/names.txt";
	$names = file($filename, FILE_IGNORE_NEW_LINES);

	if (isset($_POST["update_settings"])) {


		$urls = array();

		$size = esc_attr($_POST["size"]);
		foreach ($names as $name) {
			$url = esc_attr($_POST[$name]);
			$urls[$name] = $url; 
		}

 		echo  '<div id="message" class="updated">Settings saved</div>';
 		
 		update_option("social_icons", $urls);
 		update_option("social_icons_size", $size);
	}
	
	$urls = get_option("social_icons");
	$size = get_option("social_icons_size");
?>
<div class="wrap">  
	<?php screen_icon('themes'); ?> <h2>Social Icons</h2>  
	<p>These are the social button URLs that will appear in the header of your site. Blank URLs won't be shown on the site.</p>
	<form method="POST" action="">
	    <table class="form-table">
	    	<tr valign="top">  
	            <th scope="row">  
					<label for="size">Icon Size</label>
	            </th>  
	            <td>  
					<select name="size">
					  <option <?php if($size == 16) { ?> selected="selected" <?php } ?> value="16">16px</option>
					  <option <?php if($size == 32) { ?> selected="selected" <?php } ?> value="32">32px</option>
					</select>
					<p class="description">The size of the icons that appear in the header.</p>
	            </td>  
	        </tr>	
	    	<?php
	    		foreach ($names as $key => $name) {
	    	?>
	    	<tr valign="top">  
	            <th scope="row">  
					<label for="<?php echo $name; ?>"><?php echo $name; ?> URL</label>
	            </th>  
	            <td>  
	                <input class="regular-text" type="text" name="<?php echo $name; ?>" value="<?php echo $urls[$name];?>" />
	            </td>  
	        </tr>	
	    	<?php
	    		}
	    	?>    
	    </table>
	    <p>  
		    <input type="submit" value="Save settings" class="button-primary"/>  
		</p>  
	    <input type="hidden" name="update_settings" value="Y" />
	</form>  
</div>  

<?php
}

add_action("admin_menu", "setup_theme_settings");

?>