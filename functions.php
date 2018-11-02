<?php

  function university_files() {
    wp_enqueue_script('google-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyA-MbzsQHykBsOAcsTNehRXbsJAeoOAtA0', array(), '3', true);
    wp_enqueue_script('google-map-init', get_theme_file_uri('/js/modules/Map.js'), array('google-map', 'jquery'), '0.1', true);
    wp_enqueue_script('university-main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university-main-styles', get_stylesheet_uri(), NULL, microtime());
  }

  function university_features() {
    add_theme_support('title-tag');
  }

  function my_acf_google_map_api($api) {
    $api['key'] = 'AIzaSyA-MbzsQHykBsOAcsTNehRXbsJAeoOAtA0';
    return $api;
  }

  add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
  add_action('wp_enqueue_scripts', 'university_files');
  add_action('after_setup_theme', 'university_features');
?>