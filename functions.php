<?php

// -------------------------------
//      Theme support
// -------------------------------

// Adds theme stuff that is changed through wp
function abbe_theme_support() {
    // Automatically change page title depending on current page
    add_theme_support('title-tag');
    // Add option to add logo through customize theme
    add_theme_support('custom-logo');
    // Add option to add thumbnail image to posts
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'abbe_theme_support');


// Set up wp menus
function abbe_menus() {
    $locations = array(
        'primary' => 'Top Nav Bar',
        'footer' => 'Footer Nav'
    );
    register_nav_menus($locations);
}

add_action('init', 'abbe_menus');


// Create custom taxanomy
function project_post_type(){
    // hierachical default = false
    $args = array(
        'label' => 'Projects',
        'public' => true,
        'menu_icon' => 'dashicons-images-alt',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments'),
        'taxonomies' => array('post_tag')       
    );
    register_post_type('project', $args);

    $taxargs = array(
        'public' => true,
        'label' => 'type',
        'hierarchical' => false  
    );
    register_taxonomy('type', 'project', $taxargs);
}

add_action('init', 'project_post_type');



// -------------------------------
//      Include files
// -------------------------------

// function to run asset files
function abbe_register_styles() {

    // Make the version dynamic, get it from css file
    $version = wp_get_theme()->get('Version');

    // Get stylesheets (name, src, dependencis, version, media)
    wp_enqueue_style ('abbe-style', get_template_directory_uri() . '/style.css', array('bootsrap-style'), $version, 'all');
    wp_enqueue_style ('bootsrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css', array(), '5.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'abbe_register_styles');


// function to run script files
function abbe_register_scripts() {

    // Get script, (name, src, dependencis, version, in_footer)
    wp_enqueue_script ('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true);
    wp_enqueue_script ('fontawesome-script', 'https://kit.fontawesome.com/426c9d9c9a.js', '1.0', 'all');
    wp_enqueue_script ('abbe-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'abbe_register_scripts');











// -------------------------------
//      Widgets
// -------------------------------

function abbe_widget_area() {

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'siderbar-1',
            'description' => 'Sidebar Widget Area',
        )
    );

}

add_action('widgets_init', 'abbe_widget_area');

?>