<?php get_header(); ?>
   <section id="content_area">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <?php
                     while ( have_posts() ) : the_post();
                        get_template_part( 'content','page');
                        if ( comments_open() || get_comments_number() ) :
                           comments_template();
                        endif;

                     endwhile;
                  ?>
            </div>
         </div>
      </div>
   </section>
<?php get_footer(); ?>