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


	require_once($jigsaw->getSourcePath().'/_arrays/arrow_iterations.php');
	$jigsaw->setConfig('collections.arrow_iterations', $collection_arrow_iterations);
	$jigsaw->setConfig('series_arrow_iterations', $series_arrow_iterations);

	require_once($jigsaw->getSourcePath().'/_arrays/flat_mountains.php');
	$jigsaw->setConfig('collections.flat_mountains', $collection_flat_mountains);
	$jigsaw->setConfig('series_flat_mountains', $series_flat_mountains);

	require_once($jigsaw->getSourcePath().'/_arrays/fucking_windows.php');
	$jigsaw->setConfig('collections.fucking_windows', $collection_fucking_windows);
	$jigsaw->setConfig('series_fucking_windows', $series_fucking_windows);

	require_once($jigsaw->getSourcePath().'/_arrays/homepages.php');
	$jigsaw->setConfig('collections.homepages', $collection_homepages);
	$jigsaw->setConfig('series_homepages', $series_homepages);

	require_once($jigsaw->getSourcePath().'/_arrays/iphone_oil_paintings.php');
	$jigsaw->setConfig('collections.iphone_oil_paintings', $collection_iphone_oil_paintings);
	$jigsaw->setConfig('series_iphone_oil_paintings', $series_iphone_oil_paintings);

	require_once($jigsaw->getSourcePath().'/_arrays/layered_wax.php');
	$jigsaw->setConfig('collections.layered_wax', $collection_layered_wax);
	$jigsaw->setConfig('series_layered_wax', $series_layered_wax);

	require_once($jigsaw->getSourcePath().'/_arrays/profiles_exchanged.php');
	$jigsaw->setConfig('collections.profiles_exchanged', $collection_profiles_exchanged);
	$jigsaw->setConfig('series_profiles_exchanged', $series_profiles_exchanged);

	require_once($jigsaw->getSourcePath().'/_arrays/profiles_reversed.php');
	$jigsaw->setConfig('collections.profiles_reversed', $collection_profiles_reversed);
	$jigsaw->setConfig('series_profiles_reversed', $series_profiles_reversed);

	require_once($jigsaw->getSourcePath().'/_arrays/sd_to_hd.php');
	$jigsaw->setConfig('collections.sd_to_hd', $collection_sd_to_hd);
	$jigsaw->setConfig('series_sd_to_hd', $series_sd_to_hd);

	require_once($jigsaw->getSourcePath().'/_arrays/siri_sound_poems.php');
	$jigsaw->setConfig('collections.siri_sound_poems', $collection_siri_sound_poems);
	$jigsaw->setConfig('series_siri_sound_poems', $series_siri_sound_poems);

	require_once($jigsaw->getSourcePath().'/_arrays/touching_film.php');
	$jigsaw->setConfig('collections.touching_film', $collection_touching_film);
	$jigsaw->setConfig('series_touching_film', $series_touching_film);

	// or pull in array as json file... not sure why need the 'true' for assoc. array.
	//$jigsaw->setConfig('collections.dots', json_decode($jigsaw->readSourceFile('_arrays/dots.json'), true));

	// debugging helper variable...
	$jigsaw->setConfig('debugger', 'You can do it.');

	// from: https://github.com/tightenco/jigsaw/issues/365
	// PushCollections::class;
});

$events->afterBuild(function (Jigsaw $jigsaw) {
	// from: https://github.com/tightenco/jigsaw/issues/365
	// MUST BE LAST EVENT
	// PullCollections::class;
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

