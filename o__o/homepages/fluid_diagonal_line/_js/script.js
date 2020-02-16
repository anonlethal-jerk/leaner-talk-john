/* Author: JK Keller, Dilettante Coder */

$(document).ready(function() {
	/* inititalize the size of the figcaption text */
	var winWidth = $(window).width();
	$('figcaption').css('font-size', (winWidth/15)+'px');
	$('figcaption').css('line-height', (winWidth/15)+'px');

	/* How many projects & archive projects are there? */
	var howManyPrjs = $('#prj_wrapper').children('.project').length;
	var howManyArchs = $('#archive_wrapper').children('.project').length;
	/* what are the padding values for the projects wrapper? */
	var prjTop = 15;
	var prjBtm = 185;
	/* what column width and row height to use? */
	var colWidth = 220;
	var rowHeight = 240;
	/* how far apart should images be in stack? */
	var pileDiff = 12;

	/* store starting position percentages */
	var startPercents = new Array();
	/* scrolling vars: current position, state of transition, transition length, wait after transition length */
	var scrollerPos = 0;
	var scrollState = "top";
	var scrollChange = 2000;
	var scrollWait = 300;

	/* set initial scroller bg height */
	var howManyCols = Math.ceil((winWidth-colWidth)/colWidth);
	$('#bg_grid').css('width', (howManyCols*4)+'px');
	var fullHeight = (Math.floor((howManyPrjs-1)/howManyCols)+1) * rowHeight + scrollChange + $(window).height()/1.5;
	$('#bg_scroller').css('height', fullHeight+'px');

	/* ------------------------------------------
		Project & Image positions initialization
	--------------------------------------------- */
	for (var i=1; i<=howManyPrjs; i++) {
		/* distribute percetages based on number of projects */
		var tPercent = (100/(howManyPrjs-1))*(i-1);
		/* add to starting percentages array */
		startPercents[i-1] = tPercent;
		/* set css values */
		$('#prj_wrapper .project:nth-child('+i+')').css('top', tPercent+'%');
		$('#prj_wrapper .project:nth-child('+i+')').css('left', tPercent+'%');
		$('#prj_wrapper .project:nth-child('+i+')').css('z-index', (howManyPrjs+1 - i)*10);

		/* How many images within each project are there? */
		var howManyImgs = $('#prj_wrapper .project:nth-child('+i+') figure a').children('img').length;
		/* cycle through the images - initialize values */
		for (var j=1; j<=howManyImgs; j++) {
			/* vary distances based on odd or even number of images */
			var tPos = ((j-1)*pileDiff) - (pileDiff * Math.floor(howManyImgs/2)) - ((howManyImgs%2 - 1) * (pileDiff/2));
			$('#prj_wrapper .project:nth-child('+i+') figure a img:nth-child('+j+')').css('top', tPos+'px');
			$('#prj_wrapper .project:nth-child('+i+') figure a img:nth-child('+j+')').css('left', (tPos*-1)+'px');
		}
/*
		$('#prj_wrapper .project:nth-child('+i+')').bind('mouseenter', function() {
			whichroll = i;
			$(this).addClass('topofheap');
		}).bind('mouseleave', function(){
			whichroll = 0;
			$(this).removeClass('topofheap');
		});
*/
	}

/* ------------------------------------------
	Project close/reopen info
--------------------------------------------- */
	$('#close').click(function() {
		$('article').hide();
		$('#prj_nav').hide();
		$('#reopen').show();
		return false;
	});
	$('#reopen').click(function() {
		$('article').show();
		$('#prj_nav').show();
		$('#reopen').hide();
		return false;
	});
/* ------------------------------------------
	Auto grid
--------------------------------------------- */
	$('#bg_grid').click(function() {
		$(window).scrollTop(scrollChange+scrollWait);
		return false;
	});
/* ------------------------------------------
	Reload daily photo samples
--------------------------------------------- */
$('#reload_imgs').click(function() {
	$('#sample').load('sample.php');
	$('figcaption').css('font-size', (winWidth/15)+'px');
	$('figcaption').css('line-height', (winWidth/15)+'px');
	return false;
});
/* ------------------------------------------
	Scroll tantamountains
--------------------------------------------- */
$('#flattened-mountains #prev_subprj').click(function() {
	$(window).scrollLeft($(window).scrollLeft()-470);
	return false;
});
$('#flattened-mountains #next_subprj').click(function() {
	$(window).scrollLeft($(window).scrollLeft()+470);
	return false;
});

$('#yule_log').click(function() {
	$(this).fadeOut();
	return false;
});


/* ------------------------------------------
	Scroll
--------------------------------------------- */
/* Would setInterval work on iPhone??? */
	$(window).scroll(function() {
		/* get current project wrapper height */
		var prjsHeight = $('#prj_wrapper').innerHeight();
		/* how much have we scrolled? */
		scrollerPos = $(window).scrollTop();
		/* move the background elements */
		$('#bg_wrapper').css('top', (scrollerPos/-3)+'px');
		$('#bg_wrapper').css('bottom', (scrollerPos/3)+'px');

/* ---- Scroll top --------------------------- */
		if (scrollerPos <= 0 && scrollState != "top") {
			/* make sure project wrapper has default styles */
			$('#prj_wrapper').css('top', prjTop+'px');
			$('#prj_wrapper').css('bottom', prjBtm+'px');
			/* reset all the prj positions to original values */
			for (var i=1; i<=howManyPrjs; i++) {
				$('#prj_wrapper .project:nth-child('+i+')').css('top', startPercents[i-1]+'%');
				$('#prj_wrapper .project:nth-child('+i+')').css('left', startPercents[i-1]+'%');
			}
			scrollState = "top"
/* ---- Scrolling through transition --------------------------- */
		} else if (scrollerPos > 0 && scrollerPos <= scrollChange) {
			/* make sure project wrapper has default styles */
			$('#prj_wrapper').css('top', prjTop+'px');
			$('#prj_wrapper').css('bottom', prjBtm+'px');
			/* how many columns are there now? */
			howManyCols = Math.ceil((winWidth-colWidth)/colWidth);
			$('#bg_grid').css('width', (howManyCols*4)+'px');
			for (var i=1; i<=howManyPrjs; i++) {
				/* figure out the end left position based on number of columns */
				if (howManyCols > 1){
					var leftPercent = (i-1)%howManyCols * 100/(howManyCols-1);
				} else {
					var leftPercent = 50;
				}
				/* whats the current left position based on current scroll */
				var leftMidPercent = ((leftPercent - startPercents[i-1])/scrollChange)*scrollerPos + startPercents[i-1];
				$('#prj_wrapper .project:nth-child('+i+')').css('left', leftMidPercent+'%');
				/* figure out the end top position based on number of columns */
				var topPercent = (((Math.floor((i-1)/howManyCols) * rowHeight) / prjsHeight) * 100) + 5;
				/* whats the current top position based on current scroll */
				var topMidPercent = ((topPercent - startPercents[i-1])/scrollChange)*scrollerPos + startPercents[i-1];
				$('#prj_wrapper .project:nth-child('+i+')').css('top', topMidPercent+'%');
			}
			scrollState = "transitioning"
/* ---- Scroll transition done --------------------------- */
		} else if (scrollerPos > scrollChange && scrollState != "scrolling") {
			/* make sure project wrapper has default styles */
			$('#prj_wrapper').css('top', prjTop+'px');
			$('#prj_wrapper').css('bottom', prjBtm+'px');
			/* how many columns are there now? */
			howManyCols = Math.ceil((winWidth-colWidth)/colWidth);
			$('#bg_grid').css('width', (howManyCols*4)+'px');
			for (var i=1; i<=howManyPrjs; i++) {
				/* figure out the end left position based on number of columns */
				if (howManyCols > 1){
					var leftPercent = (i-1)%howManyCols * 100/(howManyCols-1);
				} else {
					var leftPercent = 50;
				}
				$('#prj_wrapper .project:nth-child('+i+')').css('left', leftPercent+'%');
				/* figure out the end top position based on number of columns */
				var topPercent = (((Math.floor((i-1)/howManyCols) * rowHeight) / prjsHeight) * 100) + 5;
				$('#prj_wrapper .project:nth-child('+i+')').css('top', topPercent+'%');
			}
			scrollState = "scrolling";
/* ---- Scroll transition done, scrolling down --------------------------- */
		} else if (scrollerPos > scrollChange + scrollWait && scrollState == "scrolling") {
			$('#prj_wrapper').css('top', (prjTop+(scrollerPos*-1+scrollChange+scrollWait))+'px');
			$('#prj_wrapper').css('bottom', (prjBtm+(scrollerPos*-1+scrollChange+scrollWait)*-1)+'px');
		}
	});

/* ------------------------------------------
	Resize
--------------------------------------------- */
	$(window).resize(function() {
		/* change the size of the figcaption text */
		winWidth = $(window).width();
		$('figcaption').css('font-size', (winWidth/15)+'px');
		$('figcaption').css('line-height', (winWidth/15)+'px');
		var prjsHeight = $('#prj_wrapper').innerHeight();

		if (scrollerPos >= 0 && scrollerPos < scrollChange) {
			/* how many columns are there now? */
			howManyCols = Math.ceil((winWidth-colWidth)/colWidth);
			for (var i=1; i<=howManyPrjs; i++) {
				/* figure out the end left position based on number of columns */
				if (howManyCols > 1){
					var leftPercent = (i-1)%howManyCols * 100/(howManyCols-1);
				} else {
					var leftPercent = 50;
				}
				/* whats the current left position based on current scroll */
				var leftMidPercent = ((leftPercent - startPercents[i-1])/scrollChange)*scrollerPos + startPercents[i-1];
				$('#prj_wrapper .project:nth-child('+i+')').css('left', leftMidPercent+'%');
				/* figure out the end top position based on number of columns */
				var topPercent = (((Math.floor((i-1)/howManyCols) * rowHeight) / prjsHeight) * 100) + 5;
				/* whats the current top position based on current scroll */
				var topMidPercent = ((topPercent - startPercents[i-1])/scrollChange)*scrollerPos + startPercents[i-1];
				$('#prj_wrapper .project:nth-child('+i+')').css('top', topMidPercent+'%');
			}
		} else if (scrollerPos > scrollChange) {
			/* how many columns are there now? */
			howManyCols = Math.ceil((winWidth-colWidth)/colWidth);
			for (var i=1; i<=howManyPrjs; i++) {
				/* figure out the end left position based on number of columns */
				if (howManyCols > 1){
					var leftPercent = (i-1)%howManyCols * 100/(howManyCols-1);
				} else {
					var leftPercent = 50;
				}
				$('#prj_wrapper .project:nth-child('+i+')').css('left', leftPercent+'%');
				/* figure out the end top position based on number of columns */
				var topPercent = (((Math.floor((i-1)/howManyCols) * rowHeight) / prjsHeight) * 100) + 5;
				$('#prj_wrapper .project:nth-child('+i+')').css('top', topPercent+'%');
			}
		}
		$('#bg_grid').css('width', (howManyCols*4)+'px');
		var fullHeight = (Math.floor((howManyPrjs-1)/howManyCols)+1) * rowHeight + scrollChange + $(window).height()/1.5;
		$('#bg_scroller').css('height', fullHeight+'px');
		if (scrollerPos > scrollChange + scrollWait && scrollState == "scrolling") {
			$('#prj_wrapper').css('top', (prjTop+(scrollerPos*-1+scrollChange+scrollWait))+'px');
			$('#prj_wrapper').css('bottom', (prjBtm+(scrollerPos*-1+scrollChange+scrollWait)*-1)+'px');
		}
	});


/* ------------------------------------------
	Auto hi-light - only on index
--------------------------------------------- */
	if ($('#index').length) {
		var whichPrj = Math.ceil(Math.random()*howManyPrjs);
		var whichImg = 1;
		var flipspeed = 1200;
		var howManyPrjImgs = $('#prj_wrapper .project:nth-child(1) figure a').children('img').length;

		var stackit = setInterval(function() {
			console.log(whichPrj+" : "+whichImg);
			if (whichImg == 1) {
				if (whichPrj == 1) {
					$('#prj_wrapper .project:nth-child('+howManyPrjs+') figure a img:nth-child('+howManyPrjImgs+')').removeClass('topofpile');
					$('#prj_wrapper .project:nth-child('+howManyPrjs+')').removeClass('middleofheap');
				} else {
					$('#prj_wrapper .project:nth-child('+(whichPrj-1)+') figure a img:nth-child('+howManyPrjImgs+')').removeClass('topofpile');
					$('#prj_wrapper .project:nth-child('+(whichPrj-1)+')').removeClass('middleofheap');
				}
			} else {
				$('#prj_wrapper .project:nth-child('+whichPrj+') figure a img:nth-child('+(whichImg-1)+')').removeClass('topofpile');
				if (whichPrj == 1) {
					$('#prj_wrapper .project:nth-child('+howManyPrjs+')').removeClass('middleofheap');
				} else {
					$('#prj_wrapper .project:nth-child('+(whichPrj-1)+')').removeClass('middleofheap');
				}
			}
			$('#prj_wrapper .project:nth-child('+whichPrj+') figure a img:nth-child('+whichImg+')').addClass('topofpile');
			$('#prj_wrapper .project:nth-child('+whichPrj+')').addClass('middleofheap');

			howManyPrjImgs = $('#prj_wrapper .project:nth-child('+whichPrj+') figure a').children('img').length;
			if (whichImg >= howManyPrjImgs) {
				if (whichPrj >= howManyPrjs) {
					whichPrj = 1;
				} else {
					whichPrj++;
				}
				whichImg = 1;
			} else {
				whichImg++;
			}
		}, flipspeed);
	}


/* ------------------------------------------
	Advance through images
	nav arrows turn on/off at ends
	image clicking loops
--------------------------------------------- */
	if (typeof imgList != 'undefined') {
		$(".prev_img").hide();
		var imgNum = 0;
		var imgLoaded = 1;
		$(".img_next").click(function() {
			imgNum++;
			if (imgNum == imgList.length-1) {
				$(".next_img").hide();
				console.log("hide: "+imgNum);
			} else if (imgNum >= imgList.length) {
				console.log("switch: "+imgNum);
				imgNum = 0;
				$(".next_img").show();
				$(".prev_img").hide();
			} else {
				console.log("show: "+imgNum);
				$(".next_img").show();
				$(".prev_img").show();
			}
			imgLoaded = 0;
			$("#switcher img").attr("src", "_img/loading.gif");
			return false;
		});
		$(".next_img").click(function() {
			imgNum++;
			if (imgNum >= imgList.length-1) {
				imgNum = imgList.length-1;
				$(".next_img").hide();
			}
			$(".prev_img").show();
			imgLoaded = 0;
			$("#switcher img").attr("src", "_img/loading.gif");
			return false;
		});
		$(".prev_img").click(function() {
			$(".next_img").show();
			if (imgNum <= 0) {
				imgNum = 0;
				$(".prev_img").hide();
			} else if (imgNum == 1) {
				imgNum = 0;
				$(".prev_img").hide();
				imgLoaded = 0;
				$("#switcher img").attr("src", "_img/loading.gif");
			} else {
				imgNum--;
				$("#switcher img").attr("src", "_img/loading.gif");
				imgLoaded = 0;
			}
			return false;
		});
		$("#switcher img").load(function() {
			if (imgLoaded == 0) {
				$("#switcher img").attr("src", imgList[imgNum]);
				$("#switcher figcaption").html(captionList[imgNum]);
				imgLoaded = 1;
			}
		});
	}
});
