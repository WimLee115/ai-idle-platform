<?php
/**
 * Front Page Template
 */
get_header();
$pricing = ai_idle_get_pricing();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content animate-in">
            <div class="hero-badge"><?php echo esc_html(ai_idle_t('hero.badge')); ?></div>
            <h1><?php echo esc_html(ai_idle_t('hero.title')); ?></h1>
            <p><?php echo esc_html(ai_idle_t('hero.subtitle')); ?></p>

            <div class="hero-actions">
                <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="btn btn-primary btn-lg">
                    <?php echo esc_html(ai_idle_t('hero.cta_primary')); ?>
                </a>
                <a href="#promo-section" class="btn btn-secondary btn-lg">
                    <?php echo esc_html(ai_idle_t('hero.cta_secondary')); ?>
                </a>
            </div>

            <div class="hero-stats">
                <div class="hero-stat">
                    <div class="hero-stat-value">15-30%</div>
                    <div class="hero-stat-label"><?php echo esc_html(ai_idle_t('hero.stat_saving')); ?></div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-value">9</div>
                    <div class="hero-stat-label"><?php echo esc_html(ai_idle_t('hero.stat_algorithms')); ?></div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-value"><?php echo esc_html(ai_idle_t('hero.stat_roi_value')); ?></div>
                    <div class="hero-stat-label"><?php echo esc_html(ai_idle_t('hero.stat_roi')); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Preview -->
<section class="section" id="features-preview">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html(ai_idle_t('features.title')); ?></h2>
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
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="<?php echo esc_url(home_url('/features/')); ?>" class="btn btn-secondary">
                <?php echo esc_html(ai_idle_t('learn_more')); ?>
            </a>
        </div>
    </div>
</section>

<!-- Promo Section -->
<section class="section" id="promo-section" style="background: var(--bg-dark);">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html(ai_idle_t('hero.cta_secondary')); ?></h2>
        </div>
        <div class="promo-container">
            <canvas id="promo-canvas" width="960" height="540"></canvas>
            <div class="promo-controls">
                <button id="promo-play" aria-label="Play/Pause">&#x25B6;</button>
                <button id="promo-restart" aria-label="Restart">&#x21BA;</button>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Preview -->
<section class="section" id="pricing-preview">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html(ai_idle_t('pricing.title')); ?></h2>
            <p><?php echo esc_html(ai_idle_t('pricing.subtitle')); ?></p>
        </div>

        <div class="pricing-toggle">
            <label class="active" data-period="monthly"><?php echo esc_html(ai_idle_t('pricing.monthly')); ?></label>
            <div class="toggle-switch" id="pricing-toggle"></div>
            <label data-period="yearly"><?php echo esc_html(ai_idle_t('pricing.yearly')); ?></label>
            <span class="pricing-save-badge"><?php echo esc_html(ai_idle_t('pricing.save')); ?></span>
        </div>

        <div class="pricing-grid">
            <!-- Starter -->
            <div class="pricing-card animate-in">
                <div class="pricing-name"><?php echo esc_html($pricing['starter']['name']); ?></div>
                <div class="pricing-description"><?php echo esc_html($pricing['starter']['devices'] . ' ' . ai_idle_t('pricing.devices')); ?></div>
                <div class="pricing-price" data-monthly="99" data-yearly="950">
                    <span class="currency">&euro;</span>99<span class="period"><?php echo esc_html(ai_idle_t('pricing.month')); ?></span>
                </div>
                <div class="pricing-yearly" data-yearly="<?php echo esc_attr(ai_idle_t('pricing.year')); ?>">&euro;950<?php echo esc_html(ai_idle_t('pricing.year')); ?></div>
                <div class="pricing-setup"><?php echo esc_html(ai_idle_t('pricing.no_setup')); ?></div>
                <ul class="pricing-features">
                    <li>15 <?php echo esc_html(ai_idle_t('pricing.devices')); ?></li>
                    <li>3 <?php echo esc_html(ai_idle_t('pricing.users')); ?></li>
                    <li>30 <?php echo esc_html(ai_idle_t('days')); ?> <?php echo esc_html(ai_idle_t('pricing.data_retention')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.basic_anomaly')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.ai_chat_basic')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.standard_reports')); ?></li>
                    <li class="disabled"><?php echo esc_html(ai_idle_t('pricing.ai_predictions')); ?></li>
                    <li class="disabled"><?php echo esc_html(ai_idle_t('pricing.api_webhooks')); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary" style="width:100%;">
                    <?php echo esc_html(ai_idle_t('pricing.cta_start')); ?>
                </a>
            </div>

            <!-- Professional -->
            <div class="pricing-card popular animate-in" data-badge="<?php echo esc_attr(ai_idle_t('pricing.popular')); ?>">
                <div class="pricing-name"><?php echo esc_html($pricing['professional']['name']); ?></div>
                <div class="pricing-description"><?php echo esc_html($pricing['professional']['devices'] . ' ' . ai_idle_t('pricing.devices')); ?></div>
                <div class="pricing-price" data-monthly="299" data-yearly="2870">
                    <span class="currency">&euro;</span>299<span class="period"><?php echo esc_html(ai_idle_t('pricing.month')); ?></span>
                </div>
                <div class="pricing-yearly">&euro;2.870<?php echo esc_html(ai_idle_t('pricing.year')); ?></div>
                <div class="pricing-setup"><?php echo esc_html(ai_idle_t('pricing.setup_fee')); ?>: &euro;499</div>
                <ul class="pricing-features">
                    <li>50 <?php echo esc_html(ai_idle_t('pricing.devices')); ?></li>
                    <li>15 <?php echo esc_html(ai_idle_t('pricing.users')); ?></li>
                    <li>1 <?php echo esc_html(ai_idle_t('year')); ?> <?php echo esc_html(ai_idle_t('pricing.data_retention')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.advanced_anomaly')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.ai_chat_full')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.ai_predictions')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.api_webhooks')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.advanced_reports')); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary" style="width:100%;">
                    <?php echo esc_html(ai_idle_t('pricing.cta_start')); ?>
                </a>
            </div>

            <!-- Enterprise -->
            <div class="pricing-card animate-in">
                <div class="pricing-name"><?php echo esc_html($pricing['enterprise']['name']); ?></div>
                <div class="pricing-description"><?php echo esc_html(ai_idle_t('unlimited') . ' ' . ai_idle_t('pricing.devices')); ?></div>
                <div class="pricing-price" data-monthly="749" data-yearly="7190">
                    <span class="currency">&euro;</span>749<span class="period"><?php echo esc_html(ai_idle_t('pricing.month')); ?></span>
                </div>
                <div class="pricing-yearly">&euro;7.190<?php echo esc_html(ai_idle_t('pricing.year')); ?></div>
                <div class="pricing-setup"><?php echo esc_html(ai_idle_t('pricing.setup_fee')); ?>: &euro;1.499</div>
                <ul class="pricing-features">
                    <li><?php echo esc_html(ai_idle_t('unlimited')); ?> <?php echo esc_html(ai_idle_t('pricing.devices')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('unlimited')); ?> <?php echo esc_html(ai_idle_t('pricing.users')); ?></li>
                    <li>5 <?php echo esc_html(ai_idle_t('years')); ?> <?php echo esc_html(ai_idle_t('pricing.data_retention')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.advanced_anomaly')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.ai_chat_unlimited')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.custom_reports')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.whitelabel')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.sla')); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent" style="width:100%;">
                    <?php echo esc_html(ai_idle_t('pricing.cta_contact')); ?>
                </a>
            </div>
        </div>

        <p style="text-align: center; color: var(--text-muted); margin-top: 1.5rem; font-size: 0.85rem;">
            <?php echo esc_html(ai_idle_t('pricing.excl_vat')); ?>
        </p>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--bg-dark);">
    <div class="container" style="text-align: center;">
        <h2><?php echo esc_html(ai_idle_t('get_started')); ?></h2>
        <p style="color: var(--text-secondary); margin: 1rem 0 2rem; font-size: 1.125rem;">
            <?php echo ai_idle_get_lang() === 'nl'
                ? 'Start vandaag met besparen. 14 dagen gratis, geen creditcard nodig.'
                : 'Start saving today. 14 days free, no credit card required.'; ?>
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-lg">
                <?php echo esc_html(ai_idle_t('hero.cta_primary')); ?>
            </a>
            <a href="mailto:<?php echo esc_attr(ai_idle_get_email()); ?>" class="btn btn-secondary btn-lg">
                <?php echo esc_html(ai_idle_t('contact.demo_title')); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer();
