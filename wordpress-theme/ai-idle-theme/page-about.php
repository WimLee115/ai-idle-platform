<?php
/**
 * Template Name: About
 */
get_header();
?>

<section class="section" style="padding-top: 8rem;">
    <div class="container">
        <div class="section-header">
            <h1><?php echo esc_html(ai_idle_t('about.title')); ?></h1>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            <div class="glass-card" style="margin-bottom: 2rem;">
                <h2><?php echo esc_html(ai_idle_t('about.mission_title')); ?></h2>
                <p style="color: var(--text-secondary); margin-top: 1rem; font-size: 1.1rem; line-height: 1.8;">
                    <?php echo esc_html(ai_idle_t('about.mission')); ?>
                </p>
            </div>

            <div class="glass-card">
                <h2><?php echo esc_html(ai_idle_t('about.why_title')); ?></h2>
                <ul style="list-style: none; margin-top: 1.5rem;">
                    <li style="padding: 0.75rem 0; color: var(--text-secondary); font-size: 1rem; display: flex; align-items: flex-start; gap: 0.75rem;">
                        <span style="color: var(--accent); font-size: 1.25rem; flex-shrink: 0;">&#x2713;</span>
                        <?php echo esc_html(ai_idle_t('about.why_1')); ?>
                    </li>
                    <li style="padding: 0.75rem 0; color: var(--text-secondary); font-size: 1rem; display: flex; align-items: flex-start; gap: 0.75rem;">
                        <span style="color: var(--accent); font-size: 1.25rem; flex-shrink: 0;">&#x2713;</span>
                        <?php echo esc_html(ai_idle_t('about.why_2')); ?>
                    </li>
                    <li style="padding: 0.75rem 0; color: var(--text-secondary); font-size: 1rem; display: flex; align-items: flex-start; gap: 0.75rem;">
                        <span style="color: var(--accent); font-size: 1.25rem; flex-shrink: 0;">&#x2713;</span>
                        <?php echo esc_html(ai_idle_t('about.why_3')); ?>
                    </li>
                    <li style="padding: 0.75rem 0; color: var(--text-secondary); font-size: 1rem; display: flex; align-items: flex-start; gap: 0.75rem;">
                        <span style="color: var(--accent); font-size: 1.25rem; flex-shrink: 0;">&#x2713;</span>
                        <?php echo esc_html(ai_idle_t('about.why_4')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: var(--bg-dark); text-align: center;">
    <div class="container">
        <h2><?php echo ai_idle_get_lang() === 'nl' ? 'Neem contact op' : 'Get in touch'; ?></h2>
        <p style="color: var(--text-secondary); margin: 1rem 0 2rem;">
            <?php echo ai_idle_get_lang() === 'nl'
                ? 'Ontdek wat AI-IDLE voor uw bedrijf kan betekenen.'
                : 'Discover what AI-IDLE can do for your business.'; ?>
        </p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-lg">
            <?php echo esc_html(ai_idle_t('nav.contact')); ?>
        </a>
    </div>
</section>

<?php get_footer();
