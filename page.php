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

  <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                $fields = CFS()->get( 'images' );

                
    ?>
  <div class="videoa">
    <div class="stblid">
      <img src="<?php echo $fields[0]['img']; ?>" id="current-image">
    </div>
    <div class="vbild-container">
      <div class="vblid1">
        <img src="<?php echo $fields[1]['img']; ?>">
      </div>
      <div class="vblid2">
      <img src="<?php echo $fields[2]['img']; ?>">
      </div>
      <div class="vblid3">
      <img src="<?php echo $fields[3]['img']; ?>">
      </div>
      <div class="vblid4">
      <img src="<?php echo $fields[4]['img']; ?>">
      </div>
    </div> 
  </div>
    <div>

    <script>
  var images = 
  ["<?php echo $fields[0]['img']; ?>",
   "<?php echo $fields[1]['img']; ?>",
   "<?php echo $fields[2]['img']; ?>", 
   "<?php echo $fields[3]['img']; ?>", 
   "<?php echo $fields[4]['img']; ?>"];
  var currentImageIndex = 0;
  
  function updateSlideshow() {
    var currentImage = document.getElementById("current-image");
    currentImage.src = images[currentImageIndex];
    currentImageIndex = (currentImageIndex + 1) % images.length;
  }
  
  setInterval(updateSlideshow, 4000);
 

  
</script>
    <?php
               
            } // end while
        } // end if
    ?>
    </div>
 </div>
 
 
  
 <footer>
   <?php wp_footer(); ?>
 </footer>
 </body>
</html>
