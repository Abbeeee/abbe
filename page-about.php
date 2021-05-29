<?php get_header(); ?>

<main class="container px-5 py-5">

    <?php
    // Option to display posts in different ways depending on the content, this is the way projects are displayed
    the_content();
    
    ?>

    <div class="">
        <h3 class="mb-3">What I do:</h3>
        <?php 
        // Display the types
        $categories = get_categories('taxonomy=type&post_type=project'); 
        foreach ($categories as $category) {
            echo '<span class="tag"><span class="dashicons dashicons-portfolio"></span> ';
            echo $category->name;
            echo '</span>';
        } 
        ?>
    </div>

    <div class="mb-5">
        <h3 class="mb-3 mt-5">What I know:</h3>
        <?php 
        // Display the types
        $skillz = get_categories('taxonomy=skills&post_type=project'); 
        foreach ($skillz as $skill) {
            echo '<span class="tag">';
            echo $skill->name;
            echo '</span>';
        } 
        ?>
    </div>

</main>

<?php get_footer(); ?>