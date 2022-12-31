<?php if (!defined('ABSPATH')) exit;

function pdgc_acf_blocks()
{
    pdg_add_acf_block('Hero', true);
    pdg_add_acf_block('Text and image', true);
    pdg_add_acf_block('Text section', true);
    pdg_add_acf_block('Checklist', true);
    pdg_add_acf_block('Form', true, true, function () {
        wp_enqueue_style('acf-custom-form', get_stylesheet_directory_uri() . '/assets/vendor/theme/acf-form/style.css');
        wp_enqueue_script('acf-custom-form', get_stylesheet_directory_uri() . '/assets/vendor/theme/acf-form/script.js', array('jquery'), PDGC_VER, true);
    });
    pdg_add_acf_block('Ads', true, true);
    pdg_add_acf_block('Add ad form', true);
    pdg_add_acf_block('Banner', true);
    pdg_add_acf_block('User filters', true, true);
}
add_action('acf/init', 'pdgc_acf_blocks');
