/* Author: Jonathan Keller Keller */

$(document).ready(function(){
  $('#hugemonitor').html('&#8593;<br />Huge monitor<br />=<br />Small Penis');
});

// toggle the header & footer
var toggleflag = 1;
$('#toggleheaderfooter a').click(function() {
  $('header, footer').toggle();
  if (toggleflag == 1) {
    $('#toggleheaderfooter a').text('Ahh, better... but now how am I supposed to navigate the site?');
    toggleflag = 0;
  } else {
    $('#toggleheaderfooter a').text('Oww, my eyes!!');
    toggleflag = 1;
  }
  return false;
});

// randomize the direction and speed of header/footer zigzags when resizing window
$(document).ready(function(){
  var n10a = Math.floor(Math.random()*200)-100;
  var n20a = Math.floor(Math.random()*200)-100;
  var n30a = Math.floor(Math.random()*200)-100;
  var n40a = Math.floor(Math.random()*200)-100;
  var n50a = Math.floor(Math.random()*200)-100;
  var n60a = Math.floor(Math.random()*200)-100;
  var n70a = Math.floor(Math.random()*200)-100;
  var n80a = Math.floor(Math.random()*200)-100;
  var n90a = Math.floor(Math.random()*200)-100;
  var n100a = Math.floor(Math.random()*200)-100;
  var n110a = Math.floor(Math.random()*200)-100;
  var n120a = Math.floor(Math.random()*200)-100;
  var n130a = Math.floor(Math.random()*200)-100;
  var n140a = Math.floor(Math.random()*200)-100;
  var n10b = Math.floor(Math.random()*200)-100;
  var n20b = Math.floor(Math.random()*200)-100;
  var n30b = Math.floor(Math.random()*200)-100;
  var n40b = Math.floor(Math.random()*200)-100;
  var n50b = Math.floor(Math.random()*200)-100;
  var n60b = Math.floor(Math.random()*200)-100;
  var n70b = Math.floor(Math.random()*200)-100;
  var n80b = Math.floor(Math.random()*200)-100;
  var n90b = Math.floor(Math.random()*200)-100;
  var n100b = Math.floor(Math.random()*200)-100;
  var n110b = Math.floor(Math.random()*200)-100;
  var n120b = Math.floor(Math.random()*200)-100;
  var n130b = Math.floor(Math.random()*200)-100;
  var n140b = Math.floor(Math.random()*200)-100;

  var cssflag = 0;

  $(window).resize(function() {
    if (cssflag == 0) {
      $('.headerlines .z10').css("background-position",n10a+"% -17px");
      $('.headerlines .z20').css("background-position",n20a+"% 0");
      $('.headerlines .z30').css("background-position",n30a+"% -17px");
      $('.headerlines .z40').css("background-position",n40a+"% 0");
      $('.headerlines .z50').css("background-position",n50a+"% -17px");
      $('.headerlines .z60').css("background-position",n60a+"% 0");
      $('.headerlines .z70').css("background-position",n70a+"% -17px");
      $('.headerlines .z80').css("background-position",n80a+"% 0");
      $('.headerlines .z90').css("background-position",n90a+"% -17px");
      $('.headerlines .z100').css("background-position",n100a+"% 0");
      $('.headerlines .z110').css("background-position",n110a+"% -17px");
      $('.headerlines .z120').css("background-position",n120a+"% 0");
      $('.headerlines .z130').css("background-position",n130a+"% -17px");
      $('.headerlines .z140').css("background-position",n140a+"% 0");
      $('.footerlines .z10').css("background-position",n10b+"% -51px");
      $('.footerlines .z20').css("background-position",n20b+"% -34px");
      $('.footerlines .z30').css("background-position",n30b+"% -51px");
      $('.footerlines .z40').css("background-position",n40b+"% -34px");
      $('.footerlines .z50').css("background-position",n50b+"% -51px");
      $('.footerlines .z60').css("background-position",n60b+"% -34px");
      $('.footerlines .z70').css("background-position",n70b+"% -51px");
      $('.footerlines .z80').css("background-position",n80b+"% -34px");
      $('.footerlines .z90').css("background-position",n90b+"% -51px");
      $('.footerlines .z100').css("background-position",n100b+"% -34px");
      $('.footerlines .z110').css("background-position",n110b+"% -51px");
      $('.footerlines .z120').css("background-position",n120b+"% -34px");
      $('.footerlines .z130').css("background-position",n130b+"% -51px");
      $('.footerlines .z140').css("background-position",n140b+"% -34px");
      cssflag = 1;
    }
  });
});
