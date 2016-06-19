<?php get_header(); ?>



    <div class="contenantindex fondtexte">

    <div class="articlepage">

        <main role="main">
            <!-- section -->
            <section>

                <?php
                $s=get_search_query();
                $args = array(
                    's' =>$s
                );
                // The Query
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                    _e("<h2 style='font-weight:bold;color:#000'>Résultat de recherche pour ' ".get_query_var('s')." '</h2>");
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>



                        <!-- article -->
                        <article itemscope itemtype="http://schema.org/Article" class="articleindex" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                            <div class="thumb_index article_index">
                                <!-- post thumbnail -->



                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="infosplus">

                                            <span class="date"><?php the_time('j F Y'); ?> <br /><?php the_time('g:i a'); ?></span>


                                        </td>
                                        <td class="ligne_index_1"><?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <?php the_post_thumbnail(array('120','120') ); ?>
                                                </a>
                                            <?php endif; ?>
                                            <!-- /post thumbnail -->
                                        </td>
                                        <td class="ligne_index_2">  <!-- post title -->
                                            <div class="titre_article_index">
                                                <a class="titreaccueil" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </div>
                                            <!-- /post title -->




                                            <div class="contenu_index_article">

                                                <p> <?php the_excerpt(); // Build your custom callback length in functions.php ?></p>

                                            </div>
                                        </td>
                                        <td class="ligne_index_3">

                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                                                    <i class="material-icons">add</i>
                                                </button></a>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>


                                <!-- <span class="comments">

<div class="material-icons mdl-badge mdl-badge--overlap" data-badge="

<?php $commentscount = get_comments_number(); echo $commentscount; ?>

">chat_bubble<div>

</span>
-->
                            </div>
                        </article>

                        <!-- /article -->

                        <?php
                    }
                }else{
                    ?>
                    <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                    <div class="alert alert-info">
                        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                    </div>
                <?php } ?>





                <?php get_template_part('pagination'); ?>

            </section>
            <!-- /section -->
        </main>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>