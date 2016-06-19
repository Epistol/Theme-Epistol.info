<?php 
/* Template Name: Template Folio */ 
get_header();
 ?>


  <div class="contenantindex" style="background: white;
float: left;">

                           
                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
				


                                <!-- article -->
                               

                                    <?php the_content(); ?>

                                    <?php comments_template( '', true ); // Remove if you don't want comments ?>


                            
                                <!-- /article -->

                            <?php endwhile; ?>

                            <?php else: ?>

                                <!-- article -->
                                <article>

                                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                                </article>
                                <!-- /article -->

                            <?php endif; ?>

                      
</div>

                <?php get_footer(); ?>
