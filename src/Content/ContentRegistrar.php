<?php
/**
 * Short Description Goes Here
 *
 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @since  2019-10-04
 */

namespace ChrispianHBurks\WorldBuilder\Content;

use ChrispianHBurks\WorldBuilder\Content\PostType;
use ChrispianHBurks\WorldBuilder\Content\Taxonomy;
use WebDevStudios\OopsWP\Structure\Content\ContentTypeInterface;
use WebDevStudios\OopsWP\Structure\Service;

class ContentRegistrar extends service {

	protected $post_types = [
		PostType\Stories::class,
	];

	protected $taxonomies = [
		Taxonomy\Genre::class,
	];

	public function register_hooks() {
		add_action( 'init', [ $this, 'register_post_types' ] );
		add_action( 'init', [ $this, 'register_taxonomies' ] );
	}


	public function register_post_types() {
		foreach ( $this->post_types as $post_type_class ) {
			$post_type = new $post_type_class();
			$this->register_content_type( $post_type );
		}
	}

	public function register_taxonomies() {
		foreach ( $this->taxonomies as $taxonomy_class ) {
			$taxonomy = new $taxonomy_class();
			$this->register_content_type( $taxonomy );
		}
	}

	private function register_content_type ( ContentTypeInterface $post_type ) {
		$post_type->register();
	}

}
