<?php get_header(); ?> 

<!-- Main Content --> 

<div id="content">

<?php 
// This is the loop that feeds the main post content to the page.   
    
// Add the thumbnail posting ability.     

     if ( have_posts() ) : while ( have_posts() ) : the_post(); // Are there posts? Yay! Post the posts then. ?> 
    
    <!-- Putting everything in an article prevents The Great Collapse --> 
    
    <!-- <article class="post excerpt"> -->
    
    
    <article id = "post-<?php the_ID(); ?>" class="post excerpt">
    
     <h2><a href="<?php the_permalink(); // Make the URL the permalink function value. ?>"><?php the_title();  // Make the title the title function value. ?></a></h2>
     <small>Posted in <?php the_category(', '); // Category posting info. ?> &sect; </small>
     <small>Posted on <?php the_time('F j, Y'); // Time posting info. ?> by <?php the_author(); // Byline posting info. ?>. </small>   
     <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); // Posts the set thumbnail image, with a permalink. ?></a> 
     <?php the_excerpt(); // Posts an excerpt, with a link to the content. ?>
        
    <p class="read-more"><a href="<?php the_permalink(); // Read More link to page or posting. 
        ?>">Read More!</a></p>
        
    </article>

     <?php endwhile; endif; // This ends the loop. ?>
     <small>index.php</small>
    
</div>     
     
<?php get_sidebar(); ?> 

<!-- content ends --> 

<?php get_footer(); ?> 