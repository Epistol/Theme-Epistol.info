<!-- pagination -->

<div class="pagination">

	<!--<?php html5wp_pagination(); ?>-->
<?php if ( have_posts() ) : ?>

<!-- Add the pagination functions here. -->

<!-- Start of the main loop. -->
<?php while ( have_posts() ) : the_post();  ?>

<!-- the rest of your theme's main loop -->

<?php endwhile; ?>
<!-- End of the main loop -->

<!-- Add the pagination functions here. -->

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


</div>
<!-- /pagination -->
