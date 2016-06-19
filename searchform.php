<!-- search -->
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e('Search:'); ?></label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="icon-recherche"/>
	<button type="submit" id="searchsubmit" class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
		<i class="material-icons">search</i>
	</button>


</form>
<!-- /search -->

