<?php

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/fonts/stylesheet.css' );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/css/swiper.css' );

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
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

add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'main-menu' => 'Меню в шапке',
        'footer-2-menu' => 'Меню во втором подвале',
        'footer-menu-1-1' => 'Меню в первом подвалу 1',
        'footer-menu-1-2' => 'Меню в первом подвалу 2'
    ] );
} );

add_action( 'init', 'true_register_products' ); // Использовать функцию только внутри хука init

function true_register_products() {
    $labels = array(
        'name' => 'Акции',
        'singular_name' => 'Акции', // админ панель Добавить->Функцию
        'add_new' => 'Добавить акцию',
        'add_new_item' => 'Добавить новую акцию', // заголовок тега <title>
        'edit_item' => 'Редактировать акцию',
        'new_item' => 'Новая акция',
        'all_items' => 'Все акции',
        'view_item' => 'Просмотр акций на сайте',
        'search_items' => 'Искать акции',
        'not_found' =>  'Акций не найдено.',
        'not_found_in_trash' => 'Нет акций.',
        'menu_name' => 'Акции' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true, // благодаря этому некоторые параметры можно пропустить
        'menu_icon' => 'dashicons-cart', // иконка корзины
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array(),
        'taxonomies' => array('post_tag')
    );
    register_post_type('stocks',$args);
}

