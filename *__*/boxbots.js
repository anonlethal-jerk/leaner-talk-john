$(document).ready(function(){
  console.log("ready");
// //  $("#upcoming, #completed, #social").tablesorter();
//     $("#inventory").tablesorter();

/*
  $("tr").hover(function() {
  });
*/

  $( "tr.images" ).mouseenter(function() {
    $("#popup img.color").attr("src", "/o__o/boxbots/x__x/color-small/" + $(this).attr("data-img") + ".png");
    $("#popup img.shadow").attr("src", "/o__o/boxbots/x__x/shadow-small/" + $(this).attr("data-img") + ".png");
  });
  $( "tr.images" ).mouseleave(function() {
    $("#popup").removeClass("show");
    $("#popup img").attr("src", "/x__x/loading.gif");
  });

  $( "tr.images" ).mousemove(function( event ) {
    $("#popup").addClass("show");
//     var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";

    var offset = $(this).offset();
    var tempPct = (((event.pageX - offset.left) / $(this).outerWidth()) * 1);

    var leftTemp = Math.ceil(event.pageX - $("#popup").outerWidth()*tempPct) + "px";
    var topTemp = Math.ceil(offset.top - $("#popup").outerHeight()) + "px";
    $("#popup").css({
      left : leftTemp,
      top : topTemp
    });
  });

  $( "tr.imageload" ).click(function() {
    if ( $("#popup img").attr('src') == $(this).attr("data-img") ) {
      $("#popup").show();
    } else {
      $("#popup img").attr('src', $(this).attr("data-img"))
        .on('load', function() {
          if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            alert('broken image!');
          } else {
            $("#popup").show();
          }
        });
    }
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
  });

  $( "tr.imageload" ).mousemove(function( event ) {
//     var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";

    var offset = $(this).offset();
    var tempPct = (((event.pageX - offset.left) / $(this).outerWidth()) * 1);

    var leftTemp = Math.ceil(event.pageX - $("#popup").outerWidth()*tempPct) + "px";
    var topTemp = Math.ceil(offset.top - $("#popup").outerHeight()-1) + "px";
    $("#popup").css({
      left : leftTemp,
      top : topTemp
    });
    $("#popup .shadow").css({
      opacity : tempPct
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
