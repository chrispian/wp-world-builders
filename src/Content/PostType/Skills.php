<?php
/**
 * Skills Custom Post Type
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder\Content
 * @since   2020-06-26
 */

namespace ChrispianHBurks\WorldBuilder\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class Skills
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder\Content\PostType
 * @since   2019-10-04
 */
class Skills extends PostType {

	/**
	 * @var string
	 * @since   2020-06-26
	 */
	protected $slug = 'skills';

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
			'name'               => _x( 'Skills', 'post type general name', 'wp-world-builder' ),
			'singular_name'      => _x( 'Skill', 'post type singular name', 'wp-world-builder' ),
			'menu_name'          => _x( 'Skills', 'admin menu', 'wp-world-builder' ),
			'name_admin_bar'     => _x( 'Skills', 'add new on admin bar', 'wp-world-builder' ),
			'add_new'            => _x( 'Add New', 'void update', 'wp-world-builder' ),
			'add_new_item'       => __( 'Add New Skill', 'wp-world-builder' ),
			'new_item'           => __( 'New Skill', 'wp-world-builder' ),
			'edit_item'          => __( 'Edit Skill', 'wp-world-builder' ),
			'view_item'          => __( 'View Skill', 'wp-world-builder' ),
			'all_items'          => __( 'All Skills', 'wp-world-builder' ),
			'search_items'       => __( 'Search Skills', 'wp-world-builder' ),
			'parent_item_colon'  => __( 'Parent Skills:', 'wp-world-builder' ),
			'not_found'          => __( 'No Skills found.', 'wp-world-builder' ),
			'not_found_in_trash' => __( 'No Skills found in Trash.', 'wp-world-builder' ),
		];
	}

}
