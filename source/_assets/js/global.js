/**
 * Get the URL parameters
 * source: https://css-tricks.com/snippets/javascript/get-url-variables/
 * from: https://gomakethings.com/getting-all-query-string-values-from-a-url-with-vanilla-js/
 * @param  {String} url The URL
 * @return {Object}     The URL parameters
 */
var getParams = function (url) {
	var params = {};
	var parser = document.createElement('a');
	parser.href = url;
	var query = parser.search.substring(1);
	var vars = query.split('&');
	for (var i = 0; i < vars.length; i++) {
		var pair = vars[i].split('=');
		params[pair[0]] = decodeURIComponent(pair[1]);
	}
	return params;
};


// move that home button around
var boxMove = setInterval(function(){
	var tTop = Math.random()*(window.innerHeight - document.getElementById("groundhog").offsetHeight);
	var tLeft = Math.random()*(window.innerWidth - document.getElementById("groundhog").offsetWidth);
	var homer = document.querySelector('#groundhog');
	homer.style.top = tTop+"px";
	homer.style.left = tLeft+"px";
}, 9000);

// move that home shadow around
var boxShadow = setInterval(function(){
	var tRed = Math.random()*255;
	var tGreen = Math.random()*255;
	var tBlue = Math.random()*255;
	var tOffsetX = Math.round(Math.random()*100 - 50);
	var tOffsetY = Math.round(Math.random()*100 - 50);
	var homer = document.querySelector('#groundhog');
	homer.style.boxShadow = tOffsetX+"px "+tOffsetY+"px 30px 5px rgb("+tRed+" "+tGreen+" "+tBlue+")";
}, 2000);

