<?php
/**
 * Generic page template for Lemon Media Theme
 *
 * @package LemonMedia
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="page-container" style="max-width: 1000px; margin: 140px auto 100px; padding: 0 24px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <header class="page-header" style="margin-bottom: 40px;">
                <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4vw, 3.8rem); font-weight: 900; color: #fff;">
                    <?php the_title(); ?>
                </h1>
            </header>
            <div class="page-content" style="font-size: 16px; line-height: 1.8; color: #D1D5DB;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
