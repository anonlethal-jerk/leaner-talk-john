// get the url query strings
// console.log(getParams(window.location.href));

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
			// console.log(pathname);
		if (pathname.includes('/submissions/')) {
			// console.log(pathname);
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
			// console.log(pathname);
		if (pathname.includes('/submissions/')) {
			// console.log(pathname);
			pathname = pathname.replace('boxbots/submissions/shadow','boxbots/submissions');
		} else {
			pathname = pathname.replace('o__o/boxbots/shadow','o__o/boxbots');
		}
		window.history.replaceState("boxbot", "BoxBots", pathname);

	} else {
		tBod.classList.add('images--shadows');
		this.innerHTML = 'color';
		var pathname = window.location.pathname
			// console.log(pathname);
		if (pathname.includes('/submissions/')) {
			// console.log(pathname);
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
			if (aRating == true) {
				aThis.classList.add('sort--desc');
				btnSort(aElem, aType, 'reverse');
			} else {
				aThis.classList.add('sort--asc');
				btnSort(aElem, aType);
			}
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

// table image slider

//////////
// possible webp support detection:
// https://davidwalsh.name/detect-webp
//
// async function supportsWebp() {
//   if (!self.createImageBitmap) return false;

//   const webpData = 'data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=';
//   const blob = await fetch(webpData).then(r => r.blob());
//   return createImageBitmap(blob).then(() => true, () => false);
// }

// (async () => {
//   if(await supportsWebp()) {
//     console.log('does support');
//   }
//   else {
//     console.log('does not support');
//   }
// })();


Modernizr.on('webpalpha', function(result) {
	if (result) {
		// console.log('yes, webp alpha');
		var t_ext = '.webp';
	} else {
		// console.log('nah bro, webp alpha');
		var t_ext = '.png';
	}

	if (document.querySelector('.table--image_slider')) {
		// console.log('yep, table');

		var popup = document.getElementById('popup');

		var rows = document.querySelectorAll('.imageload');
		rows.forEach(function(row) {
			row.addEventListener('mouseenter', (e) => {
				if ( popup.getAttribute('src') == row.getAttribute('data-img') ) {
					popup.style.opacity = 1;
				} else {
					var imgUnder = tBod.classList.contains('images--colors') ? 'color' : 'shadow';
					var imgOver = tBod.classList.contains('images--shadows') ? 'color' : 'shadow';
					var imgUnderExt = tBod.classList.contains('images--colors') ? '.jpg' : '.png';
					var imgOverExt = tBod.classList.contains('images--shadows') ? '.jpg' : '.png';
					var pathname = window.location.pathname;
					if (pathname.includes('/submissions')) {
						popup.querySelector('.img--under').setAttribute('src', '/o__o/boxbots/submissions/x__x/'+imgUnder+'-small/'+row.getAttribute("data-img")+imgUnderExt);
						popup.querySelector('.img--over').setAttribute('src', '/o__o/boxbots/submissions/x__x/'+imgOver+'-small/'+row.getAttribute("data-img")+imgOverExt);

					 } else {
						popup.querySelector('.img--under').setAttribute('src', '/o__o/boxbots/x__x/'+imgUnder+'-small/'+row.getAttribute("data-img")+t_ext);
						popup.querySelector('.img--over').setAttribute('src', '/o__o/boxbots/x__x/'+imgOver+'-small/'+row.getAttribute("data-img")+t_ext);
					};
					popup.style.opacity = 1;
				}

				var offset = window.innerHeight - row.getBoundingClientRect().top;
				// console.log(event.clientX);
				popup.style.height = row.getAttribute('data-img-h')+'px';
				popup.style.width = row.getAttribute('data-img-w')+'px';
				popup.style.bottom = Math.round(offset)+'px';
				var t_percent = ( (row.getBoundingClientRect().width - row.getAttribute('data-img-w')) / row.getBoundingClientRect().width );
				popup.style.left = ( row.getBoundingClientRect().left + ( row.getBoundingClientRect().width - ((event.clientX - row.getBoundingClientRect().left) * t_percent) - row.getAttribute('data-img-w') ) )+'px';
			});

			row.addEventListener('mousemove', (e) => {
				var offset = window.innerHeight - row.getBoundingClientRect().top;
				// console.log(event.clientX);
				popup.style.height = row.getAttribute('data-img-h')+'px';
				popup.style.width = row.getAttribute('data-img-w')+'px';
				popup.style.bottom = Math.round(offset)+'px';
				var t_percent = ( (row.getBoundingClientRect().width - row.getAttribute('data-img-w')) / row.getBoundingClientRect().width );
				var mouse_loc_percent = (event.clientX - row.getBoundingClientRect().left) / row.getBoundingClientRect().width;
				popup.style.left = ( row.getBoundingClientRect().left + ( row.getBoundingClientRect().width - ((event.clientX - row.getBoundingClientRect().left) * t_percent) - row.getAttribute('data-img-w') ) )+'px';
				popup.querySelector('.img--over').style.opacity = Math.abs(mouse_loc_percent * 2 - 1)
			});

			row.addEventListener("mouseleave", (e) => {
				popup.style.opacity = 0;
			});

			row.addEventListener("click", (e) => {
				if ( popup.getAttribute('src') == row.getAttribute('data-img') ) {
					popup.style.opacity = 1;
				} else {
					var imgUnder = tBod.classList.contains('images--colors') ? 'color' : 'shadow';
					var imgOver = tBod.classList.contains('images--shadows') ? 'color' : 'shadow';
					var imgUnderExt = tBod.classList.contains('images--colors') ? '.jpg' : '.png';
					var imgOverExt = tBod.classList.contains('images--shadows') ? '.jpg' : '.png';
					var pathname = window.location.pathname;
					if (pathname.includes('/submissions')) {
						popup.querySelector('.img--under').setAttribute('src', '/o__o/boxbots/submissions/x__x/'+imgUnder+'-small/'+row.getAttribute("data-img")+imgUnderExt);
						popup.querySelector('.img--over').setAttribute('src', '/o__o/boxbots/submissions/x__x/'+imgOver+'-small/'+row.getAttribute("data-img")+imgOverExt);

					 } else {
						popup.querySelector('.img--under').setAttribute('src', '/o__o/boxbots/x__x/'+imgUnder+'-small/'+row.getAttribute("data-img")+t_ext);
						popup.querySelector('.img--over').setAttribute('src', '/o__o/boxbots/x__x/'+imgOver+'-small/'+row.getAttribute("data-img")+t_ext);
					};
					popup.style.opacity = 1;
				}
				var offset = window.innerHeight - row.getBoundingClientRect().top;
				popup.style.height = row.getAttribute('data-img-h')+'px';
				popup.style.width = row.getAttribute('data-img-w')+'px';
				popup.style.bottom = Math.round(offset)+'px';
				var t_percent = ( (row.getBoundingClientRect().width - row.getAttribute('data-img-w')) / row.getBoundingClientRect().width );
				popup.style.left = ( row.getBoundingClientRect().left + ( row.getBoundingClientRect().width - ((event.clientX - row.getBoundingClientRect().left) * t_percent) - row.getAttribute('data-img-w') ) )+'px';

			});
		});

		document.addEventListener("keyup", (e) => {
			// console.log("yep, table");
		});

	} // end if table image slider

}); // end modernizr on
