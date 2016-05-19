<?php get_header(); ?> 

<!-- Main Content --> 

<div id="content">
    <section class="widget item"> 
    <?php 
     // This is the loop that feeds the main post content to the page.     
     // Widget 1, Loop 1. 

     if ( have_posts() ) : while ( have_posts() ) : the_post(); // Are there posts? Yay! Post the posts then. ?> 
     <h2><a href="<?php the_permalink(); // Make the URL the permalink function value. ?>"><?php the_title();  // Make the title the title function value. ?></a></h2>
     <?php the_content(''); // Posts the content. ?>
     <?php endwhile; endif; ?>
     <small>front-page.php</small>
     </section>
    
    <section class="widget item">
    
    <h2>Latest Postings: </h2>
    <ul>
        <?php rewind_posts(); // This stops Loop 1 from looping. Widget 2, Loop 2. ?>
        <?php query_posts('showposts=4'); // Dear Loop 2: show last 4 posts. ?>
        <?php while (have_posts()) : the_post(); // Start Loop 2. ?> 
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; // This ends Loop 2. ?> 
    </ul>
    </section>   
    
    <section class="widget item">
    <!-- This is static HTML --> 
        
    <ul>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
   <li>Vestibulum auctor dapibus neque.</li>
    </ul>    
        
    </section>    
        
        
</div>     
     
<?php get_sidebar(); ?> 

<!-- content ends --> 

<?php get_footer(); ?> 