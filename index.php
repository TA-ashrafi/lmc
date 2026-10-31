<?php get_header(); ?>

<div class="container" style="display: flex; gap: 20px; margin-top: 20px;">
    <main style="flex: 2;">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article style="margin-bottom: 30px; border-bottom: 1px solid #ccc; padding-bottom: 20px;">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Koi post nahi mili.</p>
        <?php endif; ?>
    </main>

    <!-- Sidebar yahan load hoga -->
    <div style="flex: 1;">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>