<?php get_header(); ?> 

<!-- Main Content --> 
    
     <!-- <h2 class="pageid">Home Page</h2> -->
 <article class="chapterOne">
 <h1>About Cornerstone Consulting</h1>
     
 <div id="content">

<?php 
// This is the loop that feeds the main post content to the page.      

     if ( have_posts() ) : while ( have_posts() ) : the_post(); // Are there posts? Yay! Post the posts then. ?> 
     <h2><a href="<?php the_permalink(); // Make the URL the permalink function value. ?>"><?php the_title();  // Make the title the title function value. ?></a></h2>
     <?php the_content(''); ?>
     <?php endwhile; endif; ?>
    
</div>     
     



<h3>Header Level 3</h3>

<ul>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
    <li>index.php</li>
</ul>

    
    
<pre><code>
#header h1 a { 
	display: block; 
	width: 300px; 
	height: 80px; 
}

<em>index.php</em>

</code></pre>
</section>
    
     
</article>
<!-- END Article (Chapter) --> 

         

<?php get_sidebar(); ?> 
<!-- content ends --> 

<?php get_footer(); ?> 