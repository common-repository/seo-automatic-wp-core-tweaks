<?php
// Add the sitemap page for ddsitemap generator
	global $wpdb;

if ($_REQUEST['action'] == "changecore") {
	 if ($_REQUEST['add_sitemap'] == "ON") {

		$info = array(
		'post_status' => 'publish', 
		'post_type' => 'page',
		'post_author' => 1,
		'ping_status' => get_option('default_ping_status'), 
		'post_parent' => 0,
		'menu_order' => 0,
		'to_ping' =>  '',
		'pinged' => '',
		'post_password' => '',
		'guid' => '',
		'post_content_filtered' => '',
		'post_excerpt' => '',
		'import_id' => 0,
		'post_name' => 'site-map',
		'post_title' => 'Site-Map',
		'post_content' => '<!-- ddsitemapgen -->');
		$post_id = wp_insert_post($info);
		if ($post_id != 0) {
		$excludedPages = get_option('gdm_excluded_pages');
		$excludedPages[] = $post_id;
		update_option('gdm_excluded_pages', $excludedPages);
		update_option('seoauto_core_smid', $post_id);
		wp_cache_delete('all_page_ids', 'pages');
		//$wp_rewrite->flush_rules();
		$success .= "<li>The sitemap was created.</li>";
		} else {
			$fail .= "<li>The sitemap was not created. Perhaps it already exists.</li>";
		}
	} else {
		$notused .= "<li>Create sitemap.</li>";
	}
} else {
	$options .= '<li><input name="add_sitemap" type="checkbox" value="ON" /> Add the page and shortcode for the integrated sitemap, giving you a static sitemap that changes as you add content. Look under WP Admin > Settings for additional sitemap options. Our sitemap function is somewhat limited, but a lot better than nothing. Instead, we highly recommend using Sitemap by <a href="https://wordpress.org/plugins/sitemap-by-click5/" target="_blank">click5</a>.<br /><small><b>(Our sitemap is not an XML sitemap)</b></small></li>';
} 
?>