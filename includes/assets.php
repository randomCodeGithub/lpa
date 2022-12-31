<?php if (!defined('ABSPATH')) exit;

function pdgc_add_assets()
{

    // Main theme assets.
    wp_enqueue_style('pdgc-main', PDGC_ASSETS . '/css/main.css', array(), PDGC_VER);
    wp_enqueue_script('pdgc-main', PDGC_ASSETS . '/main.js', array('jquery'), PDGC_VER, true);

    // Late loaded assets.
    wp_enqueue_style('pdgc-late', PDGC_ASSETS . '/vendor/theme/late.css', array(), PDGC_VER);
    wp_enqueue_script('pdgc-late', PDGC_ASSETS . '/vendor/theme/late.js', array(), PDGC_VER, true);

    if (is_page_template('templates/page-myprofile.php')) {
        wp_enqueue_style('my-profile', get_stylesheet_directory_uri() . '/assets/vendor/theme/my-profile/style.css');
        wp_enqueue_script('my-profile', get_stylesheet_directory_uri() . '/assets/vendor/theme/my-profile/script.js', array('jquery'), PDGC_VER, true);
        wp_enqueue_style('um-form', get_stylesheet_directory_uri() . '/assets/vendor/theme/um-form/style.css');
        wp_enqueue_script('um-form', get_stylesheet_directory_uri() . '/assets/vendor/theme/um-form/script.js', array('jquery'), PDGC_VER, true);
    }
    
    if (is_page_template('templates/page-userpage.php')) {
        wp_enqueue_style('user-page', get_stylesheet_directory_uri() . '/assets/vendor/theme/user-page/style.css');
        wp_enqueue_script('user-page', get_stylesheet_directory_uri() . '/assets/vendor/theme/user-page/script.js', array('jquery'), PDGC_VER, true);
    }

    if (is_404()) {
        wp_enqueue_style('additional-404', PDGC_ASSETS . '/vendor/theme/404/style.css', array(), PDGC_VER);
    }

    if (is_privacy_policy()) {
        wp_enqueue_style('pdgc-privacy', PDGC_ASSETS . '/vendor/theme/privacy-policy/style.css', array(), PDGC_VER);
    }

    if(is_singular("sludinajums")) {
        wp_enqueue_style('acf-custom-form', get_stylesheet_directory_uri() . '/assets/vendor/theme/acf-form/style.css');
        wp_enqueue_script('acf-custom-form', get_stylesheet_directory_uri() . '/assets/vendor/theme/acf-form/script.js', array('jquery'), PDGC_VER, true);
    }
}
add_action('wp_enqueue_scripts', 'pdgc_add_assets', 20);
