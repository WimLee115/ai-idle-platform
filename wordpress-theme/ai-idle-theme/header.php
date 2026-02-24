<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AI-IDLE — <?php echo esc_attr(ai_idle_t('hero.badge')); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="nav-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
            <span>AI-IDLE</span>
        </a>

        <ul class="nav-menu" id="nav-menu">
            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(ai_idle_t('nav.home')); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/features/')); ?>"><?php echo esc_html(ai_idle_t('nav.features')); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/pricing/')); ?>"><?php echo esc_html(ai_idle_t('nav.pricing')); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/roadmap/')); ?>"><?php echo esc_html(ai_idle_t('nav.roadmap')); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>"><?php echo esc_html(ai_idle_t('nav.about')); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php echo esc_html(ai_idle_t('nav.contact')); ?></a></li>
        </ul>

        <div class="nav-actions">
            <a href="<?php echo esc_url(ai_idle_lang_switch_url()); ?>" class="lang-switch">
                <?php echo ai_idle_get_lang() === 'nl' ? 'EN' : 'NL'; ?>
            </a>
            <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="btn btn-primary">
                <?php echo esc_html(ai_idle_t('nav.demo')); ?>
            </a>
        </div>

        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<main id="main-content">
