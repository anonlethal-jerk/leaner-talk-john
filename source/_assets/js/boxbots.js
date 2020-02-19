// get the url query strings
// console.log(getParams(window.location.href));

//
// boxbots uplink
//
if (document.getElementById("boxhog")) {
	// move that boxbot button around
	var boxMove = setInterval(function(){
		var tTop = Math.random()*(window.innerHeight - document.getElementById("boxhog").offsetHeight);
		var tRight = Math.random()*(window.innerWidth - document.getElementById("boxhog").offsetWidth);
		var homer = document.querySelector('#boxhog');
		homer.style.top = tTop+"px";
		homer.style.right = tRight+"px";
	}, 8000);

	// move that boxbot shadow around
	var boxShadow = setInterval(function(){
		var tRed = Math.random()*255;
		var tGreen = Math.random()*255;
		var tBlue = Math.random()*255;
		var tOffsetX = Math.round(Math.random()*100 - 50);
		var tOffsetY = Math.round(Math.random()*100 - 50);
		var homer = document.querySelector('#boxhog');
		homer.style.boxShadow = tOffsetX+"px "+tOffsetY+"px 30px 5px rgb("+tRed+" "+tGreen+" "+tBlue+")";
	}, 2200);
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
		var pathname = window.location.pathname.replace('o__o/boxbots','o__o/boxbots/shadow');
		// console.log(pathname);
		window.history.replaceState("boxbot", "BoxBots Shadow", pathname);

	} else if (tBod.classList.contains('images--shadows')) {
		tBod.classList.remove('images--shadows');
		tBod.classList.add('images--colors');
		this.innerHTML = 'shadow';
		var pathname = window.location.pathname.replace('o__o/boxbots/shadow','o__o/boxbots');
		// console.log(pathname);
		window.history.replaceState("boxbot", "BoxBots", pathname);

	} else {
		tBod.classList.add('images--shadows');
		this.innerHTML = 'color';
		var pathname = window.location.pathname.replace('o__o/boxbots','o__o/boxbots/shadow');
		// console.log(pathname);
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
	document.getElementById('btn--date').addEventListener('click', function () {
		removeSort(this, '.sort--date', 'text');
	});
	document.getElementById('btn--title').addEventListener('click', function () {
		removeSort(this, '.sort--title', 'text');
	});
	// document.getElementById('btn--rating').addEventListener('click', function () {
	// 	removeSort(this, '.sort--rating', 'text');
	// });
}
//
// end sorting buttons
//


$(document).ready(function(){
  console.log("ready");
// //  $("#upcoming, #completed, #social").tablesorter();
//     $("#inventory").tablesorter();

/*
  $("tr").hover(function() {
  });
*/

//   $( "tr.images" ).mouseenter(function() {
//     $("#popup img.color").attr("src", "/o__o/boxbots/x__x/color-small/" + $(this).attr("data-img") + ".png");
//     $("#popup img.shadow").attr("src", "/o__o/boxbots/x__x/shadow-small/" + $(this).attr("data-img") + ".png");
//   });
//   $( "tr.images" ).mouseleave(function() {
//     $("#popup").removeClass("show");
//     $("#popup img").attr("src", "/x__x/loading.gif");
//   });

//   $( "tr.images" ).mousemove(function( event ) {
//     $("#popup").addClass("show");
// //     var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";

//     var offset = $(this).offset();
//     var tempPct = (((event.pageX - offset.left) / $(this).outerWidth()) * 1);

//     var leftTemp = Math.ceil(event.pageX - $("#popup").outerWidth()*tempPct) + "px";
//     var topTemp = Math.ceil(offset.top - $("#popup").outerHeight()) + "px";
//     $("#popup").css({
//       left : leftTemp,
//       top : topTemp
//     });
//   });

  $( "tr.imageload" ).click(function() {
    if ( $("#popup img").attr('src') == $(this).attr("data-img") ) {
      $("#popup").show();
    } else {
      $("#popup img.color").attr("src", "/o__o/boxbots/x__x/color-small/" + $(this).attr("data-img") + ".png")
      $("#popup img.shadow").attr("src", "/o__o/boxbots/x__x/shadow-small/" + $(this).attr("data-img") + ".png")
        .on('load', function() {
          if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            alert('broken image!');
          } else {
            $("#popup").show();
          }
        });
    }

    var offset = $(this).offset();
    var tempPct = (((event.pageX - offset.left) / $(this).outerWidth()) * 1);

    var leftTemp = Math.ceil(event.pageX - $("#popup").outerWidth()*tempPct) + "px";
    var topTemp = Math.ceil(offset.top - $("#popup").outerHeight()+1) + "px";
    $("#popup").css({
      left : leftTemp,
      top : topTemp,
    });
    $("#popup img").css({
      width : $(this).attr("data-img-w") + "px",
      height : $(this).attr("data-img-h") + "px"
    });
    $("#popup .shadow").css({
      opacity : Math.abs(tempPct * 2 - 1)
    });
  });
  $( "tr.imageload" ).mouseenter(function() {
    if ( $("#popup img").attr('src') == $(this).attr("data-img") ) {
      $("#popup").show();
    } else {
      $("#popup img.color").attr("src", "/o__o/boxbots/x__x/color-small/" + $(this).attr("data-img") + ".png")
      $("#popup img.shadow").attr("src", "/o__o/boxbots/x__x/shadow-small/" + $(this).attr("data-img") + ".png")
      // $("#popup img").attr('src', $(this).attr("data-img"))
        .on('load', function() {
          if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            alert('broken image!');
          } else {
            $("#popup").show();
          }
        });
    }

    var offset = $(this).offset();
    var tempPct = (((event.pageX - offset.left) / $(this).outerWidth()) * 1);

    var leftTemp = Math.ceil(event.pageX - $("#popup").outerWidth()*tempPct) + "px";
    var topTemp = Math.ceil(offset.top - $("#popup").outerHeight()+1) + "px";
    $("#popup").css({
      left : leftTemp,
      top : topTemp,
    });
    $("#popup img").css({
      width : $(this).attr("data-img-w") + "px",
      height : $(this).attr("data-img-h") + "px"
    });
    $("#popup .shadow").css({
      opacity : Math.abs(tempPct * 2 - 1)
    });
  });

  $( "tr.imageload" ).mousemove(function( event ) {
//     var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";

    var offset = $(this).offset();
    var tempPct = (((event.pageX - offset.left) / $(this).outerWidth()) * 1);

    var leftTemp = Math.ceil(event.pageX - $("#popup").outerWidth()*tempPct) + "px";
    var topTemp = Math.ceil(offset.top - $("#popup").outerHeight()+1) + "px";
    $("#popup").css({
      left : leftTemp,
      top : topTemp,
    });
    $("#popup img").css({
      width : $(this).attr("data-img-w") + "px",
      height : $(this).attr("data-img-h") + "px"
    });
    $("#popup .shadow").css({
      opacity : Math.abs(tempPct * 2 - 1)
    });
  });

  $( "tr.imageload" ).mouseleave(function() {
    $("#popup").hide();
    $("#popup").css({
      display : "-1000px",
      top : "-1000px"
    });
    $("#popup img").attr("src", "/x__x/loading.gif");
  });


});
