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
	$jigsaw->setConfig('collections.boxbots', $collection_boxbots);
	$jigsaw->setConfig('series_boxbots', $series_boxbots);

	require_once($jigsaw->getSourcePath().'/_arrays/boxbot_submissions.php');
	$jigsaw->setConfig('collections.submissions', $collection_boxbot_submissions);
	$jigsaw->setConfig('series_boxbot_submissions', $series_boxbot_submissions);

	require_once($jigsaw->getSourcePath().'/_arrays/daily_photo.php');
	$jigsaw->setConfig('collections.daily_photo', $collection_daily_photo);
	$jigsaw->setConfig('series_daily_photo', $series_daily_photo);


	require_once($jigsaw->getSourcePath().'/_arrays/dirty_mousepads.php');
	$jigsaw->setConfig('collections.dirty_mousepads', $collection_dirty_mousepads);
	$jigsaw->setConfig('series_dirty_mousepads', $series_dirty_mousepads);

	require_once($jigsaw->getSourcePath().'/_arrays/dots_dots_dots.php');
	$jigsaw->setConfig('collections.dots_dots_dots', $collection_dots_dots_dots);
	$jigsaw->setConfig('series_dots_dots_dots', $series_dots_dots_dots);

	$jigsaw->setConfig('test_info', $ary_test_info);


	// or pull in array as json file... not sure why need the 'true' for assoc. array.
	//$jigsaw->setConfig('collections.dots', json_decode($jigsaw->readSourceFile('_arrays/dots.json'), true));

	// debugging helper variable...
	$jigsaw->setConfig('debugger', 'You can do it.');
});


// getEnvironment()
// Returns the current environment, e.g. local or production

// getCollections()
// In beforeBuild, returns an array of collection names; in afterCollections and afterBuild, returns a collection of collection items, keyed by collection name.

// getCollection($collection) (afterCollections and afterBuild only)
// Returns the items in a particular collection, keyed by their source filenames. Each item contains the variables defined for the collection item, as well as access to all collection item methods like getContent().

// getConfig()
// Returns the settings array from config.php

// getConfig($key)
// Returns a specific setting from config.php.
// Dot notation (e.g. getConfig('collections.posts.items') can be used to get nested items.

// setConfig($key, $value)
// Adds or modifies a setting in config.php.
// Dot notation can be used to set nested items.

// getSourcePath()
// Returns the absolute path to the source directory

// setSourcePath($path)
// Sets the path to the source directory

// getDestinationPath()
// Returns the absolute path to the build directory

// setDestinationPath($path)
// Sets the path to the build directory

// getOutputPaths() (afterBuild only)
// Returns an array of paths to the output files that were generated, relative to the build directory

// readSourceFile($fileName)
// Returns the contents of a file in the source directory

// writeSourceFile($fileName, $contents)
// Allows you to write a file to the source directory

// readOutputFile($fileName)
// Returns the contents of a file in the build directory

// writeOutputFile($fileName, $contents)
// Allows you to write a file to the build directory

