== SlideDeck v.1.x jQuery Plugin

SlideDeck requires jQuery 1.3+ to run and has only been tested in XHTML 1.0 
Transitional and XHTML 1.0 Strict DOCTYPEs. Both the Lite and Pro versions of 
SlideDeck are distributed with a minified version of jQuery 1.3.2, or you can 
get the latest version from the jQuery website. Make sure your website is 
capable of using jQuery and one of the XHTML DOCTYPEs before implementing 
SlideDeck.

SlideDeck is compatible with most modern browsers including FF 3.5+, IE7+, 
Safari 3+, Chrome 2+, Opera 10.5+ (sorry, FF2 and FF3.0 are not supported due 
to lack of CSS transform support). SlideDeck will even work with some 
third-party libraries such as cufon.

== Installation: 5 Easy Steps

1. Add the SlideDeck skin CSS file to your <head> tag
This is not a necessary file to include as you can always customize the CSS 
within your primary CSS file, but it will be easier to edit by keeping things 
separate. Be sure to add your CSS file before your JavaScript.

    <link rel="stylesheet" href="slidedeck.skin.css" type="text/css" media="screen">

2. Include the necessary JavaScript files
Add the JavaScript include tags to the <head> tag in your HTML to load jQuery 
and the SlideDeck plugin library.

    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="slidedeck.jquery.js"></script>

You may optionally include a jQuery Mouse Wheel Extension to take advantage 
of mouse wheel functionality for SlideDeck.

3. Create a definition list
SlideDeck uses the semantic definition list markup tag to build its structure. 
The SlideDeck plugin will automatically try and detect how large it should 
build itself if nothing is defined, but you can always specify dimensions in 
the skin’s CSS file.

	<dl class="slidedeck">
	    <dt>Slide 1</dt>
	    <dd>Slide Content</dd>
	    <dt>Slide 2</dt>
	    <dd>Slide Content</dd>
	    <dt>Slide 3</dt>
	    <dd>Slide Content</dd>
	    <dt>Slide 4</dt>
	    <dd>Slide Content</dd>
	    <dt>Slide 5</dt>
	    <dd>Slide Content</dd>
	</dl>

4. Fire the plugin up using a jQuery selector
It is recommended that you run the slidedeck(); action inline immediately after 
the close of the <dl> tag. If you are not familiar with jQuery, you may want to
try the WordPress plugin (also included in this distribution package).

	<dl class="slidedeck">
	    <dt>Slide 1</dt>
	    <dd>Slide Content</dd>
	    <dt>Slide 2</dt>
	    <dd>Slide Content</dd>
	    <dt>Slide 3</dt>
	    <dd>Slide Content</dd>
	    <dt>Slide 4</dt>
	    <dd>Slide Content</dd>
	    <dt>Slide 5</dt>
	    <dd>Slide Content</dd>
	</dl>
	<script type="text/javascript">
	    // The most basic implementation using the default options
	    $('.slidedeck').slidedeck();
	</script>
	<!-- Help support SlideDeck! Place this noscript tag on your page when you deploy a SlideDeck to provide a link back! -->
	<noscript>
	    <p>Powered By <a href="<a href="http://www.slidedeck.com/" target="_blank">http://www.slidedeck.com</a>" title="Visit SlideDeck.com">SlideDeck jQuery Slider</a></p>
	</noscript>

5. DONE!
That's it! Now you have a SlideDeck on your website. Start flowing in HTML 
content for each slide in the <dd> tags and change slide titles in the <dt> 
tags.

== The distribution

jquery-mousewheel
The jQuery Mouse Wheel plugin to enable mouse wheel scrolling support on your
SlideDeck implementation. Load the jquery.mousewheel.min.js file in this folder
on your website and SlideDeck will automatically take advantage of the ability 
to scroll through the slides of your SlideDeck.

back.png
The background for the base SlideDeck skin

corner.png
The activeCorner indicator image for the base SlideDeck skin

example.html
An example implementation using the default "skin" for the SlideDeck

example-autoplay.html
An example of the auto-play feature

example-spineless.html
An example of a SlideDeck running in a presentation mode without the standard
spines being displayed. Perfect for slideshows and galleries

jquery-1.3.2.min.js
The jQuery 1.3.2 JavaScript library. This is provided for the purpose of the
demos and loading at least some version of jQuery 1.3.2 or later is required for
SlideDeck to work on your website. 

LICENSE.txt
The license agreement for SlideDeck. Please read this before using this JavaScript library.

README.txt
This file :)

slidedeck.jquery.lite.js
The un-compressed SlideDeck library file, good for use in your development
environment or making modifications for your website's special needs

slidedeck.jquery.lite.pack.js
The compressed SlideDeck library file, good for use in your 
production environement

slidedeck.skin.css
The base SlideDeck skin CSS file

slidedeck.skin.ie.css
Special Internet Explorer only CSS styles for the base SlideDeck skin. This
file should be loaded on your website using an IE conditional so it will only
be loaded in Internet Explorer:

    <!--[if IE]><link rel="stylesheet" type="text/css" href="slidedeck.skin.ie.css" media="screen,handheld" /><![endif]-->

slides.png
The background for the slides for the base SlideDeck skin

spines.png
The background for the spines for the base SlideDeck skin. This is a sprite
image that gets rotated when displayed in the web browser. If you open this
file in an image editor such as Photoshop, GIMP or Fireworks, you will see 
that it is a very long image with what appear to be three pieces. The first
piece is the inactive state, the second piece is displayed when you hover
over a spine, the third state is displayed for the active slide in your
SlideDeck. The reason for the length of the image is to accommodate for tall
SlideDecks.

