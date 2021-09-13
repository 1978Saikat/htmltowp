<?php

/**
 *  
 */
function fn_theme_scripts(){
    /** include style files */
    // adding font bootstrap css
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/plugins/bootstrap/css/bootstrap.min.css');

    // adding themify-icons
    wp_enqueue_style('themify-icons',get_template_directory_uri().'/assets/plugins/themify/css/themify-icons.css');
    
    // adding all css
    wp_enqueue_style('all',get_template_directory_uri().'/assets/plugins/fontawesome/css/all.css');
    
    // adding magnific-popup
    wp_enqueue_style('magnific-popup',get_template_directory_uri().'/assets/plugins/magnific-popup/dist/magnific-popup.css');

    // <!-- Owl Carousel CSS -->
    // adding slick
    wp_enqueue_style('slick',get_template_directory_uri().'/assets/plugins/slick-carousel/slick/slick.css');
    
    // adding slick-theme
    wp_enqueue_style('slick-theme',get_template_directory_uri().'/assets/plugins/slick-carousel/slick/slick-theme.css');
    
    // adding custom style
    // wp_enqueue_style('custome-style',get_stylesheet_uri().'/dist/css/style.min.css');
    wp_enqueue_style('custome-style',get_template_directory_uri().'/dist/css/style.min.css');

    // @media query responsive file
    wp_enqueue_style('media_responsive',get_template_directory_uri().'/assets/css/_media.css'); 
}

add_action('wp_enqueue_scripts', 'fn_theme_scripts');

// Adding New features to wordpress theme
function fn_theme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'fn_theme_supports');

?> 