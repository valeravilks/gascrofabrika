<?php

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/fonts/stylesheet.css' );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/css/swiper.css' );

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
	wp_enqueue_script( 'infinite-scroll', get_template_directory_uri() . '/js/infinite-scroll.js', array(), '1.0.0', true );
	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.js', array(), '1.0.0', true );
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

    $labels2 = array(
        'name' => 'Услуги',
        'singular_name' => 'Услуги', // админ панель Добавить->Функцию
        'add_new' => 'Добавить услугу',
        'add_new_item' => 'Добавить новую услугу', // заголовок тега <title>
        'edit_item' => 'Редактировать услугу',
        'new_item' => 'Новая услуга',
        'all_items' => 'Все услуги',
        'view_item' => 'Просмотр услуги на сайте',
        'search_items' => 'Искать услуги',
        'not_found' =>  'Услуг не найдено.',
        'not_found_in_trash' => 'Нет услуг.',
        'menu_name' => 'Услугу' // ссылка в меню в админке
    );
    $args2 = array(
        'labels' => $labels2,
        'public' => true, // благодаря этому некоторые параметры можно пропустить
        'menu_icon' => 'dashicons-cart', // иконка корзины
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array(),
    );
    register_post_type('services',$args2);

    $labels3 = array(
        'name' => 'Команда',
        'singular_name' => 'Команда', // админ панель Добавить->Функцию
        'add_new' => 'Добавить в команду',
        'add_new_item' => 'Добавить в команду', // заголовок тега <title>
        'edit_item' => 'Редактировать участника команды',
        'new_item' => 'Новый участник команды',
        'all_items' => 'Вся команда',
        'menu_name' => 'Команда' // ссылка в меню в админке
    );
    $args3 = array(
        'labels' => $labels3,
        'public' => true, // благодаря этому некоторые параметры можно пропустить
        'menu_icon' => 'dashicons-cart', // иконка корзины
        'menu_position' => 6,
        'has_archive' => true,
        'supports' => array(),
    );
    register_post_type('team',$args3);
}

function remove_menus(){
//    remove_menu_page( 'index.php' );                  //Консоль
    remove_menu_page( 'edit.php' );                   //Записи
//    remove_menu_page( 'upload.php' );                 //Медиафайлы
//    remove_menu_page( 'edit.php?post_type=page' );    //Страницы
    remove_menu_page( 'edit-comments.php' );          //Комментарии
//    remove_menu_page( 'themes.php' );                 //Внешний вид
//    remove_menu_page( 'plugins.php' );                //Плагины
//    remove_menu_page( 'users.php' );                  //Пользователи
//    remove_menu_page( 'tools.php' );                  //Инструменты
//    remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menus' );

//Modern Jquery
add_action('wp_enqueue_scripts', 'nwd_modern_jquery');
function nwd_modern_jquery() {
    global $wp_scripts;
    if(is_admin()) return;
    $wp_scripts->registered['jquery-core']->src = get_stylesheet_directory_uri() .'/js/jquery.js';
    $wp_scripts->registered['jquery']->deps = ['jquery-core'];
}

function wpschool_disable_scripts_styles() {
    wp_dequeue_style( 'wpforms-full-css' );
}
add_action( 'wp_enqueue_scripts', 'wpschool_disable_scripts_styles', 99 );

function wpschool_show_script_style_ids() {
    global $wp_scripts, $wp_styles;
    echo "\n" .'<!--'. "\n\n";
    echo 'SCRIPT IDs:'. "\n";
    foreach( $wp_scripts->queue as $handle ) echo $handle . "\n";
    echo "\n" .'STYLE IDs:'. "\n";
    foreach( $wp_styles->queue as $handle ) echo $handle . "\n";
    echo "\n" .'-->'. "\n\n";
}
add_action( 'wp_print_scripts', 'wpschool_show_script_style_ids' );