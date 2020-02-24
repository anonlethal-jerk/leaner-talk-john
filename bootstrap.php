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
	require_once($jigsaw->getSourcePath().'/_arrays/boxbots-submissions.php');
	$jigsaw->setConfig('collections.submissions', $ary_boxbots_submissions);
	require_once($jigsaw->getSourcePath().'/_arrays/daily_photo.php');
	$jigsaw->setConfig('collections.daily_photo', $ary_daily_photo);

	// or pull in array as json file... not sure why need the 'true' for assoc. array.
	//$jigsaw->setConfig('collections.dots', json_decode($jigsaw->readSourceFile('_arrays/dots.json'), true));

	// debugging helper variable...
	$jigsaw->setConfig('debugger', 'You can do it.');
});
