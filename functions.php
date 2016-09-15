<?php 
/*
Theme Name: Spring 2016 Demo
Author: Testy McPickles
Author URI: http://www.testymcpickles.com
Description: I hope Bri is doing her homework. You too, Paige.
Version: 0.0.0812
*/
// Register My Menus
register_nav_menus(array('main-menu' => _('Main'),));
//
// Register My Sidebars
register_sidebars(3, array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>',));
//
// Make me some thumbnails, please.
add_theme_support('post-thumbnails');
//
// Why aren't excerpts enabled in pages by default?!
add_post_type_support('page','excerpt');
//
// My Sub Navigation
function my_subnavigation() {
	
	global $post; // don't forget this... this is why id didn't work in class 
	if (is_page()) { // if we're in pages
		
		if ($post->post_parent) { // if the page we're on has a parent
		
			echo '<h2>'.get_the_title($post->post_parent).'</h2>'; // get the title of the parent page 
			echo '<ul>';
			wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); // list the children of the page's parent
			echo '</ul>';
		
		} else { // if the page we're on does not have a parent
			
			echo '<h2>'.get_the_title($post->ID).'</h2>'; // get the title of the page
			echo '<ul>';
			wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,)); // list the children of the page
			echo '</ul>';
			
		}
		
	} else { // if we're not in pages
		
		echo '<h2>Blog</h2>';
		echo '<ul>';
		wp_list_categories(array('title_li' => '',)); // list the categories of the postings
		echo '</ul>';
		
	}	
		
}
//
// My Wicked Awesome Title Tag 
function get_my_title_tag() {
	
	global $post; // don't forget this thing 
	
	if ( is_front_page() ) { // for the front page
	
		bloginfo('description'); // get the site's tagline
		
	} elseif ( is_page() || is_single() ) { // for pages or postings 
		
		the_title(); // the page or posting's title
		
	} else { // for everything else
	
		bloginfo('description');  // get the site's tagline
		
	}
	
	if ($post->post_parent) { // for a destination page
		
		echo ' | '; // separator
		echo get_the_title($post->post_parent); // get the title of the parent page
			
	}
	
	echo ' | '; // separator
	bloginfo('name'); // name of site
	echo ' | '; // separator
	echo 'Seattle, WA'; // location
	
}
//
?>