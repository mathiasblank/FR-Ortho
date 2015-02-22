# toc
This little script is used to create a table of content of your html page

## How to use it
First it's important to know that toc uses jQuery librairy.
js/toc-parameter contains the customable parameters.
js/toc.min.js contain the script of the toc.

### Add the style sheet reference
<link rel="stylesheet" type="text/css" href="css/toc.css">

### Add the jquery library reference
<script src="js/jquery.js"></script>

### Add the two scripts files (at the end of the document, after </body>)
<script src="js/toc-parameter.js"></script>
<script src="js/toc.min.js"></script>

## The customable parameters

- elements : // Choose titles heading tag which will be present in the toc ('*' for every html heading tag (1 to 6) in an array)
- position : 'left', // top - bottom - left - right (left and right will be floated, just hover the mouse in the right or left margin to see the toc.)
- animateScroll : true, // Animates the scroll bar until the title
- blinkingTexte : true, // Adds a blinking effect on the title after scroll
- container : 'body', // The container which will contain the toc
- title : 'My title', // Title of your toc. Leave it empty if you don't want a title.
- indentTitle : true, // Give a nice indentation to your toc
- slide : true // Give the possibility to slide up or down the toc (the trigger is the title)




