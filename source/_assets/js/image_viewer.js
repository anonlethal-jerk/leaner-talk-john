
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

document.addEventListener("keyup", (e) => {
	if (e.keyCode == '38') {
		// up arrow
		document.getElementById("image_viewer_up").click();
	} else if (e.keyCode == '40') {
		// down arrow
	} else if (e.keyCode == '37') {
		// left arrow
		document.getElementById("image_viewer_prev").click();
	} else if (e.keyCode == '39') {
		// right arrow
		document.getElementById("image_viewer_next").click();
	}
});
