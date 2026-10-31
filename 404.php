<?php
/**
 * 404 Not Found template for Lemon Media Theme
 *
 * @package LemonMedia
 */

get_header(); ?>

<main id="primary" class="site-main" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 140px 24px 80px;">
    <div style="max-width: 600px;">
        <span style="font-size: 64px;">🍋</span>
        <h1 style="font-family: var(--font-heading); font-size: clamp(4rem, 8vw, 8rem); font-weight: 900; color: var(--lemon); line-height: 1; margin: 20px 0;">404</h1>
        <h2 style="font-family: var(--font-heading); font-size: 24px; color: #fff; margin-bottom: 16px;">This page squeezed out of existence.</h2>
        <p style="color: var(--text-muted); font-size: 15px; margin-bottom: 30px;">The link you followed may be broken or the page might have been relocated to another dimension.</p>
        <a href="<?php echo function_exists( 'home_url' ) ? home_url( '/' ) : 'preview.php'; ?>" class="btn-lemon-primary">
            <span>Return to Studio Home</span>
            <span>→</span>
        </a>
    </div>
</main>

<?php get_footer(); ?>
