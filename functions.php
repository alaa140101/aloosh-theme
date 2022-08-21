<?php

function aloosh_register_styles()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('aloosh-style', get_template_directory_uri() . "/assets/css/blog.css", array('aloosh-bootstrap'), $version, 'all');
  wp_enqueue_style('aloosh-bootstrap', get_template_directory_uri() . "/theme-template/css/bootstrap.min.css", array(), '5.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'aloosh_register_styles');
