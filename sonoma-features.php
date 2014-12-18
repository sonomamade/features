<?php

/**
 *
 * @since             1.0.0
 * @package           Sonoma_Features
 *
 * @wordpress-plugin
 * Plugin Name:       Sonoma Features
 * Plugin URI:        https://github.com/sonomamade/features
 * Description:       A plugin that adds a feature custom post type
 * Version:           1.0.0
 * Author:            Michael Silva
 * Author URI:        http://michaelsilva.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sonoma-features
 * Domain Path:       /languages
 */

/**
 * Register Feature Post Type
 */
if ( ! function_exists('sonoma_feature_post_type') ) {

// Register Custom Post Type
function sonoma_feature_post_type() {

	$labels = array(
		'name'                => 'Features',
		'singular_name'       => 'Feature',
		'menu_name'           => 'Features',
		'parent_item_colon'   => 'Parent Feature:',
		'all_items'           => 'All Features',
		'view_item'           => 'View Feature',
		'add_new_item'        => 'Add New Feature',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Feature',
		'update_item'         => 'Update Feature',
		'search_items'        => 'Search Features',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'feature',
		'description'         => 'A custom post type to enter and organize your product features',
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-screenoptions',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'feature', $args );

}

// Hook into the 'init' action
add_action( 'init', 'sonoma_feature_post_type', 0 );

}
