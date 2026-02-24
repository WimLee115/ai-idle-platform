<?php
/**
 * Generic Page Template
 */
get_header();
?>

<section class="section" style="padding-top: 8rem;">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div style="max-width: 800px; margin: 0 auto;">
                <h1><?php the_title(); ?></h1>
                <div style="color: var(--text-secondary); margin-top: 2rem; line-height: 1.8;">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer();
