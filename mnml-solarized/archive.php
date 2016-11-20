<?php
/*
Template Name: Archives
*/
get_header(); ?>
    <?php get_sidebar(); ?>

    <div id="content">
        <h1>Archive</h1>
	<p>All posts, ordered by creation/update date.</p>
	<?php wp_get_archives('type=postbypost'); ?>
    </div>
<?php get_footer(); ?>

