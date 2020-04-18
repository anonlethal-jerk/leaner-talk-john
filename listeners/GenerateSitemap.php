<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use Illuminate\Filesystem\Filesystem;
use samdark\sitemap\Sitemap;

class GenerateSitemap
{
	public function handle(Jigsaw $jigsaw)
	{
		$baseUrl = $jigsaw->getConfig('baseUrl');
		if (! $baseUrl) {
			echo("\nTo generate a sitemap.xml file, please specify a 'baseUrl' in config.php.\n\n");
			return;
		}

		$sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');
		$filePath = $jigsaw->getDestinationPath();

		collect($jigsaw->getOutputPaths())->sort()->each(function ($path) use ($baseUrl, $sitemap, $filePath) {
			if (! $this->isAsset($path)) {
				if (! is_file($filePath.$path)) {
					echo($path."\n");
					$sitemap->addItem($baseUrl . $path . '/', time(), Sitemap::DAILY);
				}
			}
		});
		$sitemap->write();
	}
	public function isAsset($path)
	{
		$t_flag = false;
		// temp folders not to use
		if (starts_with($path, '/o__-')) { $t_flag = true; };

		if (starts_with($path, '/o__o/arrow_iterations')) { $t_flag = true; };
		// if (starts_with($path, '/o__o/boxbots')) { $t_flag = true; };
		// if (starts_with($path, '/o__o/daily_photo')) { $t_flag = true; };
		if (starts_with($path, '/o__o/dirty_mousepads')) { $t_flag = true; };
		if (starts_with($path, '/o__o/dots_dots_dots')) { $t_flag = true; };
		if (starts_with($path, '/o__o/flat_mountains')) { $t_flag = true; };
		if (starts_with($path, '/o__o/fucking_windows')) { $t_flag = true; };
		if (starts_with($path, '/o__o/homepages')) { $t_flag = true; };
		if (starts_with($path, '/o__o/iphone_oil_paintings')) { $t_flag = true; };
		if (starts_with($path, '/o__o/layered_wax')) { $t_flag = true; };
		if (starts_with($path, '/o__o/profiles_exchanged')) { $t_flag = true; };
		if (starts_with($path, '/o__o/profiles_reversed')) { $t_flag = true; };
		if (starts_with($path, '/o__o/sd_to_hd')) { $t_flag = true; };
		if (starts_with($path, '/o__o/siri_sound_poems')) { $t_flag = true; };
		if (starts_with($path, '/o__o/touching_film')) { $t_flag = true; };

		if (starts_with($path, '(*)__(*)')) { $t_flag = true; };
		if (starts_with($path, '/(*)__(*)')) { $t_flag = true; };
		if (starts_with($path, '(@)__(@)')) { $t_flag = true; };
		if (starts_with($path, '/(@)__(@)')) { $t_flag = true; };

		if (starts_with($path, '0__0')) { $t_flag = true; };
		if (starts_with($path, '/0__0')) { $t_flag = true; };
		if (starts_with($path, 'x__x')) { $t_flag = true; };
		if (starts_with($path, '/x__x')) { $t_flag = true; };
		if (starts_with($path, '*__*')) { $t_flag = true; };
		if (starts_with($path, '/*__*')) { $t_flag = true; };

		return $t_flag;
	}
}
