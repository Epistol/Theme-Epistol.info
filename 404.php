<?php get_header(); ?>



	<div class="mdl-grid" style="margin-top: 2.5em;height: inherit;">
<div class="mdl-cell mdl-cell--hide-phone mdl-cell--2-col"></div>

  <div class="mdl-cell mdl-cell--7-col fondtexte">



	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
