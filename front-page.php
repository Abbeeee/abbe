<?php get_header(); ?>

<main class="content px-5 py-5" style="background-color: lightyellow;">

    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
    ?>
    

</main>

<?php get_footer(); ?>