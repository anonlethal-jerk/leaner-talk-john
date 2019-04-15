<!-- <p><a href="http://shop.fromktoj.com/category/dots-dots-dots/">Available in the shop</a></p> -->
<?php
	for ( $i = 0; $i < count($projects['series'][$prj_index]['works']); $i++ ) {
		if ( !empty($projects['series'][$prj_index]['works'][$i]['image']) ) {
			$imgH = $projects['series'][$prj_index]['works'][$i]['height']*300;
			$imgW = $projects['series'][$prj_index]['works'][$i]['width']*300;
			$imgH = floor($imgH / 15);
			$imgW = floor($imgW / 15);
/* use this??? /<?= $projects['series'][$prj_index]['slug']; ?>/ */
?>
	<figure>
		<img src="x__x/<?= $projects['series'][$prj_index]['works'][$i]['image']; ?>" alt="<?= $projects['series'][$prj_index]['works'][$i]['title']; ?>" height="<?= $imgH; ?>px" width="<?= $imgW; ?>px">
		<figcaption>Untitled (<?= $projects['series'][$prj_index]['works'][$i]['subtitle']; ?>)</figcaption>
	</figure>
<?php
		}
	}
?>
