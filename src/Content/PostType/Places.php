<?php
/**
 * Short Description Goes Here
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder\Content
 * @since   2019-10-04
 */

namespace ChrispianHBurks\WorldBuilder\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

class Places extends PostType {

	protected $slug = 'places';

	protected function get_args(): array {
		return [
			'public'                => true,
			'supports'              => [ 'title', 'editor', 'revisions', 'excerpt', 'thumbnail' ],
			'show_ui'               => true,
			// 'show_in_rest'          => true, // Why dos this break showing the taxonomy on the page?
			'exclude_from_search'   => false,
			'delete_with_user'      => true,
			'taxonomies'            => array( 'genre' ),
			'capability_type'       => 'post',
		];
	}

	protected function get_labels(): array {
		return [
			'name'               => _x( 'Places', 'post type general name', 'wp-world-builder' ),
			'singular_name'      => _x( 'Place', 'post type singular name', 'wp-world-builder' ),
			'menu_name'          => _x( 'Places', 'admin menu', 'wp-world-builder' ),
			'name_admin_bar'     => _x( 'Places', 'add new on admin bar', 'wp-world-builder' ),
			'add_new'            => _x( 'Add New', 'void update', 'wp-world-builder' ),
			'add_new_item'       => __( 'Add New Place', 'wp-world-builder' ),
			'new_item'           => __( 'New Place', 'wp-world-builder' ),
			'edit_item'          => __( 'Edit Place', 'wp-world-builder' ),
			'view_item'          => __( 'View Place', 'wp-world-builder' ),
			'all_items'          => __( 'All Places', 'wp-world-builder' ),
			'search_items'       => __( 'Search Places', 'wp-world-builder' ),
			'parent_item_colon'  => __( 'Parent Places:', 'wp-world-builder' ),
			'not_found'          => __( 'No place found.', 'wp-world-builder' ),
			'not_found_in_trash' => __( 'No place found in Trash.', 'wp-world-builder' ),
		];
	}

}
