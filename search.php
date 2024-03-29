<?php get_header(); ?>
<h2>Search Page</h2>
<p>Search for: <?php echo get_search_query() ?></p>
<div class="container">
    <div class="row">
            <div class="col-sm-10">
              <?php
                if(have_posts()): // we have posts or not - checking
                        while(have_posts()):  // loop section
                                the_post();
                     
                            get_template_part("template-parts/content",get_post_format());
                        endwhile;
    else:
      echo "<h4 class='alert alert-danger'>No Post Found</h4>";
                
                endif;
        ?>
            </div>
            <div class="col-sm-2">
               <?php get_search_form(); ?>
            </div>
    </div>
</div>

              
<?php get_footer(); ?>