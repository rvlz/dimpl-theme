<?php
  /*
    Template Name: Home Template
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
<div class="container-fluid page-body">
  <div class="row justify-content-center campaign-description">
    <div class="col-8">
      <?php if (get_field('campaign_description')) : ?>
        <p><?php the_field('campaign_description') ?></p>
      <?php endif; ?>
    </div>
  </div>
  <div class="row justify-content-center campaign-services">
    <div class="col-8">
      <div class="title">
        <h2>Campaign Services</h2>
      </div>
      <div class="items">
        <ul>
          <?php
          if ( have_rows('featured_campaign_services') ):
            while ( have_rows('featured_campaign_services') ) : the_row();
            $service = get_sub_field('service');
          ?>
            <li>
              <h3><?php echo esc_html($service->post_title) ?></h3>
              <p><?php echo esc_html($service->post_content) ?></p>
              <a href="<?= esc_url(get_permalink($service->ID)) ?>">Learn more</a>
            </li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="row justify-content-center campaign-works">
    <div class="col-8">
      <div class="title">
        <h2>Our Work</h2>
      </div>
      <div class="items">
        <ul>
          <?php
          if ( have_rows('featured_works') ):
            while ( have_rows('featured_works') ) : the_row();
            $work = get_sub_field('work');
            print_r($work);
          ?>
            <li>
              <h3><?php echo esc_html($work->post_title) ?></h3>
              <p><?php echo esc_html($work->post_content) ?></p>
              <a href="<?= esc_url(get_permalink($work->ID)) ?>">Learn more</a>
            </li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
      </div>
    </div>
  </div>
  <?php get_template_part("template-parts/contact-us") ?>
</div>
<?php get_footer(); ?>
