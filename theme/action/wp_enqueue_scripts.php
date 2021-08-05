<?php

function theme_scripts(){
    wp_enqueue_style('themeStyle', get_stylesheet_directory_uri() . '/assets/bundles/styles.css', '1.0');
    wp_enqueue_style('Bootstrap', get_stylesheet_directory_uri() . '/assets/bundles/bootstrap.css', '5.0');
    

    wp_register_script('themeScripts', get_stylesheet_directory_uri() . '/assets/bundles/scripts.js', array('jquery'), '1.0', true);
    wp_register_script('Bootstrap', get_stylesheet_directory_uri() . '/assets/bundles/bootstrap.min.js', false, '1.0', true);
 
    wp_enqueue_script('themeScripts');

    wp_enqueue_script('Bootstrap');



}
add_action('wp_enqueue_scripts', 'theme_scripts');
