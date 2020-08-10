<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MyTheme Blog Template">
    <meta name="author" content="https://rvlz.io">
    <link rel="shortcut icon" href="images/logo.png">
    <?php
      wp_head();
    ?>
  </head>
  <body>
  <nav
    class="navbar navbar-expand-lg nav-header navbar-light"
    style="background-color: <?= get_field('page_heading_background_color') ?>;"
  >
    <a class="navbar-brand" href="/">Dimpl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
      $defaults = array(
        'theme_location' => 'primary',
        'container' => 'ul',
        'depth' => 1,
        'menu_class' => 'navbar-nav ml-auto',
        'add_li_class'  => 'nav-item'
      );
      wp_nav_menu($defaults);
    ?>
    </div>
  </nav>