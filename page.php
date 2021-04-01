<?php get_header(); ?>

<main class="container px-5 py-5">

    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                // Option to display posts in different ways depending on the content
                get_template_part('template-parts/content', 'page');
            }
        };
    ?>
    
</main>

<?php get_footer(); ?>