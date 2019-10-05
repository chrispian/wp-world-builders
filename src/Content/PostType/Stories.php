<?php
/**
 * Stories Custom Post Type
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder\Content
 * @since   2019-10-04
 */

namespace ChrispianHBurks\WorldBuilder\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class Stories
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder\Content\PostType
 * @since   2019-10-04
 */
class Stories extends PostType {

	/**
	 * @var string
	 * @since 2019-10-04
	 */
	protected $slug = 'stories';

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
			'name'               => _x( 'Stories', 'post type general name', 'wp-world-builder' ),
			'singular_name'      => _x( 'Story', 'post type singular name', 'wp-world-builder' ),
			'menu_name'          => _x( 'Stories', 'admin menu', 'wp-world-builder' ),
			'name_admin_bar'     => _x( 'Stories', 'add new on admin bar', 'wp-world-builder' ),
			'add_new'            => _x( 'Add New', 'void update', 'wp-world-builder' ),
			'add_new_item'       => __( 'Add New Story', 'wp-world-builder' ),
			'new_item'           => __( 'New Story', 'wp-world-builder' ),
			'edit_item'          => __( 'Edit Story', 'wp-world-builder' ),
			'view_item'          => __( 'View Story', 'wp-world-builder' ),
			'all_items'          => __( 'All Stories', 'wp-world-builder' ),
			'search_items'       => __( 'Search Stories', 'wp-world-builder' ),
			'parent_item_colon'  => __( 'Parent Stories:', 'wp-world-builder' ),
			'not_found'          => __( 'No stories found.', 'wp-world-builder' ),
			'not_found_in_trash' => __( 'No stories found in Trash.', 'wp-world-builder' ),
		];
	}

}
