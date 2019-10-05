<?php
/**
 * Main Plugin File
 *
 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @since  2019-10-04
 */

namespace ChrispianHBurks\WorldBuilder;

use WebDevStudios\OopsWP\Structure\Plugin\Plugin;
use ChrispianHBurks\WorldBuilder\Content\ContentRegistrar;

/**
 * Class WorldBuilderPlugin
 *
 * @author  Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @package ChrispianHBurks\WorldBuilder
 * @since   2019-10-04
 */
class WorldBuilderPlugin extends Plugin {

	protected $services = [
		ContentRegistrar::class,
	];
}
