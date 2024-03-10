<?php
	
	//Disable the admin bar on the front end
	show_admin_bar(false);

	//Post thumbnail support
	add_theme_support('post-thumbnails');

	//Register Menus
	register_nav_menus(array(
		'main' => 'Main Menu'
	));
	
	//Remove junk from wp_head
	remove_action('wp_head', 'rsd_link'); // Removes the Really Simple Discovery link
	remove_action('wp_head', 'wlwmanifest_link'); // Removes the Windows Live Writer link
	remove_action('wp_head', 'wp_generator'); // Removes the WordPress version
	remove_action('wp_head', 'feed_links', 2); // Removes the RSS feeds
	remove_action('wp_head', 'feed_links_extra', 3); // Removes all other RSS links
	remove_action('wp_head', 'index_rel_link'); // Removes the index page link
	remove_action('wp_head', 'start_post_rel_link', 10, 0); // Removes the random post link
	remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Removes the parent post link
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Removes the next and previous post links
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Remove shortlink
	remove_action('wp_head', 'print_emoji_detection_script', 7); // Remove emoji junk
	remove_action('wp_print_styles', 'print_emoji_styles'); // Remove emoji junk
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); // Remove emoji junk
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); // Remove emoji junk

	add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 ); // Remove wp-block render junk
		function remove_block_css() {
		wp_dequeue_style( 'wp-block-library' ); // WordPress core
		wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
		wp_dequeue_style( 'wc-block-style' ); // WooCommerce
		wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
		wp_dequeue_style( 'global-styles' ); // Inline styling
	}

	// Remove image size limit
	add_filter( 'big_image_size_threshold', '__return_false' );
	
	// Custom excerpt size
	function excerpt($limit) {
    	$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).' ... <a href="'.get_permalink($post->ID).'" class="read-more">'.'read more &rarr;'.'</a>';
		} else {
			$excerpt = implode(" ",$excerpt);
		} 
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt;
    }

	// register options
	$footerOptions = array(
		'page_title' => 'Footer Settings',
		'menu_title' => 'Footer Settings',
		'position' => false,
		'icon_url' => 'dashicons-admin-site',
		'update_button'		=> __('Update', 'acf'),
		'updated_message'	=> __("Options Updated", 'acf'),
	);

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page($footerOptions);
	}
