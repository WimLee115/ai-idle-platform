<?php
/**
 * Template Name: Pricing
 */
get_header();
$pricing = ai_idle_get_pricing();
?>

<section class="section" style="padding-top: 8rem;">
    <div class="container">
        <div class="section-header">
            <h1><?php echo esc_html(ai_idle_t('pricing.title')); ?></h1>
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
                <div class="pricing-name">Starter</div>
                <div class="pricing-description"><?php echo esc_html(ai_idle_get_lang() === 'nl' ? 'Ideaal voor MKB' : 'Ideal for SMB'); ?></div>
                <div class="pricing-price" data-monthly="99" data-yearly="950">
                    <span class="currency">&euro;</span>99<span class="period"><?php echo esc_html(ai_idle_t('pricing.month')); ?></span>
                </div>
                <div class="pricing-yearly">&euro;950<?php echo esc_html(ai_idle_t('pricing.year')); ?></div>
                <div class="pricing-setup"><?php echo esc_html(ai_idle_t('pricing.no_setup')); ?></div>
                <ul class="pricing-features">
                    <li>15 <?php echo esc_html(ai_idle_t('pricing.devices')); ?></li>
                    <li>3 <?php echo esc_html(ai_idle_t('pricing.users')); ?></li>
                    <li>1 <?php echo esc_html(ai_idle_t('pricing.locations') === 'locaties' ? 'locatie' : 'location'); ?></li>
                    <li>30 <?php echo esc_html(ai_idle_t('days')); ?> <?php echo esc_html(ai_idle_t('pricing.data_retention')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.basic_anomaly')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.ai_chat_basic')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.standard_reports')); ?></li>
                    <li class="disabled"><?php echo esc_html(ai_idle_t('pricing.ai_predictions')); ?></li>
                    <li class="disabled"><?php echo esc_html(ai_idle_t('pricing.api_webhooks')); ?></li>
                    <li class="disabled"><?php echo esc_html(ai_idle_t('pricing.whitelabel')); ?></li>
                    <li class="disabled"><?php echo esc_html(ai_idle_t('pricing.sso')); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary" style="width:100%;">
                    <?php echo esc_html(ai_idle_t('pricing.cta_start')); ?>
                </a>
            </div>

            <!-- Professional -->
            <div class="pricing-card popular animate-in" data-badge="<?php echo esc_attr(ai_idle_t('pricing.popular')); ?>">
                <div class="pricing-name">Professional</div>
                <div class="pricing-description"><?php echo esc_html(ai_idle_get_lang() === 'nl' ? 'Meest gekozen' : 'Most popular'); ?></div>
                <div class="pricing-price" data-monthly="299" data-yearly="2870">
                    <span class="currency">&euro;</span>299<span class="period"><?php echo esc_html(ai_idle_t('pricing.month')); ?></span>
                </div>
                <div class="pricing-yearly">&euro;2.870<?php echo esc_html(ai_idle_t('pricing.year')); ?></div>
                <div class="pricing-setup"><?php echo esc_html(ai_idle_t('pricing.setup_fee')); ?>: &euro;499</div>
                <ul class="pricing-features">
                    <li>50 <?php echo esc_html(ai_idle_t('pricing.devices')); ?></li>
                    <li>15 <?php echo esc_html(ai_idle_t('pricing.users')); ?></li>
                    <li>5 <?php echo esc_html(ai_idle_t('pricing.locations')); ?></li>
                    <li>1 <?php echo esc_html(ai_idle_t('year')); ?> <?php echo esc_html(ai_idle_t('pricing.data_retention')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.advanced_anomaly')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.ai_chat_full')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.ai_predictions')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.api_webhooks')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.advanced_reports')); ?></li>
                    <li class="disabled"><?php echo esc_html(ai_idle_t('pricing.whitelabel')); ?></li>
                    <li class="disabled"><?php echo esc_html(ai_idle_t('pricing.sso')); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary" style="width:100%;">
                    <?php echo esc_html(ai_idle_t('pricing.cta_start')); ?>
                </a>
            </div>

            <!-- Enterprise -->
            <div class="pricing-card animate-in">
                <div class="pricing-name">Enterprise</div>
                <div class="pricing-description"><?php echo esc_html(ai_idle_get_lang() === 'nl' ? 'Alles inbegrepen' : 'Everything included'); ?></div>
                <div class="pricing-price" data-monthly="749" data-yearly="7190">
                    <span class="currency">&euro;</span>749<span class="period"><?php echo esc_html(ai_idle_t('pricing.month')); ?></span>
                </div>
                <div class="pricing-yearly">&euro;7.190<?php echo esc_html(ai_idle_t('pricing.year')); ?></div>
                <div class="pricing-setup"><?php echo esc_html(ai_idle_t('pricing.setup_fee')); ?>: &euro;1.499</div>
                <ul class="pricing-features">
                    <li><?php echo esc_html(ai_idle_t('unlimited')); ?> <?php echo esc_html(ai_idle_t('pricing.devices')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('unlimited')); ?> <?php echo esc_html(ai_idle_t('pricing.users')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('unlimited')); ?> <?php echo esc_html(ai_idle_t('pricing.locations')); ?></li>
                    <li>5 <?php echo esc_html(ai_idle_t('years')); ?> <?php echo esc_html(ai_idle_t('pricing.data_retention')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.advanced_anomaly')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.ai_chat_unlimited')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.ai_predictions')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.api_webhooks')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.custom_reports')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.whitelabel')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.sso')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.sla')); ?></li>
                    <li><?php echo esc_html(ai_idle_t('pricing.dedicated')); ?></li>
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

<!-- Startup / Installation Costs -->
<section class="section" style="background: var(--bg-dark);">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html(ai_idle_t('pricing.startup_title')); ?></h2>
            <p><?php echo esc_html(ai_idle_t('pricing.startup_subtitle')); ?></p>
        </div>

        <div class="startup-grid">
            <?php
            $tiers = array(
                'starter' => array(
                    'label' => ai_idle_t('pricing.startup_self'),
                    'hw_note' => ai_idle_t('pricing.starter_hw_note'),
                    'server_note' => ai_idle_t('pricing.starter_server_note'),
                    'labor_note' => ai_idle_t('pricing.starter_labor_note'),
                    'training_note' => ai_idle_t('pricing.starter_training_note'),
                    'network_note' => ai_idle_t('pricing.starter_network_note'),
                ),
                'professional' => array(
                    'label' => ai_idle_t('pricing.startup_guided'),
                    'hw_note' => ai_idle_t('pricing.pro_hw_note'),
                    'server_note' => ai_idle_t('pricing.pro_server_note'),
                    'labor_note' => ai_idle_t('pricing.pro_labor_note'),
                    'training_note' => ai_idle_t('pricing.pro_training_note'),
                    'network_note' => ai_idle_t('pricing.pro_network_note'),
                ),
                'enterprise' => array(
                    'label' => ai_idle_t('pricing.startup_managed'),
                    'hw_note' => ai_idle_t('pricing.ent_hw_note'),
                    'server_note' => ai_idle_t('pricing.ent_server_note'),
                    'labor_note' => ai_idle_t('pricing.ent_labor_note'),
                    'training_note' => ai_idle_t('pricing.ent_training_note'),
                    'network_note' => ai_idle_t('pricing.ent_network_note'),
                ),
            );

            foreach ($tiers as $key => $tier_info):
                $p = $pricing[$key];
                $inst = $p['installation'];
                $is_popular = ($key === 'professional');
            ?>
            <div class="startup-card<?php echo $is_popular ? ' popular' : ''; ?> animate-in">
                <div class="startup-card-header">
                    <div class="startup-tier-name"><?php echo esc_html($p['name']); ?></div>
                    <div class="startup-tier-label"><?php echo esc_html($tier_info['label']); ?></div>
                </div>
                <table class="startup-table">
                    <tbody>
                        <tr>
                            <td><?php echo esc_html(ai_idle_t('pricing.startup_hardware')); ?></td>
                            <td class="startup-note"><?php echo esc_html($tier_info['hw_note']); ?></td>
                            <td class="startup-cost">&euro;<?php echo esc_html(number_format($inst['hardware'], 0, ',', '.')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo esc_html(ai_idle_t('pricing.startup_server')); ?></td>
                            <td class="startup-note"><?php echo esc_html($tier_info['server_note']); ?></td>
                            <td class="startup-cost"><?php echo $inst['server'] > 0 ? '&euro;' . esc_html(number_format($inst['server'], 0, ',', '.')) : '&euro;0'; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo esc_html(ai_idle_t('pricing.startup_setup')); ?></td>
                            <td class="startup-note">&nbsp;</td>
                            <td class="startup-cost"><?php echo $p['setup'] > 0 ? '&euro;' . esc_html(number_format($p['setup'], 0, ',', '.')) : '&euro;0'; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo esc_html(ai_idle_t('pricing.startup_labor')); ?></td>
                            <td class="startup-note"><?php echo esc_html($tier_info['labor_note']); ?></td>
                            <td class="startup-cost"><?php echo $inst['labor'] > 0 ? '&euro;' . esc_html(number_format($inst['labor'], 0, ',', '.')) : '&euro;0'; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo esc_html(ai_idle_t('pricing.startup_training')); ?></td>
                            <td class="startup-note"><?php echo esc_html($tier_info['training_note']); ?></td>
                            <td class="startup-cost"><?php echo $inst['training'] > 0 ? '&euro;' . esc_html(number_format($inst['training'], 0, ',', '.')) : '&euro;0'; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo esc_html(ai_idle_t('pricing.startup_network')); ?></td>
                            <td class="startup-note"><?php echo esc_html($tier_info['network_note']); ?></td>
                            <td class="startup-cost"><?php echo $inst['network'] > 0 ? '&euro;' . esc_html(number_format($inst['network'], 0, ',', '.')) : '&euro;0'; ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="startup-total-row">
                            <td colspan="2"><strong><?php echo esc_html(ai_idle_t('pricing.startup_total')); ?></strong></td>
                            <td class="startup-cost"><strong>&euro;<?php echo esc_html(number_format($inst['total'], 0, ',', '.')); ?><?php echo $key === 'enterprise' ? '+' : ''; ?></strong></td>
                        </tr>
                        <tr>
                            <td colspan="2"><?php echo esc_html(ai_idle_t('pricing.startup_time')); ?></td>
                            <td class="startup-cost"><?php echo esc_html($inst['time']); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <?php endforeach; ?>
        </div>

        <p style="text-align: center; color: var(--text-muted); margin-top: 1.5rem; font-size: 0.85rem; font-style: italic;">
            <?php echo esc_html(ai_idle_t('pricing.startup_note')); ?>
        </p>
    </div>
</section>

<!-- ROI Calculator -->
<section class="section" style="background: var(--bg-dark);">
    <div class="container">
        <div class="section-header">
            <h2>ROI Calculator</h2>
            <p><?php echo ai_idle_get_lang() === 'nl'
                ? 'Bereken uw besparing in 10 seconden.'
                : 'Calculate your savings in 10 seconds.'; ?></p>
        </div>

        <div class="roi-calculator">
            <div class="roi-input-group">
                <label><?php echo ai_idle_get_lang() === 'nl'
                    ? 'Maandelijkse energiekosten (&euro;)'
                    : 'Monthly energy costs (&euro;)'; ?></label>
                <input type="number" id="roi-energy-cost" value="3000" min="100" step="100">
            </div>
            <div class="roi-input-group">
                <label><?php echo ai_idle_get_lang() === 'nl'
                    ? 'Aantal machines'
                    : 'Number of machines'; ?></label>
                <input type="number" id="roi-machines" value="20" min="1" step="1">
            </div>
            <div class="roi-input-group">
                <label><?php echo ai_idle_get_lang() === 'nl'
                    ? 'Verwachte besparing (%)'
                    : 'Expected savings (%)'; ?></label>
                <input type="range" id="roi-savings-pct" value="20" min="10" max="30" step="1">
                <span id="roi-savings-label">20%</span>
            </div>

            <div class="roi-result" id="roi-result">
                <div class="roi-result-value" id="roi-monthly-saving">&euro;301</div>
                <div class="roi-result-label"><?php echo ai_idle_get_lang() === 'nl'
                    ? 'Netto maandelijkse besparing (na licentiekosten)'
                    : 'Net monthly savings (after license costs)'; ?></div>
                <div style="margin-top: 1rem; color: var(--text-secondary); font-size: 0.9rem;">
                    <span id="roi-yearly-saving">&euro;3.612</span> <?php echo ai_idle_get_lang() === 'nl' ? 'per jaar' : 'per year'; ?>
                    &bull; <span id="roi-payback">&lt; 1 <?php echo ai_idle_get_lang() === 'nl' ? 'maand' : 'month'; ?></span> <?php echo ai_idle_get_lang() === 'nl' ? 'terugverdientijd' : 'payback'; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
