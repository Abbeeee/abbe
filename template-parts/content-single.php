<!-- Header to display meta data about post -->
<header class="content-header">
    <div class="meta mb-3">
        <h1 class="header"><strong><?php the_title(); ?></strong></h1>
        <hr>
        <i class="far fa-calendar-alt me-1"></i><span class="date"><?php the_time('d M Y'); ?></span>
        <?php
            the_tags('<span class="tag"><i class="fa fa-tag me-1"></i>', '</span><span class="tag"><i class="fa fa-tag me-1"></i>', '</span>');
        ?>
        <span><i class="fa fa-comment"></i> <?php comments_number(); ?></span>
    </div>
</header>

<img class="abbe-img-single mb-5" src="<?php the_post_thumbnail_url(''); ?>" alt="image">

<div class="content mb-5">
    <?php
    // Option to display posts in different ways depending on the content, this is the way projects are displayed
    the_content();
    ?>
</div>

<?php
// Display comments
comments_template();
?>

