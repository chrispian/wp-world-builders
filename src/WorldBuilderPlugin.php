<?php
/**
 * Short Description Goes Here
 *
 * @author Chrispian H. Burks <chrispian.burks@webvdevstudios.com>
 * @since  2019-10-04
 */

namespace ChrispianHBurks\WorldBuilder;

use WebDevStudios\OopsWP\Structure\Plugin\Plugin;
use ChrispianHBurks\WorldBuilder\Content\ContentRegistrar;

/**
 * Class Plugin
 *
 * @author Chrispian H. Burks <chrispian.burks@webdevstudios.com>
 * @since 1.0.0
 * @package ChrispianHBurks\WorldBuilderPlugin
 */
class WorldBuilderPlugin extends Plugin {

	protected $services = [
		ContentRegistrar::class,
	];
}
