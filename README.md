# toc
This little script was created to improve the search on web pages. Toc will create a table of content on your html page. It's possible to custom it a lot :).

You can chose the position of your toc, which heading tags will be used, the title, the animation scroll, and others...

## Version
Version: **1.0**

## How to use it
- It's important to know that toc uses jQuery library.
- js/toc-parameter contains the customizable parameters.
- js/toc.min.js contain the script of the toc.

### Add the style sheet reference
``` <link rel="stylesheet" type="text/css" href="css/toc.min.css"> ```

### Add the jQuery library (v 1.11.1) reference
``` <script src="js/jquery.js"></script> ```

### Add the two toc scripts files
Add these files reference at the end of the document, after the \<body>.
```<script src="js/toc-parameter.js"></script> ```
``` <script src="js/toc.min.js"></script> ```

## The customizable parameters
You can change it in the js/toc-parameters file.

### Heading tags
This parameter manages which heading tags will be present in your toc. For example, if you only need the \<h2> heading tag :
``` elements: [2] ```
If you want \<h2> and \<h3>
``` elements: [2, 3] ```
And if you want all heading tags you can used the asterix wildcard (*).
``` elements: ' * ' ``` (without spacing of course)

### Position
This parameter manages the position of your toc. You can have it at the *top* or *bottom* of your page but you can also chose to have it at the *right* or at the *left*. These last ones will be hide. To show them just hover the mouse in the right or left margin.

### Animated scroll
This parameter is only used to animate the scroll.

### Blinking texte
Adds a blinking effect on the heading tag after scrolling.

### Container
This parameter defines in which html element the toc will be contained.

### Title
Title of your toc. Leave it empty if you don't want any.

### IndentTitle
Give a nice indentation to your toc

### Slide
Give the possibility to slide up or down the toc (the trigger is the title).