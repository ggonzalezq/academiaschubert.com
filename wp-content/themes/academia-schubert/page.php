<?php get_header(); ?>
<?php if( ! is_front_page() ): ?>
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ) : the_post(); ?>
            <article>
                <div class="title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="content">
                    <?php echo str_replace( '<br />', '', get_the_content() ); ?>
                </div>
            </article>
        <?php endwhile; ?> 
    <?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
