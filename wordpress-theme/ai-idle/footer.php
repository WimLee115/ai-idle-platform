<!-- Footer -->
<footer class="footer" id="contact">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="footer-logo">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="32" rx="8" fill="url(#footer-logo-gradient)"/>
                        <path d="M8 22V14L16 8L24 14V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 22V17H19V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="16" cy="13" r="2" fill="#4CAF50"/>
                        <defs>
                            <linearGradient id="footer-logo-gradient" x1="0" y1="0" x2="32" y2="32" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0b7fdb"/>
                                <stop offset="1" stop-color="#7C3AED"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <span>AI-IDLE</span>
                </div>
                <p>Intelligent Industrieel Energiemanagement.<br>Gebouwd met toewijding in Nederland.</p>
                <div class="footer-badges">
                    <span class="footer-badge footer-badge--nl">Gemaakt in Nederland</span>
                    <span class="footer-badge footer-badge--green">Groene Technologie</span>
                </div>
            </div>

            <div class="footer-links-group">
                <h4>Platform</h4>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#agents">AI Agents</a></li>
                    <li><a href="#oplossing">Hoe het werkt</a></li>
                    <li><a href="#duurzaamheid">Duurzaamheid</a></li>
                </ul>
            </div>

            <div class="footer-links-group">
                <h4>Programma</h4>
                <ul>
                    <li><a href="#pilot">Pilotprogramma</a></li>
                    <li><a href="<?php echo esc_url( get_theme_mod( 'github_url', 'https://github.com/WimLee115/ai-idle-platform' ) ); ?>" target="_blank" rel="noopener noreferrer">GitHub</a></li>
                    <li><a href="<?php echo esc_url( get_theme_mod( 'github_url', 'https://github.com/WimLee115/ai-idle-platform' ) ); ?>/discussions" target="_blank" rel="noopener noreferrer">Community</a></li>
                    <li><a href="<?php echo esc_url( get_theme_mod( 'buymeacoffee_url', 'https://buymeacoffee.com/wimlee115' ) ); ?>" target="_blank" rel="noopener noreferrer">Steun Ons</a></li>
                </ul>
            </div>

            <div class="footer-links-group">
                <h4>Contact</h4>
                <ul>
                    <li>
                        <a href="mailto:<?php echo esc_attr( get_theme_mod( 'contact_email', 'ai-idle@outlook.com' ) ); ?>">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            <?php echo esc_html( get_theme_mod( 'contact_email', 'ai-idle@outlook.com' ) ); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_theme_mod( 'github_url', 'https://github.com/WimLee115/ai-idle-platform' ) ); ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> AI-IDLE. Alle rechten voorbehouden.</p>
            <p class="footer-tagline">Industriele energieverspilling verleden tijd maken, machine voor machine.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
