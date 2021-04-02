<?php get_header(); ?>

<main class="container p-5">

    <?php
        the_content();
    ?>

</main>



<div class="container p-5 my-5">
    <h1 class="mb-5">Recent Projects</h1>
    <div class="row">

    <?php
    query_posts( array('post_type' => 'project',
                        'posts_per_page' => 3
                        ));
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