<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- LOADER -->
<div id="custom-loader">
    <div class="loader-content">
        <img src="https://lemonmediaco.com/wp-content/uploads/2024/05/Horizontal-LMC-Logo-for-Website-with-Lemon.png" alt="Loading..." class="loader-logo">
        <div class="loader-bar-wrap">
            <div class="loader-bar"></div>
        </div>
    </div>
</div>

<!-- HEADER -->
<header class="site-header">
    <div class="header-container">
        
        <div class="logo-section">
            <a href="<?php echo home_url(); ?>">
                <img src="https://lemonmediaco.com/wp-content/uploads/2024/05/Horizontal-LMC-Logo-for-Website-with-Lemon.png" alt="Lemon Media Company" class="main-logo">
            </a>
        </div>

        <nav class="main-navigation">
            <ul class="nav-menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Our Work</a></li>
                <li><a href="#">Our Clients</a></li>
                <li><a href="#">Our Story</a></li>
                <li class="has-dropdown">
                    <a href="#">Our Services <span class="caret">▼</span></a>
                </li>
                <li><a href="#">Join Our Team</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>

        <div class="header-cta">
            <a href="#contact" class="btn-talk">Talk To Our Team</a>
        </div>

    </div>
</header>