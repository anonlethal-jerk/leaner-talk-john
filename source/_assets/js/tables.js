// var tablesort = require('tablesort');

// tablesort(el, options);
// new Tablesort(document.getElementById('table--prj_info'));


// if (Modernizr.webpalpha) {
// 	console.log('yes, webp alpha');
// } else {
// 	console.log('nah bro, webp alpha');
// }

Modernizr.on('webpalpha', function(result) {
	if (result) {
		// console.log('yes, webp alpha');
		var t_ext = '.webp';
	} else {
		// console.log('nah bro, webp alpha');
		var t_ext = '.png';
	}

	// table image slider
	if (document.querySelector('.table--image_slider')) {
		// console.log('yep, table');

		var popup = document.getElementById('popup');

		var rows = document.querySelectorAll('.imageload');
		rows.forEach(function(row) {
			row.addEventListener('mouseenter', (e) => {
				if ( popup.getAttribute('src') == row.getAttribute('data-img') ) {
					popup.style.opacity = 1;
				} else {
					popup.style.opacity = 1;
					// check for extension
					if (row.getAttribute("data-img").includes('.jpg') || row.getAttribute("data-img").includes('.png')) {
						popup.querySelector('.img--under').setAttribute('src', 'x__x/small/'+row.getAttribute("data-img"));
					} else {
						popup.querySelector('.img--under').setAttribute('src', 'x__x/small/'+row.getAttribute("data-img")+t_ext);
					}
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
				popup.style.left = ( row.getBoundingClientRect().left + ( row.getBoundingClientRect().width - ((event.clientX - row.getBoundingClientRect().left) * t_percent) - row.getAttribute('data-img-w') ) )+'px';
			});

			row.addEventListener("mouseleave", (e) => {
				popup.style.opacity = 0;
			});

			row.addEventListener("click", (e) => {
				popup.style.opacity = 1;
				// check for extension
				if (row.getAttribute("data-img").includes('.jpg') || row.getAttribute("data-img").includes('.png')) {
					popup.querySelector('.img--under').setAttribute('src', 'x__x/small/'+row.getAttribute("data-img"));
				} else {
					popup.querySelector('.img--under').setAttribute('src', 'x__x/small/'+row.getAttribute("data-img")+t_ext);
				}
				var offset = window.innerHeight - row.getBoundingClientRect().top;
				// console.log(event.clientX);
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

}); // end modernizr.on
