<?php

// -------------------------------
//      Include files
// -------------------------------

// function to run asset files
function abbe_register_styles() {

// Get stylesheet, tells it to look for a stylesheet called style
wp_enqueue_style ('style', get_stylesheet_uri());

// Get script, (name, src, dependencis, version, in_footer)
wp_enqueue_script ('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);

}



?>