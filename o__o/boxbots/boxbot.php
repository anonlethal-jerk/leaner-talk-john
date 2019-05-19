<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/_config.php");
	$page_slug = $_GET['slug'];
	$bot_index = recursiveArraySearch($boxbots, $page_slug, 'slug');
	$page_title = $boxbots[$bot_index]['title'];

	$page_slug = 'boxbots';
	require_once(INCS_PATH."/_header.php");
	$page_slug = $_GET['slug'];
	// echo $page_slug.'<br>';
	// echo $bot_index.'<br>';
	// echo $page_title.'<br>';
?>
</section>

<section class="images--boxbot">
	<?php if ($flag_color == 3) { ?>
		<nav><button id="btn--toggle">color</button></nav>
	<?php
		} else {
			$bot_index_prev = $bot_index - 1;
			if ( $bot_index_prev < 0 ) {
				$bot_index_prev = count($boxbots) - 1;
			};
			$bot_index_next = $bot_index + 1;
			if ( $bot_index_next >= count($boxbots) ) {
				$bot_index_next = 0;
			};
	?>
		<nav class="nav--boxbot clearfix"><a class="nav--boxbot--next" href="<?=$boxbots[$bot_index_next]["slug"];?>"><?=$boxbots[$bot_index_next]["title"];?></a><a class="nav--boxbot--all" href="./">All BoxBots</a><a class="nav--boxbot--prev" href="<?=$boxbots[$bot_index_prev]["slug"];?>"><?=$boxbots[$bot_index_prev]["title"];?></a></nav>
		<nav class="nav--boxbot"><button id="btn--toggle">Shadow</button></nav>
	<?php } ?>
	<figure class="boxbot boxbot--large">
		<div class="bot_hover">
			<img class="shadow lazyload" src="/x__x/loading.gif" data-src="x__x/shadow-large/<?=$boxbots[$bot_index]["filename"];?>.png" width="<?=($boxbots[$bot_index]["largehalfwidthpx"]);?>" height="<?=($boxbots[$bot_index]["largehalfheightpx"]);?>" alt="<?=$boxbots[$bot_index]["title"];?> BoxBot" title="<?=$boxbots[$bot_index]["title"];?>, <?= $boxbots[$bot_index]["nice_date"]; ?>, <?=$boxbots[$bot_index]["height"];?> &times; <?=$boxbots[$bot_index]["width"];?> mm">
			<img class="color lazyload" src="/x__x/loading.gif" data-src="x__x/color-large/<?=$boxbots[$bot_index]["filename"];?>.png" width="<?=($boxbots[$bot_index]["largehalfwidthpx"]);?>" height="<?=($boxbots[$bot_index]["largehalfheightpx"]);?>" alt="<?=$boxbots[$bot_index]["title"];?> BoxBot" title="<?=$boxbots[$bot_index]["title"];?>, <?= $boxbots[$bot_index]["nice_date"]; ?>, <?=$boxbots[$bot_index]["height"];?> &times; <?=$boxbots[$bot_index]["width"];?> mm">
		</div>
		<figcaption>
			<cite><?=$boxbots[$bot_index]["title"];?></cite>, <?= $boxbots[$bot_index]["nice_date"]; ?>, <?=$boxbots[$bot_index]["height"];?> × <?=$boxbots[$bot_index]["width"];?> mm
			<!-- <span class="stars">★★★☆☆</span> -->
		</figcaption>

	</figure>
</section>

<script>
	// var tState = document.querySelector('.images--boxbots');
	var tState = document.body;
	tState.classList.add('images--color');
	document.getElementById('btn--toggle').addEventListener('click', function () {
		if (tState.classList.contains('images--colors')) {
			tState.classList.remove('images--colors');
			tState.classList.add('images--shadows');
			this.innerHTML = 'Color';
		} else if (tState.classList.contains('images--shadows')) {
			tState.classList.remove('images--shadows');
			tState.classList.add('images--color');
			this.innerHTML = 'Shadow';
		} else {
			tState.classList.add('images--shadows');
			this.innerHTML = 'Color';
		}
	});
</script>

<?php
		require_once(INCS_PATH."/_footer.php");
?>
