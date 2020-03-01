// super boxes...
var hogs = document.querySelectorAll('.hog');
var warthog = document.getElementById('warthog');
hogs.forEach(function(hog) {
	var t_speed = Math.round(Math.random()*15 + 12);
	t_speed = 2;
	var t_shadow_speed = Math.random()*7 + 4;
	var hog_half_height = warthog.offsetHeight/2;
	var hog_half_width = warthog.offsetWidth/2;
	var start_hog = setTimeout(function(){
		var t_height = (window.innerHeight - hog_half_height)/2 * .2;
		var t_width = (window.innerWidth - hog_half_width)/2 * .25;
		hog.style.padding = t_height+"px "+t_width+"px";
		var t_top = (window.innerHeight/2 - hog_half_height - t_height);
		var t_left = (window.innerWidth/2 - hog_half_width - t_width);
		hog.style.top = t_top+"px";
		hog.style.left = t_left+"px";
		// hog.style.transition = "top 2s, left 2s, box-shadow 2s, padding 2s";
		hog.style.transition = "top "+t_speed+"s, left "+t_speed+"s, box-shadow "+t_shadow_speed+"s, padding "+t_speed+"s";
	}, 100);
	// move that home button around
	// var move_hog = setInterval(function(){
	// 	t_speed = 1000;
	// 	var t_top = Math.random()*(window.innerHeight - hog.offsetHeight);
	// 	var t_left = Math.random()*(window.innerWidth - hog.offsetWidth);

	// 	var t_width = Math.random()*80 + 50;
	// 	var t_height = Math.random()*80 + 50;
	// 	hog.style.padding = t_height+"px "+t_width+"px";
	// 	var t_top = (window.innerHeight/2 - hog_half_height - t_height);
	// 	var t_left = (window.innerWidth/2 - hog_half_width - t_width);
	// 	hog.style.top = t_top+"px";
	// 	hog.style.left = t_left+"px";
	// }, t_speed*1000);

	// move that home shadow around
	var move_shadow = setInterval(function(){
		var t_red = Math.random()*255;
		var t_green = Math.random()*255;
		var t_blue = Math.random()*255;
		var t_alpha = Math.random()*.33 + .67;
		// t_green = t_red;
		// t_blue = t_red;
		var t_offset_x = Math.round(Math.random()*300 - 150);
		var t_offset_y = Math.round(Math.random()*300 - 150);
		var t_offset_inset_x = Math.round(t_offset_x/3);
		var t_offset_inset_y = Math.round(t_offset_y/3);
		hog.style.boxShadow = t_offset_x+"px "+t_offset_y+"px 60px 3px rgba("+t_red+", "+t_green+", "+t_blue+", "+t_alpha+"), inset "+t_offset_inset_x+"px "+t_offset_inset_y+"px 60px 3px rgba("+t_red+", "+t_green+", "+t_blue+", "+(t_alpha*.7)+")";
	}, t_shadow_speed*1000);
});

// change the background color
var bg_color = document.querySelector('.home_color');
var bg_color_state = 1;
var start_bg = setTimeout(function(){
	var t_red = Math.random()*255;
	var t_green = Math.random()*255;
	var t_blue = Math.random()*255;
	var t_red2 = Math.random()*255;
	var t_green2 = Math.random()*255;
	var t_blue2 = Math.random()*255;
	bg_color.style.background = "radial-gradient(circle, rgba("+t_red+", "+t_green+", "+t_blue+", 1) 0%, rgba("+t_red2+", "+t_green2+", "+t_blue2+", 1) 100%)";
	bg_color.style.opacity = 1;
	bg_color_state = 1;
}, 1000);
var change_bg = setInterval(function(){
	var t_red = Math.random()*255;
	var t_green = Math.random()*255;
	var t_blue = Math.random()*255;
	var t_red2 = Math.random()*255;
	var t_green2 = Math.random()*255;
	var t_blue2 = Math.random()*255;
	if ( bg_color_state < .1 ) {
		bg_color.style.background = "radial-gradient(circle, rgba("+t_red+", "+t_green+", "+t_blue+", 1) 0%, rgba("+t_red2+", "+t_green2+", "+t_blue2+", 1) 100%)";
		bg_color.style.opacity = 1;
		bg_color_state = 1;
	} else if ( bg_color_state > .9 ) {
		document.body.style.background = "radial-gradient(circle, rgba("+t_red+", "+t_green+", "+t_blue+", 1) 0%, rgba("+t_red2+", "+t_green2+", "+t_blue2+", 1) 100%)";
		bg_color.style.opacity = 0;
		bg_color_state = 0;
	};
}, 100000);

