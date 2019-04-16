<section class="images images--boxbots">
	<nav class="nav--boxbots"><button id="btn--toggle">shadow</button> sort by: <button id="btn--height">height</button> <button id="btn--width">width</button> <!-- <button id="btn--ratio">ratio</button> --> <!-- <button id="btn--area">area</button> --> <button id="btn--date" class="sort--desc">date</button> <button id="btn--title">title</button> <!-- <button id="btn--stars">stars</button> --></nav>

<div id="sort--bots">
<!--
<?php
		// for ( $i = 0; $i < count($projects['series'][$prj_index]['works']); $i++ ) {
		foreach(array_reverse($projects['series'][$prj_index]['works']) as $boxbot) {
?>
<?php

						/*
						// Obtain a list of columns
						foreach ($boxbots as $key => $row) {
								$fullareapx[$key]  = $row['fullheightmm'] * $row['fullwidthmm'];
								$fullheightmm[$key]  = $row['fullheightmm'];
								$filename[$key] = $row['filename'];
						}

						// Sort the data with volume descending, edition ascending
						// Add $data as the last parameter, to sort by the common key
						array_multisort($fullheightmm, SORT_ASC, $filename, SORT_DESC, $boxbots);
						*/
?>

--><figure>
<?php if (!empty( $boxbot["offsetbottompx"] )) { ?>
		<a style="bottom:<?=$boxbot["offsetbottompx"];?>" href="<?=$boxbot["slug"];?>">
<?php } else { ?>
		<a href="boxbot.php?slug=<?=$boxbot["slug"];?>">
<?php }; ?>
			<img class="shadow lazyload" src="/x__x/loading.gif" data-src="x__x/shadow-small/<?=$boxbot["filename"];?>.png" width="<?=($boxbot["percenthalfwidthpx"]);?>" height="<?=($boxbot["percenthalfheightpx"]);?>" alt="<?=$boxbot["title"];?> BoxBot" title="<?=$boxbot["title"];?>, <?= $boxbot["date"]; ?>, <?=$boxbot["height"];?> &times; <?=$boxbot["width"];?> mm">
			<img class="color lazyload" src="/x__x/loading.gif" data-src="x__x/color-small/<?=$boxbot["filename"];?>.png" width="<?=($boxbot["percenthalfwidthpx"]);?>" height="<?=($boxbot["percenthalfheightpx"]);?>" alt="<?=$boxbot["title"];?> BoxBot" title="<?=$boxbot["title"];?>, <?= $boxbot["date"]; ?>, <?=$boxbot["height"];?> &times; <?=$boxbot["width"];?> mm">
		</a>
		<div class="sort--hide">
			<p class="sort--title"><?=$boxbot["title"];?></p>
			<p class="sort--date"><?=$boxbot["id"];?></p>
			<p class="sort--height"><?=$boxbot["height"];?></p>
			<p class="sort--width"><?=$boxbot["width"];?></p>
			<p class="sort--area"><?= ($boxbot["height"] * $boxbot["width"]); ?></p>
		</div>
<!--
		<figcaption>
			<?= $boxbot["date"]; ?><br><span class="stars">★★★☆☆</span><br>
		</figcaption>
-->
<!--
		<figcaption>
			<cite><?=$boxbot["title"];?></cite><br>
			<?= $boxbot["date"]; ?><br>
			<?=$boxbot["fullheightmm"];?> × <?=$boxbot["fullwidthmm"];?> mm
		</figcaption>
-->
	</figure><!--
<?php
		}
?>
-->
</div>
<!--     <div class="bot--large">
        <img class="shadow" src="x__x/shadow-large/<?=$boxbot["filename"];?>.png" width="<?=($boxbot["largehalfwidthpx"]);?>" height="<?=($boxbot["largehalfheightpx"]);?>" alt="<?=$boxbot["title"];?> BoxBot Silhouette" title="<?=$boxbot["title"];?>, <?= $boxbot["date"]; ?>, <?=$boxbot["height"];?> &times; <?=$boxbot["width"];?> mm">
        <img class="color" src="x__x/color-large/<?=$boxbot["filename"];?>.png" width="<?=($boxbot["largehalfwidthpx"]);?>" height="<?=($boxbot["largehalfheightpx"]);?>" alt="<?=$boxbot["title"];?> BoxBot" title="<?=$boxbot["title"];?>, <?= $boxbot["date"]; ?>, <?=$boxbot["height"];?> &times; <?=$boxbot["width"];?> mm">
    </div>
 --></section>

    <div id="popup">
      <img class="color" src="/x__x/loading.gif" alt="" />
      <img class="shadow" src="/x__x/loading.gif" alt="" />
    </div>

<script>
	function btnSort(aElem, aType, aOrder) {
		var list = document.getElementById('sort--bots');

		var items = list.childNodes;
		var itemsArr = [];
		for (var i in items) {
			if (items[i].nodeType == 1) { // get rid of the whitespace text nodes
				itemsArr.push(items[i]);
			}
		}

		itemsArr.sort(function(a, b) {
			if (aType =='text') {
				var aa = a.querySelector('.sort--hide '+aElem).innerHTML.toLowerCase();
				var bb = b.querySelector('.sort--hide '+aElem).innerHTML.toLowerCase();
			} else {
				var aa = parseFloat(a.querySelector('.sort--hide '+aElem).innerHTML);
				var bb = parseFloat(b.querySelector('.sort--hide '+aElem).innerHTML);
			}

			return aa == bb
				? 0
				: (aa > bb ? 1 : -1);
		});

		if (aOrder == "reverse") {
			for (i = itemsArr.length - 1; i >= 0; --i) {
				list.appendChild(itemsArr[i]);
			}
		} else {
			for (i = 0; i < itemsArr.length; ++i) {
				list.appendChild(itemsArr[i]);
			}
		}
	}

	function removeSort(aThis, aElem, aType=null) {
		if (aThis.classList.contains('sort--asc')) {
			aThis.classList.remove('sort--asc');
			aThis.classList.add('sort--desc');
			btnSort(aElem, aType, 'reverse');
		} else if (aThis.classList.contains('sort--desc')) {
			aThis.classList.remove('sort--desc');
			aThis.classList.add('sort--asc');
			btnSort(aElem, aType);
		} else {
			var active = document.querySelector('.sort--desc');
			if (active) {
				active.classList.remove('sort--desc');
			}
			var active = document.querySelector('.sort--asc');
			if (active) {
				active.classList.remove('sort--asc');
			}
			aThis.classList.add('sort--asc');
			btnSort(aElem, aType);
		}
	}

	document.getElementById('btn--height').addEventListener('click', function () {
		removeSort(this, '.sort--height');
	});
	document.getElementById('btn--width').addEventListener('click', function () {
		removeSort(this, '.sort--width');
	});
	document.getElementById('btn--area').addEventListener('click', function () {
		removeSort(this, '.sort--area');
	});
	document.getElementById('btn--date').addEventListener('click', function () {
		removeSort(this, '.sort--date', 'text');
	});
	document.getElementById('btn--title').addEventListener('click', function () {
		removeSort(this, '.sort--title', 'text');
	});

	// var tState = document.querySelector('.images--boxbots');
	var tState = document.body;
	tState.classList.add('images--color');
	document.getElementById('btn--toggle').addEventListener('click', function () {
		if (tState.classList.contains('images--colors')) {
			tState.classList.remove('images--colors');
			tState.classList.add('images--shadows');
			this.innerHTML = 'color';
		} else if (tState.classList.contains('images--shadows')) {
			tState.classList.remove('images--shadows');
			tState.classList.add('images--colors');
			this.innerHTML = 'shadow';
		} else {
			tState.classList.add('images--shadows');
			this.innerHTML = 'color';
		}
	});

	//	// from: https://stackoverflow.com/questions/12551920/capturing-all-the-a-click-event
	// document.querySelector('.images--boxbots').onclick = function(e){
	//   e = e || event;
	//   var from = findParent('a',e.target || e.srcElement);
	//   if (from){
	//      /* it's a link, actions here */
	//      console.log(from.href);
	//      console.log(e.target.src);
	//      console.log(e.target);
	//     document.querySelector('.bot--large').classList.add('is_visible');
	//     document.querySelector('.bot--large .shadow').src = e.target.src.replace("color-small", "shadow-large");
	//     document.querySelector('.bot--large .color').src = e.target.src.replace("color-small", "color-large");
	// 	e.preventDefault();
	//   }
	// }
	// //find first parent with tagName [tagname]
	// function findParent(tagname,el){
	//   while (el){
	//     if ((el.nodeName || el.tagName).toLowerCase()===tagname.toLowerCase()){
	//       return el;
	//     }
	//     el = el.parentNode;
	//   }
	//   return null;
	// }
</script>
