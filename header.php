<?php
/**
 * Header template for Lemon Media Theme
 *
 * @package LemonMedia
 */
?><!DOCTYPE html>
<html <?php if ( function_exists( 'language_attributes' ) ) { language_attributes(); } else { echo 'lang="en"'; } ?>>
<head>
    <meta charset="<?php if ( function_exists( 'bloginfo' ) ) { bloginfo( 'charset' ); } else { echo 'UTF-8'; } ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?php if ( function_exists( 'wp_title' ) ) { wp_title( '|', true, 'right' ); } ?> Lemon Media Company | In-House Content, Performance Marketing & Web Development</title>
    <meta name="description" content="Lemon Media Company - Built by Sisters. Powered by Creativity. Scale your brand with in-house content, performance marketing, packaging, and web development. Delhi & Mumbai.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Syne:wght@600;700;800;900&family=Playfair+Display:ital,wght@1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Fallback stylesheet in case wp_head is empty during preview -->
    <link rel="stylesheet" href="<?php echo function_exists( 'get_stylesheet_uri' ) ? get_stylesheet_uri() : 'style.css'; ?>?v=2.1">

    <?php if ( function_exists( 'wp_head' ) ) { wp_head(); } ?>
</head>
<body <?php if ( function_exists( 'body_class' ) ) { body_class( 'lemon-theme-body' ); } else { echo 'class="lemon-theme-body"'; } ?>>

<!-- CUSTOM FLUID CURSOR -->
<div class="custom-cursor" id="custom-cursor">
    <div class="cursor-dot"></div>
    <div class="cursor-ring"></div>
    <div class="cursor-label" id="cursor-label">VIEW</div>
</div>

<!-- PRELOADER -->
<div id="custom-loader" class="custom-loader">
    <div class="loader-bg-panel"></div>
    <div class="loader-content">
        <div class="loader-badge">
            <span class="lemon-icon">🍋</span>
            <span class="badge-text">LEMON MEDIA CO.</span>
        </div>
        <div class="loader-progress-wrap">
            <div class="loader-counter"><span id="loader-percent">0</span>%</div>
            <div class="loader-bar-bg">
                <div class="loader-bar-fill" id="loader-bar-fill"></div>
            </div>
        </div>
        <div class="loader-status">CREATING THE EXTRAORDINARY</div>
    </div>
</div>

<!-- SOUND & THEME QUICK BAR -->
<div class="ambient-pill">
    <button class="pill-btn sound-toggle" id="soundToggle" aria-label="Toggle ambient effect">
        <span class="pulse-dot"></span>
        <span class="pill-label">STUDIO MODE</span>
    </button>
</div>

<!-- FLOATING HEADER -->
<header class="site-header" id="siteHeader">
    <div class="header-inner">
        
        <!-- BRAND LOGO -->
        <a href="<?php echo function_exists( 'home_url' ) ? home_url( '/' ) : '#'; ?>" class="brand-logo" aria-label="Lemon Media Company Home">
            <div class="logo-mark">
                <span class="lemon-mascot">🍋</span>
            </div>
            <div class="logo-text-group">
                <span class="brand-title">LEMON MEDIA</span>
                <span class="brand-tag">COMPANY &reg;</span>
            </div>
        </a>

        <!-- DESKTOP NAVIGATION MENU -->
        <nav class="desktop-nav" aria-label="Main Navigation">
            <ul class="nav-links">
                <li><a href="#hero" class="nav-link active" data-cursor="magnetic">Home</a></li>
                <li><a href="#services" class="nav-link" data-cursor="magnetic">Services</a></li>
                <li><a href="#work" class="nav-link" data-cursor="magnetic">Work</a></li>
                <li><a href="#philosophy" class="nav-link" data-cursor="magnetic">Story</a></li>
                <li><a href="#stats" class="nav-link" data-cursor="magnetic">Impact</a></li>
                <li><a href="#press" class="nav-link" data-cursor="magnetic">Press</a></li>
                <li><a href="#contact" class="nav-link" data-cursor="magnetic">Contact</a></li>
            </ul>
        </nav>

        <!-- CTA & MOBILE TOGGLE -->
        <div class="header-actions">
            <a href="https://wa.me/919711559909?text=Hi%20Lemon%20Media%20Team,%20I'd%20like%20to%20discuss%20a%20project!" target="_blank" rel="noopener noreferrer" class="btn-talk" data-cursor="hover-btn">
                <span class="btn-text">Talk To Our Team</span>
                <span class="btn-arrow">↗</span>
            </a>

            <button class="mobile-menu-trigger" id="mobileMenuTrigger" aria-label="Toggle Navigation Menu">
                <span class="burger-bar top"></span>
                <span class="burger-bar bot"></span>
            </button>
        </div>

    </div>
</header>

<!-- MOBILE BRUTALIST OVERLAY MENU -->
<div class="mobile-drawer" id="mobileDrawer">
    <div class="mobile-drawer-inner">
        <div class="drawer-header">
            <span class="drawer-logo">LEMON MEDIA</span>
            <button class="drawer-close" id="drawerClose" aria-label="Close menu">&times;</button>
        </div>
        <ul class="drawer-links">
            <li><a href="#hero" class="drawer-link"><span>01</span> Home</a></li>
            <li><a href="#services" class="drawer-link"><span>02</span> Services</a></li>
            <li><a href="#work" class="drawer-link"><span>03</span> Our Work</a></li>
            <li><a href="#philosophy" class="drawer-link"><span>04</span> Our Story</a></li>
            <li><a href="#stats" class="drawer-link"><span>05</span> Numbers</a></li>
            <li><a href="#contact" class="drawer-link"><span>06</span> Contact Us</a></li>
        </ul>
        <div class="drawer-footer">
            <p class="drawer-contact-title">Delhi & Mumbai</p>
            <a href="mailto:nayanika@lemonmediaco.com" class="drawer-mail">nayanika@lemonmediaco.com</a>
            <a href="tel:+919711559909" class="drawer-phone">+91 9711559909</a>
            <div class="drawer-socials">
                <a href="https://www.instagram.com/lemonmediacompany" target="_blank">Instagram</a>
                <a href="https://www.linkedin.com/company/lemon-media-company/" target="_blank">LinkedIn</a>
                <a href="https://www.youtube.com/@lemonmediacompany" target="_blank">YouTube</a>
            </div>
        </div>
    </div>
</div>
