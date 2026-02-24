<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<section class="section" style="padding-top: 8rem;">
    <div class="container">
        <div class="section-header">
            <h1><?php echo esc_html(ai_idle_t('contact.title')); ?></h1>
            <p><?php echo esc_html(ai_idle_t('contact.subtitle')); ?></p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; max-width: 900px; margin: 0 auto;">
            <div class="contact-form">
                <div class="glass-card">
                    <form id="contact-form" action="mailto:<?php echo esc_attr(ai_idle_get_email()); ?>" method="post" enctype="text/plain">
                        <div class="form-group">
                            <label for="name"><?php echo esc_html(ai_idle_t('contact.name')); ?></label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><?php echo esc_html(ai_idle_t('contact.email')); ?></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="company"><?php echo esc_html(ai_idle_t('contact.company')); ?></label>
                            <input type="text" id="company" name="company">
                        </div>
                        <div class="form-group">
                            <label for="tier"><?php echo esc_html(ai_idle_t('contact.tier')); ?></label>
                            <select id="tier" name="tier">
                                <option value="starter">Starter (&euro;99/<?php echo ai_idle_get_lang() === 'nl' ? 'maand' : 'month'; ?>)</option>
                                <option value="professional" selected>Professional (&euro;299/<?php echo ai_idle_get_lang() === 'nl' ? 'maand' : 'month'; ?>)</option>
                                <option value="enterprise">Enterprise (&euro;749/<?php echo ai_idle_get_lang() === 'nl' ? 'maand' : 'month'; ?>)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message"><?php echo esc_html(ai_idle_t('contact.message')); ?></label>
                            <textarea id="message" name="message" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            <?php echo esc_html(ai_idle_t('contact.send')); ?>
                        </button>
                    </form>
                </div>
            </div>

            <div>
                <div class="glass-card" style="margin-bottom: 1.5rem;">
                    <h3><?php echo esc_html(ai_idle_t('contact.demo_title')); ?></h3>
                    <p style="color: var(--text-secondary); margin-top: 0.75rem;">
                        <?php echo esc_html(ai_idle_t('contact.demo_desc')); ?>
                    </p>
                    <a href="mailto:<?php echo esc_attr(ai_idle_get_email()); ?>?subject=Demo%20request" class="btn btn-accent" style="margin-top: 1rem;">
                        <?php echo esc_html(ai_idle_t('contact.demo_title')); ?>
                    </a>
                </div>

                <div class="glass-card">
                    <h3>Email</h3>
                    <p style="color: var(--text-secondary); margin-top: 0.5rem;">
                        <a href="mailto:<?php echo esc_attr(ai_idle_get_email()); ?>">
                            <?php echo esc_html(ai_idle_get_email()); ?>
                        </a>
                    </p>

                    <h3 style="margin-top: 1.5rem;">Support</h3>
                    <ul style="list-style: none; color: var(--text-secondary); margin-top: 0.5rem; font-size: 0.9rem;">
                        <li style="padding: 0.3rem 0;">Starter: Email (48h)</li>
                        <li style="padding: 0.3rem 0;">Professional: Email + Chat (24h)</li>
                        <li style="padding: 0.3rem 0;">Enterprise: 24/7 SLA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
