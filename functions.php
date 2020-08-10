<?php

function dimpl_theme_support() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'dimpl_theme_support');

function dimpl_register_styles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('dimpl-style', get_template_directory_uri() . '/style.css', array('dimpl-bootstrap'), $version, 'all');
  wp_enqueue_style('dimpl-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
}

add_action('wp_enqueue_scripts', 'dimpl_register_styles');

function dimpl_register_scripts() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('dimpl-fontawesome', 'https://kit.fontawesome.com/7934fc590c.js', array(), 'all', false);
  wp_enqueue_script('dimpl-jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', 'all', true);
  wp_enqueue_script('dimpl-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), '1.16.1', 'all', true);
  wp_enqueue_script('dimpl-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(), '4.7.0', 'all', true);
  wp_enqueue_script('dimpl-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, 'all', true);
}

add_action('wp_enqueue_scripts', 'dimpl_register_scripts');

function dimpl_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'dimpl_theme_setup');

function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_link_atts($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');
?>
