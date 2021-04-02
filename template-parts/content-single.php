<!-- Header to display meta data about post -->
<header class="content-header">
    <div class="meta mb-3">
        <h1 class="header"><strong><?php the_title(); ?></strong></h1>
        <hr>
        <i class="far fa-calendar-alt me-1"></i><span class="date"><?php the_time('d M Y'); ?></span>
        <?php

           $terms = get_the_terms($post->ID , 'type');

            foreach ($terms as $term) {
            echo '<span class="tag"><span class="dashicons dashicons-portfolio me-1"></span>';
            echo $term->name;
            echo '</span>';
            }
        ?>
        <span><i class="fa fa-comment"></i> <?php comments_number(); ?></span>
    </div>
</header>

<img class="abbe-img-single" src="<?php the_post_thumbnail_url(''); ?>" alt="image">

<div class="content my-5">
    <?php
    // Option to display posts in different ways depending on the content, this is the way projects are displayed
    the_content();
    ?>
</div>

<div class="content mb-5">
    <h4 class="d-inline">Skills:</h4>

    <?php 

        $terms = get_the_terms($post->ID , 'skills');

        foreach ($terms as $term) {
            echo '<span class="tag">';
            echo $term->name;
            echo '</span>';
        }

    ?>

</div>

<?php
// Display comments
comments_template();
?>

