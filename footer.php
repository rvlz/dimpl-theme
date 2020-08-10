  <div class="container-fluid nav-footer">
    <?php
      $defaults = array(
        'theme_location' => 'secondary',
        'container' => 'ul',
        'depth' => 1
      );
      wp_nav_menu($defaults);
    ?>
  </div>
  <?php
      wp_footer();
  ?>
  </body>
</html>
