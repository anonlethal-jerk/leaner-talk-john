// get the url query strings
// console.log(getParams(window.location.href));

//
// boxbots uplink
//
if (document.getElementById("boxhog")) {
	// start to move that boxbot button around
	var boxStart = setTimeout(function(){
		var tTop = Math.random()*(window.innerHeight - document.getElementById("boxhog").offsetHeight);
		var tRight = Math.random()*(window.innerWidth - document.getElementById("boxhog").offsetWidth);
		var boxer = document.querySelector('#boxhog');
		boxer.style.top = tTop+"px";
		boxer.style.right = tRight+"px";
	}, 7000);

	// move that boxbot button around
	var boxStart = setInterval(function(){
		var tTop = Math.random()*(window.innerHeight - document.getElementById("boxhog").offsetHeight);
		var tRight = Math.random()*(window.innerWidth - document.getElementById("boxhog").offsetWidth);
		var boxer = document.querySelector('#boxhog');
		boxer.style.top = tTop+"px";
		boxer.style.right = tRight+"px";
	}, 19000);

	// move that boxbot shadow around
	var boxShadow = setInterval(function(){
		var tRed = Math.random()*255;
		var tGreen = Math.random()*255;
		var tBlue = Math.random()*255;
		var tOffsetX = Math.round(Math.random()*100 - 50);
		var tOffsetY = Math.round(Math.random()*100 - 50);
		var boxer = document.querySelector('#boxhog');
		boxer.style.boxShadow = tOffsetX+"px "+tOffsetY+"px 30px 5px rgb("+tRed+" "+tGreen+" "+tBlue+")";
	}, 2600);
}
//
// end boxbots uplink
//

//
// toggle shadow & color
//
// var tBod = document.querySelector('.images--boxbots');
var tBod = document.body;
document.getElementById('btn--toggle').addEventListener('click', function () {
	if (tBod.classList.contains('images--colors')) {
		tBod.classList.remove('images--colors');
		tBod.classList.add('images--shadows');
		this.innerHTML = 'color';
		var pathname = window.location.pathname
			console.log(pathname);
		if (pathname.includes('/submissions/')) {
			console.log(pathname);
			pathname = pathname.replace('boxbots/submissions','boxbots/submissions/shadow');
		} else {
			pathname = pathname.replace('o__o/boxbots','o__o/boxbots/shadow');
		}
		window.history.replaceState("boxbot", "BoxBots Shadow", pathname);

	} else if (tBod.classList.contains('images--shadows')) {
		tBod.classList.remove('images--shadows');
		tBod.classList.add('images--colors');
		this.innerHTML = 'shadow';
		var pathname = window.location.pathname
			console.log(pathname);
		if (pathname.includes('/submissions/')) {
			console.log(pathname);
			pathname = pathname.replace('boxbots/submissions/shadow','boxbots/submissions');
		} else {
			pathname = pathname.replace('o__o/boxbots/shadow','o__o/boxbots');
		}
		window.history.replaceState("boxbot", "BoxBots", pathname);

	} else {
		tBod.classList.add('images--shadows');
		this.innerHTML = 'color';
		var pathname = window.location.pathname
			console.log(pathname);
		if (pathname.includes('/submissions/')) {
			console.log(pathname);
			pathname = pathname.replace('boxbots/submissions','boxbots/submissions/shadow');
		} else {
			pathname = pathname.replace('o__o/boxbots','o__o/boxbots/shadow');
		}
		window.history.replaceState("boxbot", "BoxBots Shadow", pathname);
	}
});
//
// end toggle shadow & color
//

//
// sorting buttons
//
if (document.getElementById('sort--bots') ) {
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
			// console.log(a);
			// console.log(a.querySelector('.sort--hide '+aElem));
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

	function removeSort(aThis, aElem, aType=null, aRating) {
		var list = document.getElementById('sort--bots');
		if (list.classList.contains('sorting--rating')) {
			list.classList.remove('sorting--rating');
		}
		if (aRating == true) {
			list.classList.add('sorting--rating');
		}
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

	if (document.getElementById('btn--height') ) {
		document.getElementById('btn--height').addEventListener('click', function () {
			removeSort(this, '.sort--height');
		});
	}
	if (document.getElementById('btn--width') ) {
		document.getElementById('btn--width').addEventListener('click', function () {
			removeSort(this, '.sort--width');
		});
	}
	if (document.getElementById('btn--date') ) {
		document.getElementById('btn--date').addEventListener('click', function () {
			removeSort(this, '.sort--date', 'text');
		});
	}
	if (document.getElementById('btn--title') ) {
		// document.getElementById('btn--title').addEventListener('click', function () {
		// 	removeSort(this, '.sort--title', 'text');
		// });
	}
	if (document.getElementById('btn--rating') ) {
		document.getElementById('btn--rating').addEventListener('click', function () {
			removeSort(this, '.sort--rating', null, true);
		});
	}
}
//
// end sorting buttons
//

