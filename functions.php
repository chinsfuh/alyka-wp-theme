<?php
/**
 * Alyka Theme Functions
 */

// Enqueue styles and scripts
function alyka_enqueue_assets() {
    wp_enqueue_style( 'alyka-style', get_stylesheet_uri() );
    wp_enqueue_script( 'alyka-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'alyka_enqueue_assets' );

// Theme support
function alyka_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'alyka_theme_support' );

// Register menus
function alyka_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'alyka' ),
        'footer' => __( 'Footer Menu', 'alyka' ),
    ) );
}
add_action( 'init', 'alyka_register_menus' );

// Register sidebars
function alyka_register_sidebars() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'alyka' ),
        'id'            => 'primary-sidebar',
        'description'   => __( 'Main sidebar', 'alyka' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'alyka_register_sidebars' );
