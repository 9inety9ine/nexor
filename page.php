<?php get_header(); ?>

<main>

    <section class="page-content">

        <div class="wrap wrap--x-large">
		
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="large"><?php the_title(); ?></h1>
            <?php the_content(); ?>

        <?php endwhile; else: ?>

            <p>Page not found!</p>

        <?php endif; ?>

        <?php wp_reset_query(); ?>

        </div>

    </div>
    
</main>

<?php get_footer() ;?>