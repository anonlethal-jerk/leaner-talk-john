
// mobile vh helper: https://css-tricks.com/the-trick-to-viewport-units-on-mobile/
// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);
// document.documentElement.style.setProperty('--vh120', `${vh-120}px`);
// document.documentElement.style.setProperty('--vh60', `${vh-60}px`);
// We listen to the resize event
window.addEventListener('resize', () => {
	// We execute the same script as before
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);
	// document.documentElement.style.setProperty('--vh120', `${vh-120}px`);
	// document.documentElement.style.setProperty('--vh60', `${vh-60}px`);
});





var tablesort = require('tablesort');

// tablesort(el, options);
// new Tablesort(document.getElementById('table--prj_info'));





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

var tBod = document.body;

  $( "tr.imageload" ).click(function() {
    if ( $("#popup img").attr('src') == $(this).attr("data-img") ) {
      $("#popup").show();
    } else {
      $("#popup img.img--under").attr("src", "/o__o/boxbots/x__x/color-small/" + $(this).attr("data-img") + ".png")
      $("#popup img.img--over").attr("src", "/o__o/boxbots/x__x/shadow-small/" + $(this).attr("data-img") + ".png")
        .on('load', function() {
          if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            // alert('broken image!');
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

	var imgUnder = tBod.classList.contains('images--colors') ? 'color' : 'shadow';
	var imgOver = tBod.classList.contains('images--shadows') ? 'color' : 'shadow';
	var imgUnderExt = tBod.classList.contains('images--colors') ? 'jpg' : 'png';
	var imgOverExt = tBod.classList.contains('images--shadows') ? 'jpg' : 'png';
			var pathname = window.location.pathname;
			if (pathname.includes('/submissions')) {
				$("#popup img.img--under").attr("src", "/o__o/boxbots/submissions/x__x/"+imgUnder+"-small/" + $(this).attr("data-img") + "."+imgUnderExt)
				$("#popup img.img--over").attr("src", "/o__o/boxbots/submissions/x__x/"+imgOver+"-small/" + $(this).attr("data-img") + "."+imgOverExt)
	      // $("#popup img").attr('src', $(this).attr("data-img"))
	        .on('load', function() {
	          if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
	            // console.log('broken image! '+this);
	          } else {
	            $("#popup").show();
	          }
	        });
			 } else {
				$("#popup img.img--under").attr("src", "/o__o/boxbots/x__x/"+imgUnder+"-small/" + $(this).attr("data-img") + ".png")
				$("#popup img.img--over").attr("src", "/o__o/boxbots/x__x/"+imgOver+"-small/" + $(this).attr("data-img") + ".png")
	      // $("#popup img").attr('src', $(this).attr("data-img"))
	        .on('load', function() {
	          if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
	            // console.log('broken image! '+this);
	          } else {
	            $("#popup").show();
	          }
	        });
			};
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
    $("#popup .img--over").css({
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
    $("#popup .img--over").css({
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
