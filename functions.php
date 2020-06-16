<?php

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/fonts/stylesheet.css' );

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' => 'Настроки сайта',
        'menu_title' => 'Настройки сайта',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

//    acf_add_options_sub_page(array(
//        'page_title' => 'Общие настройки',
//        'menu_title' => 'Общие настройки',
//        'parent_slug' => 'theme-general-settings',
//    ));
//
//    acf_add_options_sub_page(array(
//        'page_title' => 'Theme Footer Settings',
//        'menu_title' => 'Footer',
//        'parent_slug' => 'theme-general-settings',
//    ));
}