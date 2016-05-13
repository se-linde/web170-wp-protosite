<?php get_header(); ?> 

<!-- Main Content --> 

<div id="content">

<?php 
// This is the loop that feeds the main post content to the page.      

     if ( have_posts() ) : while ( have_posts() ) : the_post(); // Are there posts? Yay! Post the posts then. ?> 
     <h2><a href="<?php the_permalink(); // Make the URL the permalink function value. ?>"><?php the_title();  // Make the title the title function value. ?></a></h2>
     <?php the_content(''); // Posts the content. ?>
     <?php endwhile; endif; ?>
     <small>front-page.php</small>
    
</div>     
     
<?php get_sidebar(); ?> 

<!-- content ends --> 

<?php get_footer(); ?> 