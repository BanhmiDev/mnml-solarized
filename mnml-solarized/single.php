<?php get_header(); ?>
    <?php get_sidebar(); ?>

    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="post-content">
                    <?php the_content(); ?>
            
                    Posted on <?php the_date('d.m.Y'); ?>

                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>

