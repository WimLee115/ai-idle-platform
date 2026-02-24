<?php
/**
 * AI-IDLE Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

/**
 * Theme setup
 */
function ai_idle_setup() {
    // i18n support
    load_theme_textdomain('ai-idle', get_template_directory() . '/languages');

    // Theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Register nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ai-idle'),
        'footer' => __('Footer Menu', 'ai-idle'),
    ));
}
add_action('after_setup_theme', 'ai_idle_setup');

/**
 * Enqueue scripts and styles
 */
function ai_idle_enqueue() {
    // Google Fonts
    wp_enqueue_style('ai-idle-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null);

    // Theme stylesheet
    wp_enqueue_style('ai-idle-style', get_stylesheet_uri(), array('ai-idle-fonts'), '2.0.0');

    // Main JS
    wp_enqueue_script('ai-idle-main', get_template_directory_uri() . '/assets/js/main.js', array(), '2.0.0', true);

    // Localize script with data
    wp_localize_script('ai-idle-main', 'aiIdle', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'themeUrl' => get_template_directory_uri(),
        'lang' => ai_idle_get_lang(),
        'i18n' => ai_idle_get_translations(),
    ));

    // Promo script only on front page
    if (is_front_page()) {
        wp_enqueue_script('ai-idle-promo', get_template_directory_uri() . '/assets/js/promo.js', array(), '2.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'ai_idle_enqueue');

/**
 * Get current language (NL default)
 */
function ai_idle_get_lang() {
    if (isset($_GET['lang']) && in_array($_GET['lang'], array('nl', 'en'))) {
        return sanitize_text_field($_GET['lang']);
    }
    if (isset($_COOKIE['ai_idle_lang']) && in_array($_COOKIE['ai_idle_lang'], array('nl', 'en'))) {
        return sanitize_text_field($_COOKIE['ai_idle_lang']);
    }
    return 'nl';
}

/**
 * Get translations for current language
 */
function ai_idle_get_translations() {
    $lang = ai_idle_get_lang();
    $file = get_template_directory() . '/languages/' . ($lang === 'en' ? 'en_US' : 'nl_NL') . '.php';
    if (file_exists($file)) {
        return include $file;
    }
    return include get_template_directory() . '/languages/nl_NL.php';
}

/**
 * Translation helper
 */
function ai_idle_t($key) {
    $translations = ai_idle_get_translations();
    return isset($translations[$key]) ? $translations[$key] : $key;
}

/**
 * Get language switch URL
 */
function ai_idle_lang_switch_url() {
    $current = ai_idle_get_lang();
    $new_lang = $current === 'nl' ? 'en' : 'nl';
    return add_query_arg('lang', $new_lang);
}

/**
 * Pricing data (source of truth from backend config)
 */
function ai_idle_get_pricing() {
    return array(
        'starter' => array(
            'name' => 'Starter',
            'monthly' => 99,
            'yearly' => 950,
            'setup' => 0,
            'devices' => 15,
            'users' => 3,
            'locations' => 1,
            'retention' => '30 ' . ai_idle_t('days'),
            'installation' => array(
                'hardware' => 270,
                'server' => 0,
                'labor' => 0,
                'training' => 0,
                'network' => 0,
                'total' => 270,
                'time' => '~1 ' . (ai_idle_get_lang() === 'nl' ? 'uur' : 'hour'),
            ),
        ),
        'professional' => array(
            'name' => 'Professional',
            'monthly' => 299,
            'yearly' => 2870,
            'setup' => 499,
            'devices' => 50,
            'users' => 15,
            'locations' => 5,
            'retention' => '1 ' . ai_idle_t('year'),
            'installation' => array(
                'hardware' => 1100,
                'server' => 350,
                'labor' => 499,
                'training' => 249,
                'network' => 75,
                'total' => 2772,
                'time' => '~1 ' . (ai_idle_get_lang() === 'nl' ? 'week' : 'week'),
            ),
        ),
        'enterprise' => array(
            'name' => 'Enterprise',
            'monthly' => 749,
            'yearly' => 7190,
            'setup' => 1499,
            'devices' => ai_idle_t('unlimited'),
            'users' => ai_idle_t('unlimited'),
            'locations' => ai_idle_t('unlimited'),
            'retention' => '5 ' . ai_idle_t('years'),
            'installation' => array(
                'hardware' => 2800,
                'server' => 800,
                'labor' => 1499,
                'training' => 749,
                'network' => 250,
                'total' => 7597,
                'time' => '~2-3 ' . (ai_idle_get_lang() === 'nl' ? 'weken' : 'weeks'),
            ),
        ),
    );
}

/**
 * Required pages configuration
 */
function ai_idle_get_required_pages() {
    return array(
        'pricing' => array(
            'title'    => 'Prijzen',
            'template' => 'page-pricing.php',
        ),
        'features' => array(
            'title'    => 'Features',
            'template' => 'page-features.php',
        ),
        'about' => array(
            'title'    => 'Over ons',
            'template' => 'page-about.php',
        ),
        'contact' => array(
            'title'    => 'Contact',
            'template' => 'page-contact.php',
        ),
        'roadmap' => array(
            'title'    => 'Roadmap',
            'template' => 'page-roadmap.php',
        ),
    );
}

/**
 * Create required pages on theme activation
 */
function ai_idle_activate() {
    $pages = ai_idle_get_required_pages();

    foreach ($pages as $slug => $page_data) {
        // Check if page with this slug already exists
        $existing = get_page_by_path($slug);
        if ($existing) {
            // Page exists — ensure template is set
            update_post_meta($existing->ID, '_wp_page_template', $page_data['template']);
            // Republish if it was trashed
            if ($existing->post_status === 'trash') {
                wp_update_post(array(
                    'ID'          => $existing->ID,
                    'post_status' => 'publish',
                ));
            }
            continue;
        }

        // Create the page
        $page_id = wp_insert_post(array(
            'post_title'   => $page_data['title'],
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
            'post_author'  => 1,
        ));

        if ($page_id && !is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', $page_data['template']);
        }
    }

    // Create a Home page if needed and set as static front page
    $home = get_page_by_path('home');
    if (!$home) {
        $home_slug = get_page_by_title('Home');
        if (!$home_slug) {
            $home_id = wp_insert_post(array(
                'post_title'   => 'Home',
                'post_name'    => 'home',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
                'post_author'  => 1,
            ));
        } else {
            $home_id = $home_slug->ID;
        }
    } else {
        $home_id = $home->ID;
    }

    // Set static front page
    if (isset($home_id) && $home_id) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_id);
    }

    // Flush rewrite rules for pretty permalinks
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'ai_idle_activate');

/**
 * Admin notice if required pages are missing + AJAX handler to create them
 */
function ai_idle_admin_check_pages() {
    // Only show on admin pages, only to admins
    if (!current_user_can('manage_options')) return;

    $pages = ai_idle_get_required_pages();
    $missing = array();

    foreach ($pages as $slug => $page_data) {
        $existing = get_page_by_path($slug);
        if (!$existing || $existing->post_status !== 'publish') {
            $missing[$slug] = $page_data['title'];
        }
    }

    if (empty($missing)) return;

    $create_url = wp_nonce_url(
        admin_url('admin-post.php?action=ai_idle_create_pages'),
        'ai_idle_create_pages'
    );

    $names = implode(', ', $missing);
    echo '<div class="notice notice-warning is-dismissible">';
    echo '<p><strong>AI-IDLE Theme:</strong> ';
    echo esc_html(count($missing)) . ' pagina(\'s) ontbreken: <strong>' . esc_html($names) . '</strong>. ';
    echo 'Deze zijn nodig voor het theme. ';
    echo '<a href="' . esc_url($create_url) . '" class="button button-primary" style="margin-left: 8px;">Pagina\'s aanmaken</a>';
    echo '</p></div>';
}
add_action('admin_notices', 'ai_idle_admin_check_pages');

/**
 * Handle admin action to create missing pages
 */
function ai_idle_handle_create_pages() {
    if (!current_user_can('manage_options')) {
        wp_die('Geen toestemming.');
    }
    check_admin_referer('ai_idle_create_pages');

    // Reuse the activation function
    ai_idle_activate();

    // Redirect back with success message
    wp_redirect(admin_url('edit.php?post_type=page&ai_idle_created=1'));
    exit;
}
add_action('admin_post_ai_idle_create_pages', 'ai_idle_handle_create_pages');

/**
 * Show success notice after page creation
 */
function ai_idle_admin_success_notice() {
    if (isset($_GET['ai_idle_created'])) {
        echo '<div class="notice notice-success is-dismissible">';
        echo '<p><strong>AI-IDLE:</strong> Alle benodigde pagina\'s zijn aangemaakt!</p>';
        echo '</div>';
    }
}
add_action('admin_notices', 'ai_idle_admin_success_notice');

/**
 * Ensure pretty permalinks are set (needed for /pricing/ etc.)
 */
function ai_idle_check_permalinks() {
    if (!current_user_can('manage_options')) return;

    $structure = get_option('permalink_structure');
    if (empty($structure)) {
        echo '<div class="notice notice-error">';
        echo '<p><strong>AI-IDLE Theme:</strong> Permalinks staan op "Plain". ';
        echo 'Ga naar <a href="' . esc_url(admin_url('options-permalink.php')) . '">Instellingen &rarr; Permalinks</a> ';
        echo 'en kies "Berichtnaam" (/%postname%/) voor correcte URL\'s.</p>';
        echo '</div>';
    }
}
add_action('admin_notices', 'ai_idle_check_permalinks');

/**
 * Customizer settings
 */
function ai_idle_customize_register($wp_customize) {
    $wp_customize->add_section('ai_idle_contact', array(
        'title' => __('Contact Info', 'ai-idle'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ai_idle_email', array(
        'default' => 'ai-idle@outlook.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('ai_idle_email', array(
        'label' => __('Contact Email', 'ai-idle'),
        'section' => 'ai_idle_contact',
        'type' => 'email',
    ));
}
add_action('customize_register', 'ai_idle_customize_register');

/**
 * Get contact email
 */
function ai_idle_get_email() {
    return get_theme_mod('ai_idle_email', 'ai-idle@outlook.com');
}
