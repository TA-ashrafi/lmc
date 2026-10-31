<?php
/**
 * Standalone Local Preview Mock
 * Enables browser testing and headless Playwright rendering without a full WordPress environment
 */

// Define WordPress Mock Helpers if not in WP environment
if ( ! function_exists( 'language_attributes' ) ) {
    function language_attributes() { echo 'lang="en"'; }
}
if ( ! function_exists( 'bloginfo' ) ) {
    function bloginfo( $arg ) { echo 'UTF-8'; }
}
if ( ! function_exists( 'wp_head' ) ) {
    function wp_head() {
        echo '<meta name="generator" content="Lemon Media Theme Standalone Preview">';
    }
}
if ( ! function_exists( 'body_class' ) ) {
    function body_class( $cls = '' ) { echo 'class="' . htmlspecialchars( $cls ) . '"'; }
}
if ( ! function_exists( 'home_url' ) ) {
    function home_url( $path = '/' ) { return 'preview.php'; }
}
if ( ! function_exists( 'wp_footer' ) ) {
    function wp_footer() {}
}
if ( ! function_exists( 'get_header' ) ) {
    function get_header() { include __DIR__ . '/header.php'; }
}
if ( ! function_exists( 'get_footer' ) ) {
    function get_footer() { include __DIR__ . '/footer.php'; }
}
if ( ! function_exists( 'get_stylesheet_uri' ) ) {
    function get_stylesheet_uri() { return 'style.css'; }
}
if ( ! function_exists( 'get_template_directory_uri' ) ) {
    function get_template_directory_uri() { return '.'; }
}

include __DIR__ . '/front-page.php';
