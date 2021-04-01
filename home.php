<?php get_header(); ?>

<div class="container p-5 my-5">

    <div class="row">
    <?php
    query_posts( array('post_type' => 'project'));
        if (have_posts()) {
            while (have_posts()) {
                echo '<div class="col-sm-12 col-md-6 col-lg-4 mb-5">';
                the_post();
                // Option to display posts in different ways depending on the content
                get_template_part('template-parts/content', 'home');
                echo '</div>';
            }
        }
    ?>
    </div>

</div>

<?php get_footer(); ?>