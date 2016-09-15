<?php 
/* 
Theme Name: Dwayneland Spring 2016 Demo
Author: Dwayne Linde
Author URI: http://lindese.com/web170/
Description: The Spring 2016 WordPress class site for Dwayne Linde. 
Version: 0.0.01
*/

// This is where the main navigation menu lives. 



// Activate the sidebars. 

register_sidebar( array (
    'before_widget' => '<div id="%1$s" class="widget %2$s">', 
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',                      
                         
)); 

function register_my_menus() {
    register_nav_menus( array( 
    'main-menu' => __( 'Main Menu'),
    'footer-menu' => __( 'Footer Menu' )
    )); 
    
}
add_action( 'init', 'register_my_menus' ); 



// create post thumbnails. This makes thumbnails visible on the Themes menu. 
add_theme_support ('post-thumbnails'); 

add_post_type_support('page', 'excerpt'); 

// Gets the title tag dynamically, and puts it in. Good for SEO results. 

function get_my_title_tag() { // This function gets the title tag. PHP is simple that way. 
    
    global $post; // Don't forget this; variable scope. 
    
    if (is_front_page()) { // for the front page. 
        
        bloginfo ('description'); // The site's tagline to be displayed here. 
        
    } elseif ( is_page() || is_single() ) { // On a page or a single posting. 
        
        the_title(); // The page or posting's title.  
        
    } else { // for everything else. 
        
        bloginfo ('description'); // Display the site's tagline. 
    }
        
    if ( $post->post_parent ) {
        
        echo ' | '; // separator pipe. 
        echo get_the_title( $post->post_parent ); 
        
    }
    
    echo ' | '; // separator pipe symbol.
    bloginfo('name'); // name of the site. 
    echo ' | '; // separator pipe symbol.
    echo 'Seattle, WA';  // My location. 
}



// This might cause WP to freak out. 
// register sidebars(3, array()); 

// This is where the sidebar menu lives. 
// Info here: https://developer.wordpress.org/reference/functions/wp_list_pages/#source-code

// Had to comment out, didn't work now for some reason. 

 /* function wp_list_pages ( $args = '' ) { 
    $defaults = array( 
        'depth' => 0, 'show_date' => '', 
        'date_format' => get_option( 'date_format' ), 
        'child_of' => 0, 'exclude' => '', 
        'title_li' => __( 'Pages' ), 'echo' => 1, 
        'authors' => '', 'sort_column' => 'menu_order, post_title', 
        'link_before' => '', 'link_after' => '', 'walker' => '', 
        ); 
   $r = wp_parse_args( $args, $defaults ); 
}  */ 


function my_subnavigation() {
    
    global $post; 
    
    if (is_page()) { // If we're in Pages in the blog. 
        
        if ($post -> post_parent) { // Page has a parent? Go here. 
        
            echo '<h2>'.get_the_title($post->post_parent).'</h2>';
            echo '<ul>';
            
            wp_list_pages(array('title_li'=> '', 'child_of' => $post->post_parent,)); // This lists hte children of the page, if there are any. 
            echo '</ul>';
            
        } else { // Page does not have a parent? Go here. 
        
            echo '<h2>'.get_the_title($post->ID).'</h2>'; 
            echo '<ul>';
            wp_list_pages(array('title_li'=>'', 'child_of'=> $post->ID)); 
            echo '</ul>';
            
        }
        
} else { // If we're not in the Pages section of the blog. 

    echo '<h2>Blog!</h2>'; 
    echo '<ul>';
    wp_list_pages(array('title_li'=> '',)); // Lists posting categories instead.     
    echo '</ul>';    
        
    } 
} 


// Get my FlexSlider

function get_flexslider(){
    
    global $post; // Don't forget this. 
    
    $attachments = get_children( array( 'post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image' ) ); 
    
    if ($attachments) {
        
    echo '<div class="flexslider">'; 
    echo '<ul class="slides">'; 
        
    foreach ($attachments as $attachment) { // foreach loop to get all the images. 
        
    echo '<li>'; 
    echo wp_get_attachment_image($attachment->ID, 'full');
    echo '</li>';
        
    }    
        
        
        // <a href="' . $caselink . "'>
        
    echo '</ul>'; 
    echo '</div>'; 
    
    }
}


?>