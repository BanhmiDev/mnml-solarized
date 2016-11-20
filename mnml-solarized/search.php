<?php get_header(); ?>
    <?php get_sidebar(); ?>

    <div id="content">
        <h1>Search results for "<?php echo get_search_query(); ?>"</h1>
	<p>Not your desired result? Try another search with the form on the sidebar!</p><br/>

        <?php
            global $query_string;
            $query_args = explode("&", $query_string);
            $search_query = array();

            foreach ($query_args as $key => $string) {
                $query_split = explode("=", $string);
                $search_query[$query_split[0]] = urldecode($query_split[1]);
            }

            $the_query = new WP_Query($search_query);
            if ($the_query->have_posts()): 
            ?>

            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <article>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else: ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <div class="nav-previous"><?php next_posts_link('Older posts'); ?></div>
        <div class="nav-next"><?php previous_posts_link('Newer posts'); ?></div>
    </div>
<?php get_footer(); ?>

