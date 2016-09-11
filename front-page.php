<?php get_header(); ?> 


<!-- Begin Flex Slider --> 


<!-- Put In Flex Slider --> 


<!-- End Fles Slider --> 


<!-- Main Content --> 

<div id="widgets">
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
        <?php rewind_posts(); // This stops Loop 1 from looping. Widget 2, Loop 2. ?>
        <?php query_posts('showposts=5'); // Dear Loop 2: show last 5 posts. ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); // Start Loop 2. ?> 
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; endif; // This ends Loop 2. ?> 

    </section>   
    
    <section class="widget item">
    <!-- This is static HTML --> 
        
    <h2>Contact Me:</h2>
        <p><strong>Email: </strong><a href="mailto:lindesara@gmail.com">lindesara@gmail.com</a></p>
    </section>    
        
</div>     
     
<!-- content ends --> 

<?php get_footer(); ?> 