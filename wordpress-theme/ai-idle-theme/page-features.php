<?php
/**
 * Template Name: Features
 */
get_header();
?>

<section class="section" style="padding-top: 8rem;">
    <div class="container">
        <div class="section-header">
            <h1><?php echo esc_html(ai_idle_t('features.title')); ?></h1>
            <p><?php echo esc_html(ai_idle_t('features.subtitle')); ?></p>
        </div>

        <div class="features-grid">
            <div class="feature-card animate-in">
                <div class="feature-icon">&#x26A1;</div>
                <h3><?php echo esc_html(ai_idle_t('features.monitoring.title')); ?></h3>
                <p><?php echo esc_html(ai_idle_t('features.monitoring.desc')); ?></p>
            </div>
            <div class="feature-card animate-in">
                <div class="feature-icon">&#x1F9E0;</div>
                <h3><?php echo esc_html(ai_idle_t('features.ai.title')); ?></h3>
                <p><?php echo esc_html(ai_idle_t('features.ai.desc')); ?></p>
            </div>
            <div class="feature-card animate-in">
                <div class="feature-icon">&#x1F50D;</div>
                <h3><?php echo esc_html(ai_idle_t('features.anomaly.title')); ?></h3>
                <p><?php echo esc_html(ai_idle_t('features.anomaly.desc')); ?></p>
            </div>
            <div class="feature-card animate-in">
                <div class="feature-icon">&#x1F4A1;</div>
                <h3><?php echo esc_html(ai_idle_t('features.recommendations.title')); ?></h3>
                <p><?php echo esc_html(ai_idle_t('features.recommendations.desc')); ?></p>
            </div>
            <div class="feature-card animate-in">
                <div class="feature-icon">&#x1F3ED;</div>
                <h3><?php echo esc_html(ai_idle_t('features.digital_twin.title')); ?></h3>
                <p><?php echo esc_html(ai_idle_t('features.digital_twin.desc')); ?></p>
            </div>
            <div class="feature-card animate-in">
                <div class="feature-icon">&#x1F331;</div>
                <h3><?php echo esc_html(ai_idle_t('features.carbon.title')); ?></h3>
                <p><?php echo esc_html(ai_idle_t('features.carbon.desc')); ?></p>
            </div>
            <div class="feature-card animate-in">
                <div class="feature-icon">&#x1F3AE;</div>
                <h3><?php echo esc_html(ai_idle_t('features.gamification.title')); ?></h3>
                <p><?php echo esc_html(ai_idle_t('features.gamification.desc')); ?></p>
            </div>
            <div class="feature-card animate-in">
                <div class="feature-icon">&#x1F512;</div>
                <h3><?php echo esc_html(ai_idle_t('features.security.title')); ?></h3>
                <p><?php echo esc_html(ai_idle_t('features.security.desc')); ?></p>
            </div>
            <div class="feature-card animate-in">
                <div class="feature-icon">&#x1F517;</div>
                <h3><?php echo esc_html(ai_idle_t('features.api.title')); ?></h3>
                <p><?php echo esc_html(ai_idle_t('features.api.desc')); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section" style="background: var(--bg-dark); text-align: center;">
    <div class="container">
        <h2><?php echo ai_idle_get_lang() === 'nl'
            ? 'Klaar om te beginnen?'
            : 'Ready to get started?'; ?></h2>
        <p style="color: var(--text-secondary); margin: 1rem 0 2rem;"><?php echo ai_idle_get_lang() === 'nl'
            ? 'Bekijk onze prijzen of vraag een demo aan.'
            : 'Check our pricing or request a demo.'; ?></p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="btn btn-primary btn-lg">
                <?php echo esc_html(ai_idle_t('nav.pricing')); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary btn-lg">
                <?php echo esc_html(ai_idle_t('nav.contact')); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer();
