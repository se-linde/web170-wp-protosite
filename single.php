<?php get_header(); ?> 

<!-- Main Content --> 

<div id="content">

<?php 
// This is the loop that feeds the main post content to the page.      

     if ( have_posts() ) : while ( have_posts() ) : the_post(); // Are there posts? Yay! Post the posts then. ?> 
     <h2><a href="<?php the_permalink(); // Make the URL the permalink function value. ?>"><?php the_title();  // Make the title the title function value. ?></a></h2>
    
         <small>Posted in <?php the_category(', '); ?> &sect; </small>
     <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?>. </small>   
    
    
    <?php if ( has_post_thumbnail() ) { // If there is a Featured Image, post it as thumbnail. 
        the_post_thumbnail('large'); 
    } ?> 
    
     <?php the_content(''); // Posts the content. ?>
     <?php endwhile; endif; ?>
     <small>single.php</small>
    
</div>     
     
<?php get_sidebar(); ?> 

<!-- content ends --> 

<?php get_footer(); ?> 