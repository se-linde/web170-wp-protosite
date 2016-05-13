
    <!-- START Aside -->
<aside>
    
    <!-- side nav menu --> 

<ul> 
    
    
<?php wp_list_pages ( array( 'title_li' => '' )); // Calls the sidebar menu. ?> 
    
</ul>
    
  <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h2>
    <p>Etiam placerat porta sapien at tempor. Nulla tempor dolor neque. Integer est libero, rutrum id sagittis vitae, hendrerit ut risus. Pellentesque laoreet luctus diam, at mattis leo commodo ut. Quisque est dolor, tincidunt at lacinia sit amet, ornare sit amet neque. Proin in sapien luctus odio sollicitudin fringilla. Proin a leo vitae purus varius tincidunt. Nullam posuere, odio id volutpat semper, nulla turpis pretium tortor, dictum pulvinar ante magna ac metus. Pellentesque commodo id felis eu fringilla. Fusce posuere, tortor volutpat varius ultrices, neque dolor pharetra nulla, quis gravida sapien ante at dui./        

    <h3>Fancy test menu below. Fancy!</h3>    
        
</aside>

<?php 
// This is for posts and their parents. 
if ($post->post_parent) {

    // Calls the menu. If there is a parent post, get the post parent. 
    $children = wp_list_pages ("title_li=&child_of=".$post->post_parent."$echo=0"); 
    $parentname = get_the_title($post->post_parent); 
    
} else {
    
    // If there is not a Parent Post, get the post ID instead. 
    $children = wp_list_pages ("title_li=&child_of=".$post->ID."$echo=0"); 
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
<!-- END Aside -->
