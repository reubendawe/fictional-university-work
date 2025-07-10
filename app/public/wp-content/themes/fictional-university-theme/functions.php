<?php

// Created/defined a brand new function that I chose the name of, within that function
// I called a WordPress function and pointed towards the CSS file that I wanted to load.
function university_files() {
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true); // Pulls in JavasScript and Jquery file from 'build' folder | '1.0' is the version I'm using
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css')); // Pulling in CSS from the 'build' folder
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/index.css')); // Pulling in CSS from the 'build' folder
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); // Pulling in fontawesome from the 'build' folder
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); // Pulling in Google Fonts  from the 'build' folder
}

// Calling in the function, the second argument is the name of the function that I want WP
// to call at a specific moment. The first argument is how I say which moment that will be.
// It's basically saying "Right, Wordpress right before you output the code that's going to 
// go in the header, the wp head area, I want to tack onto that moment and run my custom function
add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

function university_post_types() {
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));
}

add_action('init', 'university_post_types');