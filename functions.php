<?php 
/* 
Theme Name: Dwayneland Spring 2016 Demo
Author: Dwayne Linde
Author URI: http://lindese.com/web170/
Description: The Spring 2016 WordPress class site for Dwayne Linde. 
Version: 0.0.01
*/

// This is where the main navigation menu lives. 

function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu')); 
}
add_action( 'init', 'register_my_menu' ); 
  
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

?>