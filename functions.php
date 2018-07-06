<?php

add_action('wp_enqueue_scripts', function(){
  // add any CSS we need
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css');
  wp_enqueue_style('main', get_template_directory_uri().'/dist/main.css');
  
  // add any JS we need
  wp_enqueue_script('main', get_template_directory_uri().'/dist/main.js', ['jquery'], '', true);
});