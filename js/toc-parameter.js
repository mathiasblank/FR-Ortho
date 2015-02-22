/*
toc project created by mab
Version 1.0
MIT license
*/
var options;
$(document).ready(function(){
	options = {
		elements : [2,3,4,5,6], // Choose the title which will be present in the toc ('*' for every html heading tag (1 to 6) in an array)
		position : 'left', // top - bottom - left - right (left and right will be floated, just hover the mouse in the right or left margin to see the toc.)
		animateScroll : true, // Animates the scroll bar until the title
		blinkingTexte : true, // Adds a blinking effect on the title after scroll
		container : 'body', // The container which will contain the toc
		title : 'My title', // Title of your toc. Leave it empty if you don't want a title.
		indentTitle : true, // Give a nice indentation to your toc
		slide : true // Give the possibility to slide up or down the toc (the trigger is the title)
	}
});