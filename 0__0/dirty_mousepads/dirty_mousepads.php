<section class="prj_images">
<?php
	for ( $i = 0; $i < count($projects['series'][$prj_index]['works']); $i++ ) {
		if ( !empty($projects['series'][$prj_index]['works'][$i]['image']) ) {
			$imgH = $projects['series'][$prj_index]['works'][$i]['height']*300+150;
			$imgW = $projects['series'][$prj_index]['works'][$i]['width']*300+150;
			// // resize based on 1200 max width/height & retina...
			// if ($imgH > $imgW) {
			//     $imgMod = 1200/$imgH;
			// } else {
			//     $imgMod = 1200/$imgW;
			// }
			// $imgH = floor($imgH*$imgMod / 4);
			// $imgW = floor($imgW*$imgMod / 4);
			$imgH = floor($imgH / 20);
			$imgW = floor($imgW / 20);
?>
	<figure>
		<img src="x__x/<?= $projects['series'][$prj_index]['works'][$i]['image']; ?>" alt="<?= $projects['series'][$prj_index]['works'][$i]['title']; ?>" height="<?= $imgH; ?>px" width="<?= $imgW; ?>px">
		<figcaption><cite><?= $projects['series'][$prj_index]['works'][$i]['title']; ?></cite></figcaption>
	</figure>
<?php
		}
	}
?>
</section>
