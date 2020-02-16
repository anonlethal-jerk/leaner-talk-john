$(document).ready(function(){

	$(".embed-youtube").fitVids();
	$(".embed-instagram").fitVids({customSelector: "iframe[src*='instagram']"});

});
