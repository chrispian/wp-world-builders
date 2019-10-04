<?php
/**
 * Short Description Goes Here
 *
 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @since  2019-10-04
 */

namespace ChrispianHBurks\WorldBuilder\Content\Taxonomy;

use WebDevStudios\OopsWP\Structure\Content\Taxonomy;

class Genre extends Taxonomy {

	protected $slug = 'genre';

	protected $object_types = [
		'stories',
	];

	protected function get_args(): array {
		return [
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		];
	}


	protected function get_labels() : array {
		// TODO: Implement get_labels() method.
		return [
			'name' => 'Genres',
		];
	}

}