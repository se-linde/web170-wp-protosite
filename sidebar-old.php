
    <!-- START Aside -->
<aside>
    
    <!-- side nav menu --> 

<ul> 
<?php wp_list_pages (array( 'title_li' => '' )); // Calls the sidebar menu. Works.?> 
    
</ul>    
<div>
    
<?php 
// This is for sub posts and their parents. Does not work yet.  
if ($post->post_parent) {

    // Calls the menu. If there is a parent post, get the post parent. 
    $children = wp_list_pages ("title_li=&child_of=".$post->post_parent."&echo=0"); 
    $parentname = get_the_title($post->post_parent); 
    
} else {
    
    // If there is not a Parent Post, get the post ID instead. 
    $children = wp_list_pages ("title_li=&child_of=".$post->ID."&echo=0"); 
    $parentname = get_the_title($post->ID); 
}

// If there are children posts. 

if ($children) { ?>

<div id = "sub-navigation" class="widget">
    <h2 class = "sub-navigation-title"><?php echo $parentname; // parent posts ?></h2>
    <ul class = "sub-navigation-items">
        <?php echo $children; // children posts ?>   
    </ul>
</div> 

<?php } ?>    
    
</div>    
</aside>

<!-- END Aside -->


<div id="sidebar"> 
<div id="sub-navigation"> 

<!-- Begin Subnavigation -->

<?php my_subnavigation(); ?> 
</div>
<!-- End Subnavigation -->

<!-- begin quote -->

<div id="my-quote"> 
    
<?php if (get_post_meta($post->ID, 'Quote', true)) : // check to see if quote exists. ?>
    
    <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); // Displays quote. ?></blockquote>
    
    <?php endif; ?> 
    
</div>    

    
<!-- End quote -->
<!-- Begin dynamic widgets -->
    
    <div id="dynamic-widgets">
    <?php dynamic_sidebar(1); ?> 

    </div>
    
<!-- End dynamic widgets -->
    
</div>