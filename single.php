<?php get_header(); ?>

<main class="container px-5 py-5">

    <?php
        if (have_posts()) {
                get_template_part('template-parts/content', 'single');
        }
    ?>
    
</main>

<?php get_footer(); ?>