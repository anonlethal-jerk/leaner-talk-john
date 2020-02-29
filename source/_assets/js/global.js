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


// super boxes...
if ( document.getElementById('warthog') == null) {
	var hogs = document.querySelectorAll('.hog');
	hogs.forEach(function(hog) {
		// move that home button around
		var t_speed = Math.round(Math.random()*10 + 8);
		var t_shadow_speed = Math.round(Math.random()*4 + 1);
		var move_hog = setInterval(function(){
			var t_top = Math.random()*(window.innerHeight - hog.offsetHeight);
			var t_left = Math.random()*(window.innerWidth - hog.offsetWidth);
			hog.style.top = t_top+"px";
			hog.style.left = t_left+"px";
			hog.style.transition = "top "+t_speed+"s, left "+t_speed+"s, box-shadow "+t_shadow_speed+"s";
		}, t_speed*1000);

		// move that home shadow around
		var move_shadow = setInterval(function(){
			var t_red = Math.random()*255;
			var t_green = Math.random()*255;
			var t_blue = Math.random()*255;
			// t_green = t_red;
			// t_blue = t_red;
			var t_offset_x = Math.round(Math.random()*100 - 50);
			var t_offset_y = Math.round(Math.random()*100 - 50);
			var t_offset_half_x = Math.round(t_offset_x/2);
			var t_offset_half_y = Math.round(t_offset_y/2);
			hog.style.boxShadow = t_offset_x+"px "+t_offset_y+"px 30px 5px rgba("+t_red+", "+t_green+", "+t_blue+", 1), inset "+t_offset_half_x+"px "+t_offset_half_y+"px 15px 5px rgba("+t_red+", "+t_green+", "+t_blue+", .5)";
		}, t_shadow_speed*1000);
	});
}
