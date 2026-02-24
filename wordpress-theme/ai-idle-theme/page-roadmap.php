<?php
/**
 * Template Name: Roadmap
 */
get_header();
$lang = ai_idle_get_lang();
?>

<section class="section" style="padding-top: 8rem;">
    <div class="container">
        <div class="section-header">
            <h1><?php echo esc_html(ai_idle_t('roadmap.title')); ?></h1>
            <p><?php echo esc_html(ai_idle_t('roadmap.subtitle')); ?></p>
        </div>

        <div style="max-width: 700px; margin: 0 auto;">
            <div class="timeline">
                <!-- Q1 -->
                <div class="timeline-item completed">
                    <div class="timeline-date"><?php echo esc_html(ai_idle_t('roadmap.q1')); ?></div>
                    <div class="glass-card">
                        <ul style="list-style: none; color: var(--text-secondary); font-size: 0.9rem;">
                            <li style="padding: 0.3rem 0;">&#x2705; <?php echo $lang === 'nl' ? 'Platform lancering v1.0.0-beta.1' : 'Platform launch v1.0.0-beta.1'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x2705; <?php echo $lang === 'nl' ? '9 AI-algoritmes operationeel' : '9 AI algorithms operational'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x2705; Shelly, Tuya, Tasmota <?php echo $lang === 'nl' ? 'integratie' : 'integration'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x2705; <?php echo $lang === 'nl' ? '4-laags anomaliedetectie' : '4-layer anomaly detection'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x2705; <?php echo $lang === 'nl' ? 'Gamificatie systeem' : 'Gamification system'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x2705; Digital Twin (2D)</li>
                        </ul>
                    </div>
                </div>

                <!-- Q2 -->
                <div class="timeline-item">
                    <div class="timeline-date"><?php echo esc_html(ai_idle_t('roadmap.q2')); ?></div>
                    <div class="glass-card">
                        <ul style="list-style: none; color: var(--text-secondary); font-size: 0.9rem;">
                            <li style="padding: 0.3rem 0;">&#x1F504; AI Chat Assistant 2.0</li>
                            <li style="padding: 0.3rem 0;">&#x1F504; Predictive maintenance alerts</li>
                            <li style="padding: 0.3rem 0;">&#x1F504; <?php echo $lang === 'nl' ? 'Automatische schema-optimalisatie' : 'Automatic schedule optimization'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F504; EPEX <?php echo $lang === 'nl' ? 'prijsintegratie' : 'price integration'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F504; <?php echo $lang === 'nl' ? 'Scheduled PDF rapportages' : 'Scheduled PDF reports'; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Q3 -->
                <div class="timeline-item">
                    <div class="timeline-date"><?php echo esc_html(ai_idle_t('roadmap.q3')); ?></div>
                    <div class="glass-card">
                        <ul style="list-style: none; color: var(--text-secondary); font-size: 0.9rem;">
                            <li style="padding: 0.3rem 0;">&#x1F527; Modbus/BACnet <?php echo $lang === 'nl' ? 'ondersteuning' : 'support'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F527; MQTT broker <?php echo $lang === 'nl' ? 'integratie' : 'integration'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F527; <?php echo $lang === 'nl' ? 'Zonnepaneel / PV integratie' : 'Solar / PV integration'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F527; REST API v2 + GraphQL</li>
                            <li style="padding: 0.3rem 0;">&#x1F527; Webhook marketplace</li>
                        </ul>
                    </div>
                </div>

                <!-- Q4 -->
                <div class="timeline-item">
                    <div class="timeline-date"><?php echo esc_html(ai_idle_t('roadmap.q4')); ?></div>
                    <div class="glass-card">
                        <ul style="list-style: none; color: var(--text-secondary); font-size: 0.9rem;">
                            <li style="padding: 0.3rem 0;">&#x1F680; Multi-tenant <?php echo $lang === 'nl' ? 'architectuur' : 'architecture'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F680; 3D Digital Twin (Three.js)</li>
                            <li style="padding: 0.3rem 0;">&#x1F680; ISO 50001 <?php echo $lang === 'nl' ? 'compliance rapportage' : 'compliance reporting'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F680; <?php echo $lang === 'nl' ? 'Benchmark database' : 'Benchmark database'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F680; White-label partner portal</li>
                        </ul>
                    </div>
                </div>

                <!-- 2027 -->
                <div class="timeline-item">
                    <div class="timeline-date"><?php echo esc_html(ai_idle_t('roadmap.2027')); ?></div>
                    <div class="glass-card">
                        <ul style="list-style: none; color: var(--text-secondary); font-size: 0.9rem;">
                            <li style="padding: 0.3rem 0;">&#x1F52E; <?php echo $lang === 'nl' ? 'Autonome energieoptimalisatie' : 'Autonomous energy optimization'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F52E; Demand response <?php echo $lang === 'nl' ? 'integratie' : 'integration'; ?></li>
                            <li style="padding: 0.3rem 0;">&#x1F52E; AR/VR Digital Twin</li>
                            <li style="padding: 0.3rem 0;">&#x1F52E; <?php echo $lang === 'nl' ? 'Europese uitrol (DE, BE, FR)' : 'European rollout (DE, BE, FR)'; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
