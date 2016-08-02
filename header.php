<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">    
<title><?php get_my_title_tag(); ?></title>
    
<!-- begin meta --> 
    
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />

<!-- end meta --> 
        
    
<!-- begin links --> 

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" />
                                                                                             
    
<!-- end links --> 
 
<!-- begin scripts --> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
    
<!-- end scripts --> 

    
<!-- begin FlexSlider --> 

<script type="text/javascript" charset="utf-8"> 

    $(window).load(function() { // enable function upon window load
        $('.flexslider').flexslider(); // call FlexSlider function
    }); 
    
</script>    
    
<!-- end FlexSlider -->     
    
<!-- begin Toggle Menu --> 

<script type="text/javascript" charset="utf-8"> 

    $(window).load(function() { // enable function upon window load
        $("#toggle").click(function() { // When toggle is clicked....
            $("#navigation").toggle(); // ... open or close the navigation. 
        }); 
    }); 
    
</script>    
    
<!-- end Toggle Menu -->     
    
<!-- begin WP Head function --> 
<? php wp_head(); ?>
<!-- end WP Head function --> 
        
</head>    

<body <?php body_class(); ?>> 
    
<!-- begin header --> 
    
<div id="header">
<h1 id="logo"><a href="<?php echo get_settings('home'); ?>">Sara Dwayne Linde</a></h1>    
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" width="25" height="25" alt="Toggle Menu">   
    
</div>    
    
<!-- end header --> 
    
<!-- Begin Navigation -->
<!-- <div id="navigation">
<ul id="navigation-items">
<li><a href="main.html">About</a></li>
<li><a href="main.html">Portfolio</a></li>
<li><a href="main.html">Blog</a></li>
<li><a href="main.html">Contact</a></li>
</ul> 
</div> -->    
    
<? php wp_nav_menu(array('theme_location' => 'main_menu', 'container' => 'div', 'container_id' => 'navigation',)); ?>     
      
    
<!-- End Navigation -->

<!-- Begin Content -->
<div id="middle">    
    
    
    
    
    
    
    
    
    
    
    
    
    
    