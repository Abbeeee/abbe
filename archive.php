<?php get_header(); ?>

<div class="container p-5 my-5">
    <h2 class="mb-3">The Archive</h2>
    <p>
        <?php 
        the_tags('<span class="tag"><i class="fa fa-tag me-1"></i>', '</span><span class="tag"><i class="fa fa-tag me-1"></i>', '</span>'); 
        ?>
    </p>
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