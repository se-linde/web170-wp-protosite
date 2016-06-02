<!DOCTYPE html>
<html>
<head>
<title><?php get_my_title_tag(); ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<link href='https://fonts.googleapis.com/css?family=Delius+Swash+Caps' rel='stylesheet' type='text/css'>

<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all"/>
</head>
    
<body>
<header> 
<!--<img src="<?php bloginfo('template_directory'); ?>/images/cornerstone_placeholder.gif" class="icon" alt="A placeholder cornerstone image. Labeled for reuse." />--> 
    
    <!--<img src="icons/Logo-Black-41px-TM.png" class="social" alt="LinkedIn link icon" />-->
    
    
<a href="https://www.linkedin.com/in/test" target="_blank">
<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x25.png" width="160" height="25" border="0" class="social" alt="View Aimee Elber's profile on LinkedIn.">
</a>
    
    
<a href="mailto:example@example.com ">
<img src="<?php bloginfo('template_directory'); ?>/icons/email.png" class="email" alt="Email link icon." />
</a>
        
     
     <!-- <h2 class="pageid">Home Page</h2> -->
    
  <h3><a href="index.php">Cornerstone Consulting</a></h3>
  <!-- START NAVIGATION (Main) -->

    
    <!-- Here is the nav menu, via calling the wp_nav_menu() function --> 
    <!-- The function is actually broken down and stores in 'functions.php'; this calls it. --> 
    
<?php wp_nav_menu( array( 'Theme_location' => 'main-menu', 'container' => 'div', 
/* 'container_id' => 'navigation' */ /* Will match up with CSS tags.*/ )); ?> 

        
    
    <!-- end header --> 