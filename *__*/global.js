// move that home button around
var boxMove = setInterval(function(){
    var tTop = Math.random()*(window.innerHeight - document.getElementById("groundhog").offsetHeight);
    var tLeft = Math.random()*(window.innerWidth - document.getElementById("groundhog").offsetWidth);
    var homer = document.querySelector('#groundhog');
    homer.style.top = tTop+"px";
    homer.style.left = tLeft+"px";
}, 10000);

// move that home button around
var boxShadow = setInterval(function(){
    var tRed = Math.random()*255;
    var tGreen = Math.random()*255;
    var tBlue = Math.random()*255;
    var tOffsetX = Math.random()*100 - 50;
    var tOffsetY = Math.random()*100 - 50;
    var homer = document.querySelector('#groundhog');
    homer.style.boxShadow = tOffsetX+"px "+tOffsetY+"px 30px 5px rgb("+tRed+" "+tGreen+" "+tBlue+")";
}, 2000);
