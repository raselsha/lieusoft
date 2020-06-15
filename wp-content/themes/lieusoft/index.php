<?php get_header(); ?>
   <section id="content_area">
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <?php if ( have_posts() ) : ?>
                     <?php
                        // Start the loop.
                        while ( have_posts() ) : the_post();
                           get_template_part( 'content',get_post_format());
                        // End the loop.
                        endwhile;
                     ?>
                  <?php
                     else :
                        get_template_part( 'content', 'none' );
                     endif;
                  ?>

                  <?php custom_pagination(); ?>
            </div>
            <div class="col-md-3">
               <?php get_sidebar(); ?>
            </div>
         </div>
      </div>
   </section>
<?php get_footer(); ?>