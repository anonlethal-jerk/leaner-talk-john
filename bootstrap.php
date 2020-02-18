<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 * 	// Your code here
 * });
 */

$events->beforeBuild(function (Jigsaw $jigsaw) {
	// can pull in array as variable in php file...
	require_once($jigsaw->getSourcePath().'/_arrays/boxbots.php');
	$jigsaw->setConfig('collections.boxbots', $ary_boxbots);

	// debugging helper variable...
	$jigsaw->setConfig('debugger', 'You can do it.');
});
