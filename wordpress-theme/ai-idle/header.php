<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AI-IDLE — Het intelligente energiemanagementplatform dat industrieel energieverlies met 30% vermindert door real-time monitoring, autonome AI-agents en slimme automatisering.">
    <meta name="theme-color" content="#0b7fdb">

    <!-- Open Graph -->
    <meta property="og:title" content="AI-IDLE — Intelligent Industrieel Energiemanagement">
    <meta property="og:description" content="Verminder industrieel energieverlies met 30% door real-time AI-monitoring en slimme automatisering.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url() ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigation -->
<nav class="nav" id="mainNav">
    <div class="nav-container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span class="nav-logo-icon">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="32" rx="8" fill="url(#logo-gradient)"/>
                        <path d="M8 22V14L16 8L24 14V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 22V17H19V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="16" cy="13" r="2" fill="#4CAF50"/>
                        <defs>
                            <linearGradient id="logo-gradient" x1="0" y1="0" x2="32" y2="32" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0b7fdb"/>
                                <stop offset="1" stop-color="#7C3AED"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <span class="nav-logo-text">AI-IDLE</span>
            <?php endif; ?>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Menu openen">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-links" id="navLinks">
            <a href="#probleem">Het Probleem</a>
            <a href="#oplossing">Oplossing</a>
            <a href="#features">Features</a>
            <a href="#agents">AI Agents</a>
            <a href="#duurzaamheid">Duurzaamheid</a>
            <a href="#pilot">Pilot</a>
            <a href="#contact" class="nav-cta">Contact</a>
        </div>
    </div>
</nav>
