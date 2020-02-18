// get the url query strings
// console.log(getParams(window.location.href));


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
