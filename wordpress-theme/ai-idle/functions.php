<?php
/**
 * AI-IDLE Theme Functions
 *
 * @package AI_IDLE
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'AI_IDLE_VERSION', '1.0.1' );
define( 'AI_IDLE_DIR', get_template_directory() );
define( 'AI_IDLE_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function ai_idle_setup() {
    // Add title tag support
    add_theme_support( 'title-tag' );

    // Add custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary'  => __( 'Hoofdmenu', 'ai-idle' ),
        'footer'   => __( 'Footermenu', 'ai-idle' ),
    ) );

    // Add post thumbnails support
    add_theme_support( 'post-thumbnails' );

    // Set content width
    if ( ! isset( $content_width ) ) {
        $content_width = 1200;
    }
}
add_action( 'after_setup_theme', 'ai_idle_setup' );

/**
 * Enqueue scripts and styles
 */
function ai_idle_scripts() {
    // Main stylesheet
    wp_enqueue_style(
        'ai-idle-style',
        get_stylesheet_uri(),
        array(),
        AI_IDLE_VERSION
    );

    // Google Fonts - Inter
    wp_enqueue_style(
        'ai-idle-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Main JavaScript
    wp_enqueue_script(
        'ai-idle-main',
        AI_IDLE_URI . '/js/main.js',
        array(),
        AI_IDLE_VERSION,
        true
    );

    // Localize script
    wp_localize_script( 'ai-idle-main', 'aiIdle', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'ai_idle_nonce' ),
        'homeUrl' => home_url(),
    ) );
}
add_action( 'wp_enqueue_scripts', 'ai_idle_scripts' );

/**
 * Customizer Settings
 */
function ai_idle_customize_register( $wp_customize ) {
    // Hero Section
    $wp_customize->add_section( 'ai_idle_hero', array(
        'title'    => __( 'Hero Sectie', 'ai-idle' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'hero_title', array(
        'default'           => 'Stop met energie verspillen. Begin met besparen door AI.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'hero_title', array(
        'label'   => __( 'Hero Titel', 'ai-idle' ),
        'section' => 'ai_idle_hero',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'hero_subtitle', array(
        'default'           => 'Het intelligente energiemanagementplatform dat industrieel energieverlies met 30% vermindert door real-time monitoring, autonome AI-agents en slimme automatisering.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'hero_subtitle', array(
        'label'   => __( 'Hero Subtitel', 'ai-idle' ),
        'section' => 'ai_idle_hero',
        'type'    => 'textarea',
    ) );

    // Contact Section
    $wp_customize->add_section( 'ai_idle_contact', array(
        'title'    => __( 'Contact Gegevens', 'ai-idle' ),
        'priority' => 35,
    ) );

    $wp_customize->add_setting( 'contact_email', array(
        'default'           => 'ai-idle@outlook.com',
        'sanitize_callback' => 'sanitize_email',
    ) );

    $wp_customize->add_control( 'contact_email', array(
        'label'   => __( 'Contact E-mail', 'ai-idle' ),
        'section' => 'ai_idle_contact',
        'type'    => 'email',
    ) );

    $wp_customize->add_setting( 'github_url', array(
        'default'           => 'https://github.com/WimLee115/ai-idle-platform',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'github_url', array(
        'label'   => __( 'GitHub URL', 'ai-idle' ),
        'section' => 'ai_idle_contact',
        'type'    => 'url',
    ) );

    $wp_customize->add_setting( 'buymeacoffee_url', array(
        'default'           => 'https://buymeacoffee.com/wimlee115',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'buymeacoffee_url', array(
        'label'   => __( 'Buy Me a Coffee URL', 'ai-idle' ),
        'section' => 'ai_idle_contact',
        'type'    => 'url',
    ) );

    // Stats Section
    $wp_customize->add_section( 'ai_idle_stats', array(
        'title'    => __( 'Statistieken', 'ai-idle' ),
        'priority' => 40,
    ) );

    $stats = array(
        'stat_loc'      => array( 'label' => 'Regels Code', 'default' => '243K+' ),
        'stat_models'   => array( 'label' => 'Database Modellen', 'default' => '97' ),
        'stat_agents'   => array( 'label' => 'AI Agent Tools', 'default' => '21' ),
        'stat_profiles' => array( 'label' => 'Apparaat Profielen', 'default' => '18' ),
        'stat_tests'    => array( 'label' => 'Test Bestanden', 'default' => '841+' ),
        'stat_interval' => array( 'label' => 'Data Interval', 'default' => '10s' ),
    );

    foreach ( $stats as $key => $stat ) {
        $wp_customize->add_setting( $key, array(
            'default'           => $stat['default'],
            'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_control( $key, array(
            'label'   => $stat['label'],
            'section' => 'ai_idle_stats',
            'type'    => 'text',
        ) );
    }
}
add_action( 'customize_register', 'ai_idle_customize_register' );

/**
 * Add preconnect for Google Fonts
 */
function ai_idle_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'ai_idle_resource_hints', 10, 2 );

/**
 * Add SVG support
 */
function ai_idle_mime_types( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'ai_idle_mime_types' );

/**
 * Custom excerpt length
 */
function ai_idle_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'ai_idle_excerpt_length' );

/**
 * Remove WordPress version from head
 */
remove_action( 'wp_head', 'wp_generator' );

/**
 * Add body classes
 */
function ai_idle_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'front-page';
    }
    return $classes;
}
add_filter( 'body_class', 'ai_idle_body_classes' );
