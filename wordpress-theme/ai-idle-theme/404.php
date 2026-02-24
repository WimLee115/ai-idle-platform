<?php
/**
 * 404 Template
 */
get_header();
?>

<section class="page-404">
    <div class="container" style="text-align: center;">
        <h1>404</h1>
        <h2><?php echo esc_html(ai_idle_t('404.title')); ?></h2>
        <p style="color: var(--text-secondary); margin: 1rem 0 2rem;">
            <?php echo esc_html(ai_idle_t('404.message')); ?>
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg">
            <?php echo esc_html(ai_idle_t('back_home')); ?>
        </a>
    </div>
</section>

<?php get_footer();
