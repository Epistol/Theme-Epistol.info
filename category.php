<?php get_header(); ?>



    <div class="contenantindex fondtexte">

        <div class="articlepage">




            <?php
            /**
             * A Simple Category Template
             */

            get_header(); ?>


            <main role="main" class="index_gauche">



                <section id="primary" class="site-content">
                    <div id="content" role="main">

                        <?php
                        // Check if there are any posts to display
                        if ( have_posts() ) : ?>

                            <header class="archive-header">
                                <h1><?php single_cat_title(); ?></h1>


                                <?php
                                // Display optional category description
                                if ( category_description() ) : ?>
                                    <div class="archive-meta"><?php echo category_description(); ?></div>
                                <?php endif; ?>
                            </header>



                            <?php

// The Loop
                            while ( have_posts() ) : the_post(); ?>
                                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

                                <div class="entry">
                                    <?php the_content(); ?>

                                    <p class="postmetadata"><?php
                                        comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
                                        ?></p>
                                </div>

                            <?php endwhile;

                        else: ?>
                            <p>Sorry, no posts matched your criteria.</p>


                        <?php endif; ?>

                </section>
            </main>

        </div>
        <?php get_sidebar(); ?>
    </div>


    <!---->
    <!--      	<main role="main" class="index_gauche">-->
    <!--		<!-- section -->
    <!---->
    <!---->
    <!--		<section>-->
    <!---->
    <!--			<h1>--><?php //_e( 'Categories for ', 'html5blank' ); single_cat_title(); ?><!--</h1>-->
    <!---->
    <!--			-->
<?php
//$s=get_search_query();
//$args = array(
//                's' =>$s
//            );
//    // The Query
//$the_query = new WP_Query( $args );
//if ( $the_query->have_posts() ) {
//        _e("<h2 style='font-weight:bold;color:#000'>Résultat de recherche pour ' ".get_query_var('s')." '</h2>");
//        while ( $the_query->have_posts() ) :
//           $the_query->the_post();
//                 ?>
    <!--            -->
    <!---->
<?php //if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
    <!--                <div class="fullwidth"><a href="--><?php //the_permalink(); ?><!--" title="--><?php //the_title(); ?><!--">-->
    <!--                    --><?php //the_post_thumbnail(array('120','120') ); ?>
    <!--                </a>-->
    <!--            --><?php //endif; ?>
    <!--            <!-- /post thumbnail -->
    <!---->
    <!--                <a class="titreaccueil" href="--><?php //the_permalink(); ?><!--" title="--><?php //the_title(); ?><!--">--><?php //the_title(); ?><!--</a>-->
    <!--            -->
    <!--            <!-- /post title -->
    <!---->
    <!---->
    <!---->
    <!--                --><?php //the_excerpt(); // Build your custom callback length in functions.php ?>
    <!---->
    <!--		</div>-->
    <!--                -->





    <!-- /section -->




<?php get_footer(); ?>