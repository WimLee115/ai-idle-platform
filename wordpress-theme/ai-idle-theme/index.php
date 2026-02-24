<?php
/**
 * Blog / Fallback Template
 */
get_header();
?>

<section class="section" style="padding-top: 8rem;">
    <div class="container">
        <h1>Blog</h1>

        <?php if (have_posts()) : ?>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="glass-card">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <time style="color: var(--text-muted); font-size: 0.85rem;"><?php the_date(); ?></time>
                        <div style="color: var(--text-secondary); margin-top: 0.75rem; font-size: 0.9rem;">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary" style="margin-top: 1rem;">
                            <?php echo esc_html(ai_idle_t('learn_more')); ?>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p style="color: var(--text-secondary); margin-top: 2rem;">
                <?php echo ai_idle_get_lang() === 'nl'
                    ? 'Geen berichten gevonden.'
                    : 'No posts found.'; ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer();
