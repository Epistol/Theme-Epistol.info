<?php get_header(); ?>



	<div class="mdl-grid" style="margin-top: 2.5em;height: inherit;">
<div class="mdl-cell mdl-cell--hide-phone mdl-cell--2-col"></div>

  <div class="mdl-cell mdl-cell--7-col fondtexte">



	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
