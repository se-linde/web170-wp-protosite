<?php get_header(); ?> 

<!-- Main Content --> 
    
     <!-- <h2 class="pageid">Home Page</h2> -->
 <article class="chapterOne">
 <h1>About Cornerstone Consulting</h1>
<section class="secOne">	       
 <img src="<?php bloginfo('template_directory'); ?>/images/aimee_headshot_sm.gif">
    <p>Aimee Elber, Manager of Disability Support Services at Spokane Community College, holds over a decade of experience in higher education and has worked with people with disabilities since 1994. As a first generation college graduate, Aimee started her academic career in the community college system and completed her Bachelor of Arts degree in Human Services at Western Washington University. She is driven by a deep desire to help students meet their academic and occupational goals.</p>
    
    <p>While pursuing her college education, Aimee began her career with the Washington State Division of Vocational Rehabilitation (DVR) as a Governor’s Intern and was later hired as a Rehabilitation Technician. Working with DVR inspired her to seek out opportunities to help people with disabilities successfully enter the workforce. Building on her experience, she worked as a Career Counselor and Academic Advisor at Lake Washington Technical College and later sought employment as a Disability Services Specialist in the Seattle Community Colleges District. She then transitioned to a job in Workforce Education to supplement her existing skills. Aimee served as Assistant Director of Student Services at Pacific Northwest College of Art in Portland, Oregon and later as Coordinator of Disability Services at Clackamas Community College. </p>
      

<h3>Header Level 3 - Testing The Content Loop!</h3>

    <?php 
// This is the loop that feeds the main post content to the page.      

     if ( have_posts() ) : while ( have_posts() ) : the_post(); // Are there posts? Yay! Post the posts then. ?> 
     <h2><a href="<?php the_permalink(); // Make the URL the permalink function value. ?>"><?php the_title();  // Make the title the title function value. ?></a></h2>
     <?php the_content(''); ?>
     <?php endwhile; endif; ?>

    
<ul>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
    <li>front-page.php</li>
</ul>

    
    
<pre><code>
#header h1 a { 
	display: block; 
	width: 300px; 
	height: 80px; 
}

<em>front-page.php</em>

</code></pre>
</section>
    
     
</article>
<!-- END Article (Chapter) --> 

         

<?php get_sidebar(); ?> 
<!-- content ends --> 

<?php get_footer(); ?> 