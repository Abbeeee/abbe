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

  <div class="wrapper">

  <header class="abbe-navbar">
    <div class="container">
      <nav class="navbar py-5">

        <?php
        if (function_exists('the_custom_logo')) {
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
                'items_wrap' => '<ul class="nav nav-pills">%3$s</ul>'
              )
          );
        ?>

      </nav>
    </div>
  </header>

  <div class="main-wrapper">
   