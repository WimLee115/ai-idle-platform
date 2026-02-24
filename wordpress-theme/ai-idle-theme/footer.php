</main><!-- #main-content -->

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="nav-logo"><span>AI-IDLE</span></div>
                <p><?php echo esc_html(ai_idle_t('footer.description')); ?></p>
            </div>

            <div class="footer-col">
                <h4><?php echo esc_html(ai_idle_t('footer.product')); ?></h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/features/')); ?>"><?php echo esc_html(ai_idle_t('nav.features')); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/pricing/')); ?>"><?php echo esc_html(ai_idle_t('nav.pricing')); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/roadmap/')); ?>"><?php echo esc_html(ai_idle_t('nav.roadmap')); ?></a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4><?php echo esc_html(ai_idle_t('footer.company')); ?></h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>"><?php echo esc_html(ai_idle_t('nav.about')); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php echo esc_html(ai_idle_t('nav.contact')); ?></a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4><?php echo esc_html(ai_idle_t('footer.support')); ?></h4>
                <ul>
                    <li><a href="mailto:<?php echo esc_attr(ai_idle_get_email()); ?>"><?php echo esc_html(ai_idle_get_email()); ?></a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>&copy; <?php echo date('Y'); ?> AI-IDLE. <?php echo esc_html(ai_idle_t('footer.rights')); ?></span>
            <span>v2.0.0</span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
