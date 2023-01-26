<!DOCTYPE html>
<html>
 <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
   
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
 <div class="main">
  <div class="ftb">
    <a href="home"> Home</a>
    <a href="product">Product</a>
    <a href="about">About</a>
  </div>

  index.php
  <div class="videoa">
    <div class="stblid">
      <img src="s1.jpg" id="current-image">
    </div>
    <div class="vbild-container">
      <div class="vblid1"></div>
      <div class="vblid2"></div>
      <div class="vblid3"></div>
      <div class="vblid4"></div>
    </div> 
  </div>

 </div>
 
 
  
 <footer>
   <?php wp_footer(); ?>
 </footer>
 </body>
</html>
