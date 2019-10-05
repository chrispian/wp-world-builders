<?php
/**
 * Characters Custom Post Type
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder\Content
 * @since   2019-10-04
 */

namespace ChrispianHBurks\WorldBuilder\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class Characters
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder\Content\PostType
 * @since   2019-10-04
 */
class Characters extends PostType {

	/**
	 * @var string
	 * @since 2019-10-04
	 */
	protected $slug = 'characters';

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
			'taxonomies'            => array( 'genre' ),
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
			'name'               => _x( 'Characters', 'post type general name', 'wp-world-builder' ),
			'singular_name'      => _x( 'Character', 'post type singular name', 'wp-world-builder' ),
			'menu_name'          => _x( 'Characters', 'admin menu', 'wp-world-builder' ),
			'name_admin_bar'     => _x( 'Characters', 'add new on admin bar', 'wp-world-builder' ),
			'add_new'            => _x( 'Add New', 'void update', 'wp-world-builder' ),
			'add_new_item'       => __( 'Add New Character', 'wp-world-builder' ),
			'new_item'           => __( 'New Character', 'wp-world-builder' ),
			'edit_item'          => __( 'Edit Character', 'wp-world-builder' ),
			'view_item'          => __( 'View Character', 'wp-world-builder' ),
			'all_items'          => __( 'All Characters', 'wp-world-builder' ),
			'search_items'       => __( 'Search Characters', 'wp-world-builder' ),
			'parent_item_colon'  => __( 'Parent Characters:', 'wp-world-builder' ),
			'not_found'          => __( 'No stories found.', 'wp-world-builder' ),
			'not_found_in_trash' => __( 'No stories found in Trash.', 'wp-world-builder' ),
		];
	}

}
