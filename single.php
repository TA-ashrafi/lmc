<?php
/**
 * Single post template for Lemon Media Theme
 *
 * @package LemonMedia
 */

get_header(); ?>

<main id="primary" class="site-main">
    <article class="single-post-container" style="max-width: 900px; margin: 140px auto 100px; padding: 0 24px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <header class="entry-header" style="margin-bottom: 40px; text-align: center;">
                <span style="font-size: 11px; letter-spacing: 2px; color: var(--lemon); font-weight: 700; text-transform: uppercase;">Lemon Insights &bull; <?php echo get_the_date(); ?></span>
                <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4vw, 3.8rem); font-weight: 900; color: #fff; margin-top: 14px; line-height: 1.1;">
                    <?php the_title(); ?>
                </h1>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-featured-image" style="margin-bottom: 40px; border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-light);">
                    <?php the_post_thumbnail( 'full', array( 'style' => 'width: 100%; height: auto;' ) ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content" style="font-size: 17px; line-height: 1.8; color: #D1D5DB;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </article>
</main>

<?php get_footer(); ?>
