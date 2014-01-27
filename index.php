<?php 
include("incl/config.php");
$pageTitle = "MadPix";
$pageId = "start";
?>
<?php include("incl/header.php"); ?>


<div id="content">
  <div class="article">
    <h2>madPix Lightbox</h2>
    <p style="font-weight: bold">This is what you can do </p>
    <p>* Display images, jpg, gif, png and many more.<br>
      * Customizable through settings and CSS.<br>
    * Navigation with previous and next arrow buttons. <br>
    * Jquery, CSS and html. </p>
    <p><span style="font-weight: bold">madPix Lightbox</span> is easy to change appearance and style, all you have to do is open the css file and change the style to your preferences. Easy customable and overlay images on the current page. </p>
    <h2>Download madPix Lightbox</h2>
    <p>You can find the files at GitHub, where you can look at them and download in a zip file.<br>
For everything to function correctly you will also need to <a href="http://www.w3schools.com/jquery/jquery_install.asp">download JQuery</a>. </p>
    <p>In order for the lightbox to work you have to include the plugin below.<br>
      Add it in a .js and include it in the website. </p>
    <div class="codebox">$(document).ready(function(){<br>
'use strict';<br>
$('.madImg').madPix();<br>
});</div>
    <h2>Install madPix Lightbox</h2>
    <p>Download the files, add the following code wherever you want the lightbox to<br>
appear in the html website template:</p>
    <div class="codebox">
      <p>&lt;div id='gallery'&gt;<br>
  &lt;div class='madImg ga'&gt;&lt;img src='blackrhino.jpg' alt='' /&gt;&lt;/div&gt;<br>
  &lt;div class='madImg ga'&gt;&lt;img src='giantpanda.jpg' alt='' /&gt;&lt;/div&gt;<br>
&lt;div class='madImg ga'&gt;&lt;img src='tiger.jpg' alt='' /&gt;&lt;/div&gt;<br>
&lt;div class='madImg ga'&gt;&lt;img src='alligatorsnappingturtle.jpg' alt='' /&gt;&lt;/div&gt;<br>
&lt;div class='madImg ga'&gt;&lt;img src='belugasturgeon.jpg' alt='' /&gt;&lt;/div&gt;<br>
&lt;div class='madImg ga'&gt;&lt;img src='blackcockatoo.jpg' alt='' /&gt;&lt;/div&gt;<br>
&lt;/div&gt;</p>
      </div>
    <p>Link in the gallery.js file from where you have saved it and attach the gallery.css file.</p>
  </div>
  <h1>madPix Lightbox</h1>
<div id='gallery'>
<div class='madImg ga'>
<img src='gallery/blackrhino.jpg' alt='' />
</div><div class='madImg ga'>
<img src='gallery/giantpanda.jpg' alt='' />
</div><div class='madImg ga'>
<img src='gallery/tiger.jpg' alt='' />
</div><div class='madImg ga'>
<img src='gallery/alligatorsnappingturtle.jpg' alt='' />
</div><div class='madImg ga'>
<img src='gallery/belugasturgeon.jpg' alt='' />
</div><div class='madImg ga'>
<img src='gallery/blackcockatoo.jpg' alt='' />
</div></div>
<h1>madPix Slideshow</h1>
<p>If you are interested in a simple slideshow like the one at the top of this page<br>
  you can download it  from GitHub, just follow the links on the top of the page.</p>
<h1>Install Slideshow</h1>
<p>Download the files, add the following code wherever you want the slideshow to<br>
  appear in the html website template:</p>
<div class="codebox">&lt;header&gt;<br>
&lt;div class='slideshow'&gt;<br>
&lt;img src=&quot;space.jpg&quot; alt=&quot;space&quot; class=&quot;first&quot; /&gt;<br>
&lt;img src=&quot;nature.jpg&quot; alt=&quot;nature&quot; /&gt;<br>
&lt;/div&gt;<br>
&lt;/header&gt;</div>
<p>Link in the slide.js file where ju want it to be and attach the slide.css file.<br>
  To add changes in the style you simply open the css file and change the<br>
  style to your preferences.
     </p>
</div>

<?php include("incl/footer.php"); ?>
