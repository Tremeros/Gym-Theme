<?php

// Create menus

function gt_menus() {
    register_nav_menus(array(
        'main-menu'  => 'Main Menu'
    ));
}

add_action('init', 'gt_menus');


// Add styles and scripts

function gt_scripts() {
   wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), false);
   wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), false);
   wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), false);
}

add_action('wp_enqueue_scripts', 'gt_scripts');