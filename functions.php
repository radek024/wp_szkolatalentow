<?php
  function szkolatalentow_enqueue_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), 1.0, 'all');
    wp_enqueue_style('configstyle', get_template_directory_uri().'/style.css', array(), 1.0, 'all');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), 1.0, 'all');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Lato:400,700,900', array(), 1.0, 'all');
    wp_enqueue_style('mainstyle', get_template_directory_uri().'/css/style.css', array(), 1.0, 'all');

  	wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3-respond-1.4.2.min.js', array(), '2.8.3', true);
  	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '1.11.2', true);
  }

  add_action('wp_enqueue_scripts', 'szkolatalentow_enqueue_scripts');

add_theme_support('menus');

register_nav_menus(array('top-menu' => __('Menu główne')));
 require get_template_directory().'/inc/wp_bootstrap_navwalker.php';
require get_template_directory().'/inc/customizer.php';

function set_excerpt_length(){
    return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');

function toRoman($var){
  switch($var){
    case "1": echo "I"; break;
    case "2": echo "II"; break;
    case "3": echo "III"; break;
    case "4": echo "IV"; break;
    case "5": echo "V"; break;
    case "6": echo "VI"; break;
    case "7": echo "VII"; break;
    case "8": echo "VIII"; break;
    case "9": echo "IX"; break;
    case "10": echo "X"; break;
    case "11": echo "XI"; break;
    case "12": echo "XII"; break;
  }
}

 require get_template_directory()."/inc/breadcrumbs.php";
