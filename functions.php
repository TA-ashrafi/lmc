<?php
/**
 * Lemon Media Theme Functions & Definitions
 *
 * @package LemonMedia
 */

if ( ! defined( 'ABSPATH' ) ) {
    // Standalone fallback if invoked outside WordPress runtime
    define( 'ABSPATH', __DIR__ . '/' );
}

function lemon_media_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Register Navigation Menus
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Navigation', 'lemon-media' ),
            'footer-menu'  => __( 'Footer Navigation', 'lemon-media' ),
        )
    );
}
add_action( 'after_setup_theme', 'lemon_media_setup' );

/**
 * Enqueue scripts and styles.
 */
function lemon_media_scripts() {
    // Google Fonts: Syne (Brutalist display), Instrument Serif / Playfair, Plus Jakarta Sans (Clean tech sans)
    wp_enqueue_style(
        'lemon-google-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Syne:wght@500;700;800&family=Playfair+Display:ital,wght@1,400;1,600&display=swap',
        array(),
        null
    );

    // Main Theme Stylesheet
    wp_enqueue_style( 'lemon-style', get_stylesheet_uri(), array(), '2.0.0' );

    // GSAP Core & ScrollTrigger CDN
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'gsap-scroll-trigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        array( 'gsap' ),
        '3.12.5',
        true
    );

    // Lenis Smooth Scroll
    wp_enqueue_script(
        'lenis-scroll',
        'https://unpkg.com/lenis@1.1.18/dist/lenis.min.js',
        array(),
        '1.1.18',
        true
    );

    // Theme Custom Interactive JS
    wp_enqueue_script(
        'lemon-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'gsap', 'gsap-scroll-trigger' ),
        '2.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'lemon_media_scripts' );
