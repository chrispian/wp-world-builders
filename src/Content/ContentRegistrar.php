<?php
/**
 * Register Content Types (Post Types, Taxonomies)
 *
 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @since  2019-10-04
 */

namespace ChrispianHBurks\WorldBuilder\Content;

use ChrispianHBurks\WorldBuilder\Content\PostType;
use ChrispianHBurks\WorldBuilder\Content\Taxonomy;
use WebDevStudios\OopsWP\Structure\Content\ContentTypeInterface;
use WebDevStudios\OopsWP\Structure\Service;

/**
 * Class ContentRegistrar
 * @package ChrispianHBurks\WorldBuilder\Content
 */
class ContentRegistrar extends service {

	/**
	 * @var array
	 * @since 2019-10-04
	 */
	protected $post_types = [
		PostType\Advantages::class,
		PostType\Attributes::class,
		PostType\Characters::class,
		PostType\Disadvantages::class,
		PostType\Groups::class,
		PostType\Items::class,
		PostType\Places::class,
		PostType\Powers::class,
		PostType\Skills::class,
		PostType\Spells::class,
		PostType\Stories::class,
		PostType\Worlds::class,
	];


	/**
	 * @var array
	 * @since 2019-10-04
	 */
	protected $taxonomies = [
		Taxonomy\Genre::class,
		Taxonomy\GroupType::class,
		Taxonomy\PlaceType::class,
		Taxonomy\System::class,
	];

	/**
	 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
	 * @since  2019-10-04
	 */
	public function register_hooks() {
		add_action( 'init', [ $this, 'register_post_types' ] );
		add_action( 'init', [ $this, 'register_taxonomies' ] );
	}

	/**
	 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
	 * @since  2019-10-04
	 */
	public function register_post_types() {
		foreach ( $this->post_types as $post_type_class ) {
			$post_type = new $post_type_class();
			$this->register_content_type( $post_type );
		}
	}

	/**
	 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
	 * @since  2019-10-04
	 */
	public function register_taxonomies() {
		foreach ( $this->taxonomies as $taxonomy_class ) {
			$taxonomy = new $taxonomy_class();
			$this->register_content_type( $taxonomy );
		}
	}

	/**
	 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
	 * @since  2019-10-04
	 *
	 * @param ContentTypeInterface $post_type
	 */
	private function register_content_type ( ContentTypeInterface $post_type ) {
		$post_type->register();
	}

}
