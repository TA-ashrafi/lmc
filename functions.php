<?php
function lemon_media_scripts() {
    // Style.css load karne ka code
    wp_enqueue_style( 'lemon-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'lemon_media_scripts' );