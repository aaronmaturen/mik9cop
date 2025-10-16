<?php
/**
 * Mik9cop Theme Functions
 *
 * @package Mik9cop
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function mik9cop_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 628, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mik9cop' ),
        'footer'  => __( 'Footer Menu', 'mik9cop' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for selective refresh for widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for core custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Add support for block styles
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'mik9cop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet
 */
function mik9cop_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'mik9cop_content_width', 1200 );
}
add_action( 'after_setup_theme', 'mik9cop_content_width', 0 );

/**
 * Register Widget Areas
 */
function mik9cop_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'mik9cop' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'mik9cop' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer', 'mik9cop' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'mik9cop' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Homepage Sidebar', 'mik9cop' ),
        'id'            => 'homepage-sidebar',
        'description'   => __( 'Add widgets here to appear in the homepage sidebar. Great for image galleries and donation information.', 'mik9cop' ),
        'before_widget' => '<div id="%1$s" class="homepage-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'mik9cop' ),
        'id'            => 'footer-1',
        'description'   => __( 'First footer column - typically for About information.', 'mik9cop' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 2', 'mik9cop' ),
        'id'            => 'footer-2',
        'description'   => __( 'Second footer column - typically for Contact information.', 'mik9cop' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mik9cop_widgets_init' );

/**
 * Enqueue Scripts and Styles
 */
function mik9cop_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style( 'mik9cop-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Enqueue custom scripts
    wp_enqueue_script( 'mik9cop-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );

    // Enqueue The Events Calendar dark theme override
    // This loads AFTER the plugin's styles to properly override them
    if ( class_exists( 'Tribe__Events__Main' ) ) {
        wp_enqueue_style(
            'mik9cop-tribe-events-dark',
            get_template_directory_uri() . '/tribe-events-dark-theme.css',
            array( 'tribe-events-full-calendar-style', 'tribe-events-calendar-style' ),
            '1.0.0'
        );
    }

    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'mik9cop_scripts' );

/**
 * Custom template tags for this theme
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * The Events Calendar Support
 */
function mik9cop_events_calendar_support() {
    // Check if The Events Calendar is active
    if ( ! class_exists( 'Tribe__Events__Main' ) ) {
        return;
    }

    // Add theme support for The Events Calendar
    add_theme_support( 'tribe-events-calendar' );

    // Customize the events calendar slug if needed
    // You can change this to match your URL structure preference
    // Example: events, calendar, upcoming-events
}
add_action( 'after_setup_theme', 'mik9cop_events_calendar_support' );
