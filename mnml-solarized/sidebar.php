<div id="sidebar">
    <nav>
        <?php wp_nav_menu(); ?>
    </nav>

    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
	<div>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search...">
	</div>
    </form>
</div>
