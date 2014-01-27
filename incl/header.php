<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>

  <link rel="stylesheet" href="css/main.css" title="General stylesheet">
<script src="js/modernizr.js"></script>
  <link rel="shortcut icon" href="img/favicon.ico">
  </head>
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
<div id="above"><a href="index.php">Home</a> l <a href="https://github.com/madnezdesign/lightbox">Download madPix Lightbox</a> l <a href="https://github.com/madnezdesign/slideshow">Download Slideshow</a> l <a href="competition.php">Competition</a></div>
<div id="wrapper">
<header>
  <div class='slideshow'>
  <img src="http://www.student.bth.se/~mals13/javascript/madpix/img/space.jpg" alt="space" class="first" />
  <img src="http://www.student.bth.se/~mals13/javascript/madpix/img/tree.jpg" alt="tree" />
  <img src="http://www.student.bth.se/~mals13/javascript/madpix/img/nature.jpg" alt="nature" />
  </div>
</header>