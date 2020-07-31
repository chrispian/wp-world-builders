<?php
/**
 * Advantages Custom Post Type
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder\Content
 * @since   2020-06-26
 */

namespace ChrispianHBurks\WorldBuilder\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class Advantages
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder\Content\PostType
 * @since   2019-10-04
 */
class Advantages extends PostType {

	/**
	 * @var string
	 * @since   2020-06-26
	 */
	protected $slug = 'advantages';

	/**
	 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
	 * @since  2019-10-04
	 * @return array
	 */
	protected function get_args(): array {
		return [
			'public'                => true,
			'supports'              => [ 'title', 'editor', 'revisions', 'excerpt', 'thumbnail' ],
			'show_ui'               => true,
			// 'show_in_rest'          => true, // Why dos this break showing the taxonomy on the page?
			'exclude_from_search'   => false,
			'delete_with_user'      => true,
			// 'taxonomies'            => array( 'genre' ),
			'capability_type'       => 'post',
		];
	}

	/**
	 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
	 * @since  2019-10-04
	 * @return array
	 */
	protected function get_labels(): array {
		return [
			'name'               => _x( 'Advantages', 'post type general name', 'wp-world-builder' ),
			'singular_name'      => _x( 'Advantage', 'post type singular name', 'wp-world-builder' ),
			'menu_name'          => _x( 'Advantages', 'admin menu', 'wp-world-builder' ),
			'name_admin_bar'     => _x( 'Advantages', 'add new on admin bar', 'wp-world-builder' ),
			'add_new'            => _x( 'Add New', 'void update', 'wp-world-builder' ),
			'add_new_item'       => __( 'Add New Advantage', 'wp-world-builder' ),
			'new_item'           => __( 'New Advantage', 'wp-world-builder' ),
			'edit_item'          => __( 'Edit Advantage', 'wp-world-builder' ),
			'view_item'          => __( 'View Advantage', 'wp-world-builder' ),
			'all_items'          => __( 'All Advantages', 'wp-world-builder' ),
			'search_items'       => __( 'Search Advantages', 'wp-world-builder' ),
			'parent_item_colon'  => __( 'Parent Advantages:', 'wp-world-builder' ),
			'not_found'          => __( 'No Advantages found.', 'wp-world-builder' ),
			'not_found_in_trash' => __( 'No Advantages found in Trash.', 'wp-world-builder' ),
		];
	}

}
