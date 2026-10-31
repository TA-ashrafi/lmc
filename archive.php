<?php
/**
 * Archive & Category template for Lemon Media Theme
 *
 * @package LemonMedia
 */

get_header(); ?>

<main id="primary" class="site-main" style="max-width: 1200px; margin: 140px auto 100px; padding: 0 24px;">
    <header class="archive-header" style="margin-bottom: 50px;">
        <span style="font-size: 11px; letter-spacing: 2px; color: var(--lemon); font-weight: 700; text-transform: uppercase;">Archives</span>
        <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4vw, 3.8rem); font-weight: 900; color: #fff;">
            <?php the_archive_title(); ?>
        </h1>
    </header>

    <div class="archive-posts-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 30px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article style="background: var(--obsidian-card); border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 24px;">
                <h3 style="font-family: var(--font-heading); font-size: 20px; color: #fff; margin-bottom: 12px;">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div style="font-size: 14px; color: var(--text-muted); line-height: 1.6; margin-bottom: 16px;">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" style="font-size: 13px; font-weight: 700; color: var(--lemon);">Read Article &rarr;</a>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
