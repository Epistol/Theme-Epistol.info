<?php get_header(); global $more;?>


<div class="contenantindex fondtexte">

    <div class="articlepage">


        <?php



        $sticky = get_option( 'sticky_posts' );
        $args = array(
            'posts_per_page' => 1,
            'post__in'  => $sticky,
            'ignore_sticky_posts' => 1
        );


        $query = new WP_Query( $args );






        if ( isset($sticky[0]) ) :?>
            <div class="sticky">

                <a class="titreaccueil transition" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>


                <div class="text_module_1">



                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>


                </div></div>

        <?php endif;   wp_reset_query();?>







        <!-- CONTENU PAGE NORMALE -->


        <main role="main" class="index_gauche">
            <!-- section -->
            <section style="border-spacing: 0px;border-collapse: separate;" >
                <?php wpb_latest_sticky();?>


                <?php
                // LE RESTE
                get_template_part('loop');
                ?>



            </section>

            <!-- /section -->

        </main>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>


	

