
<!-- BEGIN sidebar -->

<div id="sidebar"> 

    <!-- Begin Subnavigation -->

    <div id="sub-navigation"> 


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
    <?php dynamic_sidebar(); ?> 

    </div>
    
<!-- End dynamic widgets -->
    
</div>
<!-- END sidebar -->