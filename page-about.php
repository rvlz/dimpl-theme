<?php
  /*
    Template Name: About Template
  */
  get_header();
?>
<div
  class="container-fluid page-heading <?= get_field('page_heading_fill_viewport') ? 'fill-viewport' : '' ?>"
  style="background-color: <?= get_field('page_heading_background_color') ?>;"
>
  <div class="row align-items-center">
    <div class="col">
      <?php get_template_part('template-parts/title'); ?>
    </div>
    <div class="scroll-area text-center">
      <p>Scroll for more</p>
      <i class="fas fa-arrow-down"></i>
    </div>
  </div>
</div>
<?php get_footer(); ?>