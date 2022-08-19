<?php

/*
  ** Function to add my styles
  ** add by Ala
  ** wp_enqueue_style()
  */


function aloosh_add_styles()
{
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
}

/*
  ** Function to add my styles
  ** add by Ala
  ** wp_enqueue_style()
  */

function aloosh_add_scripts()
{
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true);
}


/*
  ** Add Actions
  ** add by Ala
  ** add_action()
  */
add_action('wp_enqueue_scripts', 'aloosh_add_styles');
add_action('wp_enqueue_scripts', 'aloosh_add_scripts');
