<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include style files in head -->
    <?php wp_head(); ?>
</head>

<body>

  <header>
    <nav class="navbar abbe-navbar px-5 py-5" style="background-color: lightgrey;">

      <?php
      if(function_exists('the_custom_logo')) {
          the_custom_logo();
      }
      ?>

      <!-- Print the site title dynamically and make it link to Home (front-page.php) -->
      <a class="abbe-site-title" href="<?php echo home_url(); ?>">
      <?php echo get_bloginfo('name'); ?>
      </a>
            
      <?php
        // Print menu from wp
        wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul id="" class="nav nav-pills">%3$s</ul>'
            )
        );
      ?>

    </nav>
  </header>

  <div class="main-wrapper">

   <header class="page-title px-5 py-5" style="background-color: rgb(255, 228, 228);">
       <h2 class="heading"><?php the_title(); ?></h2>
   </header>


  
