<?php get_header(); ?>
<?php if( ! is_front_page() ): ?>
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?> 
    <?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
