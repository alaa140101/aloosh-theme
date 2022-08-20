<?php

function aloosh_register_styles()
{

  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('aloosh-style', get_template_directory_uri() . "/style.css", array('aloosh-bootstrap'), $version, 'all');
  wp_enqueue_style('aloosh-bootstrap', get_template_directory_uri() . "/theme-template/css/bootstrap.min.css", array(), '5.0.0', 'all');
  wp_enqueue_style('aloosh-bootstrap-animate', get_template_directory_uri() . "/theme-template/lib/animate/animate.min.css", array(), '1.0', 'all');
  wp_enqueue_style('aloosh-bootstrap-lightbox', get_template_directory_uri() . "/theme-template/lib/lightbox/css/lightbox.min.css", array(), '1.0', 'all');
  wp_enqueue_style('aloosh-bootstrap-owlcarousel', get_template_directory_uri() . "/theme-template/lib/owlcarousel/assets/owl.carousel.min.css", array(), '1.0', 'all');
  wp_enqueue_style('aloosh-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css", array(), '5.10.0', 'all');
  wp_enqueue_style('aloosh-bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css", array(), '1.4.1', 'all');
}

add_action('wp_enqueue_scripts', 'aloosh_register_styles');

function aloosh_register_scripts()
{

  $version = wp_get_theme()->get('Version');
  // wp_enqueue_style('aloosh-script', get_template_directory_uri() . "/script.js", array('aloosh-bootstrap'), $version, 'all');
  wp_enqueue_script('aloosh-jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), '3.4.1', 'all');
  wp_enqueue_script('aloosh-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js", array(), '5.0.0', 'all');
  wp_enqueue_script('aloosh-wow', get_template_directory_uri() . "/theme-template/lib/wow/wow.min.js", array(), '1.0', 'all');
  wp_enqueue_script('aloosh-easing', get_template_directory_uri() . "/theme-template/lib/easing/easing.min.js", array(), '1.0', 'all');
  wp_enqueue_script('aloosh-typed', get_template_directory_uri() . "/theme-template/lib/typed/typed.min.js", array(), '1.0', 'all');
  wp_enqueue_script('aloosh-counterup', get_template_directory_uri() . "/theme-template/lib/counterup/counterup.min.js", array(), '1.0', 'all');
  wp_enqueue_script('aloosh-owlcarousel', get_template_directory_uri() . "/theme-template/lib/owlcarousel/owl.carousel.min.js", array(), '1.0', 'all');
  wp_enqueue_script('aloosh-isotope', get_template_directory_uri() . "/theme-template/lib/isotope/isotope.pkgd.min.js", array(), '1.0', 'all');
  wp_enqueue_script('aloosh-lightbox', get_template_directory_uri() . "/theme-template/lib/lightbox/js/lightbox.min.js", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'aloosh_register_scripts');
