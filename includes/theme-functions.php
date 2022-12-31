<?php if (!defined('ABSPATH')) exit;

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args)
{

    // loop
    foreach ($items as &$item) {

        $widthAuto = get_field('btn_style', $item);
        $profileBtn = get_field('profile_btn', $item);
        if ($widthAuto) {
            array_push($item->classes, 'header-btn');
        }
        if ($profileBtn) {
            array_push($item->classes, 'profile-btn');
        }

        if (isset($_GET["mekle-atbalstu"])) {
            if (strpos($item->url, "mekle-atbalstu") !== false) {
                array_push($item->classes, 'current-menu-item');
            }
        }
        if (isset($_GET["piedava-atbalstu"])) {
            if (strpos($item->url, "piedava-atbalstu") !== false) {
                array_push($item->classes, 'current-menu-item');
            }
        }
    }

    // return
    return $items;
}

function select_field($field)
{
    $field['placeholder'] = __('Visas', "lpa");
    return $field;
}

add_filter('acf/load_field/type=taxonomy', 'select_field');

function phone_field($field)
{
    global $user_ID;
    global $current_user;
    $field['placeholder'] = __('+371', "lpa");
    $field['default_value'] = "+371";
    if ($user_ID) {
        if (get_user_meta($current_user->ID, 'phone_number', true)) {
            $field['default_value'] = get_user_meta($current_user->ID, 'phone_number', true);
        }
    }

    return $field;
}

add_filter('acf/load_field/name=phone', 'phone_field');


/**
 * PASSWORD VALIDATION
 */
add_action('um_change_password_errors_hook', 'um_081821_change_password_errors_hook', 1);
function um_081821_change_password_errors_hook($args)
{
    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', utf8_decode($args['user_password']));
    $number    = preg_match('@[0-9]@', utf8_decode($args['user_password']));
    $specialChars = preg_match('@[^\w]@', utf8_decode($args['user_password']));
    if (strlen(utf8_decode($args['user_password'])) < 8) {
        UM()->form()->add_error('user_password', __('Jūsu parolei jāsatur vismaz 8 rakstzīmes', 'lpa'));
    }
    if (!$uppercase) {
        UM()->form()->add_error('user_password', __('Parolei jāiekļauj vismaz viens lielais burts', 'lpa'));
    }
    if (!$number) {
        UM()->form()->add_error('user_password', __('Parolei jāiekļauj vismaz viens cipars', 'lpa'));
    }
    if (!$specialChars) {
        UM()->form()->add_error('user_password', __('Parolei jāiekļauj vismaz viena speciālā rakstzīme', 'lpa'));
    }
}

/**
 * Validate field Mobile Number
 */
function um_custom_validate_mobile_number($key, $array, $args)
{
    if (!empty($args[$key]) && isset($args[$key]) && !preg_match('/^(\+371)?([\s]?)([2]\d{1}|[6]\d{1})([\s]?)(\d{3})([\s]?)(\d{3})$/', $args[$key])) {
        UM()->form()->add_error($key, __('Lūdzu, ievadiet derīgu tālruņa numuru.', 'lpa'));
    }
}
add_action('um_custom_field_validation_mobile_number', 'um_custom_validate_mobile_number', 30, 3);

/**
 * Validate Login form
 */
add_action('um_submit_form_login', 'um_custom_validate_username', 999, 1);
function um_custom_validate_username($post_form)
{
    if (!is_email($post_form['username'])) {
        UM()->form()->add_error('username', __('Lūdzu, ievadiet derīgu e-pasta adresi.', 'lpa'));
    }
    if (!email_exists($post_form['username'])) {
        UM()->form()->add_error('username', sprintf(__('Lietotājs ar šādu e-pasta adresi neeksistē. Lūdzu, mēģiniet vēlreiz vai <a href="%s">reģistrējieties</a>', 'lpa'), home_url() . "/registreties"));
    }
}

/**
 * Add email field to Edit profile
 */

add_action("um_submit_form_profile", "um_012722_email_validation", 1);
function um_012722_email_validation($post_form)
{

    if (isset($post_form['user_email']) && !empty($post_form['user_email'])) {
        $user = wp_get_current_user();

        if (email_exists($post_form['user_email']) && $post_form['user_email'] !== $user->user_email) {
            UM()->form()->add_error('user_email', __('Your email address is already taken', 'ultimate-member'));
        }
    }
}

add_filter('um_user_profile_restricted_edit_fields', 'um_012722_enable_email_address_editing');
function um_012722_enable_email_address_editing($fields)
{

    unset($fields[0]);
    return $fields;
}

function acf_phone_validate($valid, $value, $field, $input_name)
{

    // Bail early if value is already invalid.
    if (!$valid) {
        return $valid;
    }

    // Phone validation
    if (is_string($value) && !preg_match('/^(\+371)?([\s]?)([2]\d{1}|[6]\d{1})([\s]?)(\d{3})([\s]?)(\d{3})$/', $value)) {
        return __('Lūdzu, ievadiet derīgu tālruņa numuru.', 'lpa');
    }
    return $valid;
}

add_filter('acf/validate_value/name=phone', 'acf_phone_validate', 10, 4);


function userProfilePhoto($meta_value, $user_id)
{
    if (!$meta_value) {
        return get_avatar_url($user_id);
    }
    return "" . get_site_url() . "/wp-content/uploads/ultimatemember/{$user_id}/{$meta_value}";
}

add_filter('um_user_shortcode_filter__profile_photo', 'userProfilePhoto', 10, 2);

function remove_user_account()
{
    global $current_user;
    global $user_ID;
    if ($user_ID) {
        if (isset($_POST['remove_account'])) {
            require_once(ABSPATH . 'wp-admin/includes/user.php');
            wp_delete_user($current_user->ID);
        }

        if ($_POST['remove_post']) {
            if (isset($_POST['delete_post_id'])) {
                if (get_post($_POST['delete_post_id'])->post_author == $current_user->ID) {
                    wp_trash_post($_POST['delete_post_id']);
                }
            }
        }
    }
}
add_action('init', 'remove_user_account');


function my_reset_password_errors($post)
{
    if (!is_email($post['username_b'])) {
        UM()->form()->add_error('username_b', __('Lūdzu, ievadiet derīgu e-pasta adresi', 'lpa'));
        $_POST['um_error'] = 'error';
    }

    if (!email_exists($post['username_b'])) {
        UM()->form()->add_error('username_b', sprintf(__('Lietotājs ar šādu e-pasta adresi neeksistē. Lūdzu, mēģiniet vēlreiz vai <a href="%s">reģistrējieties</a>', 'lpa'), home_url() . "/registreties"));
        $_POST['um_error'] = 'error';
    }
}
add_action('um_reset_password_errors_hook', 'my_reset_password_errors', 9999, 1);

function custom_redirect_after_updating_profile($to_update)
{
    global $current_user;
    if (is_page('mans-profils')) {
        $page = get_page_by_path('mans-profils');

        
        update_user_meta($current_user->ID, "is_avatar_visible", $_POST['is_avatar_visible']);
        update_user_meta($current_user->ID, "is_username_visible", $_POST['is_username_visible']);
        update_user_meta($current_user->ID, "is_email_visible", $_POST['is_email_visible']);
        update_user_meta($current_user->ID, "is_phone_visible", $_POST['is_phone_visible']);
        update_user_meta($current_user->ID, "is_darbibas_formats_visible", $_POST['is_darbibas_formats_visible']);
        update_user_meta($current_user->ID, "is_website_visible", $_POST['is_website_visible']);
        update_user_meta($current_user->ID, "is_loma_programma_visible", $_POST['is_loma_programma_visible']);
        update_user_meta($current_user->ID, "is_apraksts_darbibas_joma_visible", $_POST['is_apraksts_darbibas_joma_visible']);
        // Daudzums / Veids

        update_user_meta($current_user->ID, "activity_format", $_POST['activity_format']);
        update_user_meta($current_user->ID, "computer_amount_text", $_POST['computer_amount_text']);
        update_user_meta($current_user->ID, "computer_type_text", $_POST['computer_type_text']);

        update_user_meta($current_user->ID, "electrical_devices_amount_text", $_POST['electrical_devices_amount_text']);
        update_user_meta($current_user->ID, "electrical_devices_type_text", $_POST['electrical_devices_type_text']);

        update_user_meta($current_user->ID, "furniture_amount_text", $_POST['furniture_amount_text']);
        update_user_meta($current_user->ID, "furniture_type_text", $_POST['furniture_type_text']);

        update_user_meta($current_user->ID, "outdoor_activities_amount_items", $_POST['outdoor_activities_amount_items']);
        update_user_meta($current_user->ID, "outdoor_activities_type_items", $_POST['outdoor_activities_type_items']);

        update_user_meta($current_user->ID, "vehicles_amount", $_POST['vehicles_amount']);
        update_user_meta($current_user->ID, "vehicles_type", $_POST['vehicles_type']);

        update_user_meta($current_user->ID, "digital_content_amount_text", $_POST['digital_content_amount_text']);
        update_user_meta($current_user->ID, "digital_content_type_text", $_POST['digital_content_type_text']);

        update_user_meta($current_user->ID, "food_amount_text", $_POST['food_amount_text']);
        update_user_meta($current_user->ID, "food_type_text", $_POST['food_type_text']);

        update_user_meta($current_user->ID, "clothes_amount_text", $_POST['clothes_amount_text']);
        update_user_meta($current_user->ID, "clothes_type_text", $_POST['clothes_type_text']);

        update_user_meta($current_user->ID, "print_materrial_amount_text", $_POST['print_materrial_amount_text']);
        update_user_meta($current_user->ID, "print_materrial_type_text", $_POST['print_materrial_type_text']);

        update_user_meta($current_user->ID, "other_amount_text", $_POST['other_amount_text']);
        update_user_meta($current_user->ID, "other_type_text", $_POST['other_type_text']);

        // Daudzums / Veids
        update_user_meta($current_user->ID, "computer_amount_text_offer", $_POST['computer_amount_text_offer']);
        update_user_meta($current_user->ID, "computer_type_text_offer", $_POST['computer_type_text_offer']);

        update_user_meta($current_user->ID, "electrical_devices_amount_text_offer", $_POST['electrical_devices_amount_text_offer']);
        update_user_meta($current_user->ID, "electrical_devices_type_text_offer", $_POST['electrical_devices_type_text_offer']);

        update_user_meta($current_user->ID, "furniture_amount_text_offer", $_POST['furniture_amount_text_offer']);
        update_user_meta($current_user->ID, "furniture_type_text_offer", $_POST['furniture_type_text_offer']);

        update_user_meta($current_user->ID, "outdoor_activities_amount_items_offer", $_POST['outdoor_activities_amount_items_offer']);
        update_user_meta($current_user->ID, "outdoor_activities_type_items_offer", $_POST['outdoor_activities_type_items_offer']);

        update_user_meta($current_user->ID, "vehicles_amount_offer", $_POST['vehicles_amount_offer']);
        update_user_meta($current_user->ID, "vehicles_type_offer", $_POST['vehicles_type_offer']);

        update_user_meta($current_user->ID, "digital_content_amount_text_offer", $_POST['digital_content_amount_text_offer']);
        update_user_meta($current_user->ID, "digital_content_type_text_offer", $_POST['digital_content_type_text_offer']);

        update_user_meta($current_user->ID, "food_amount_text_offer", $_POST['food_amount_text_offer']);
        update_user_meta($current_user->ID, "food_type_text_offer", $_POST['food_type_text_offer']);

        update_user_meta($current_user->ID, "clothes_amount_text_offer", $_POST['clothes_amount_text_offer']);
        update_user_meta($current_user->ID, "clothes_type_text_offer", $_POST['clothes_type_text_offer']);

        update_user_meta($current_user->ID, "print_materrial_amount_text_offer", $_POST['print_materrial_amount_text_offer']);
        update_user_meta($current_user->ID, "print_materrial_type_text_offer", $_POST['print_materrial_type_text_offer']);

        update_user_meta($current_user->ID, "other_amount_text_offer", $_POST['other_amount_text_offer']);
        update_user_meta($current_user->ID, "other_type_text_offer", $_POST['other_type_text_offer']);

        // Platba / Vairāk info
        update_user_meta($current_user->ID, "premises_area_text", $_POST['premises_area_text']);
        update_user_meta($current_user->ID, "premises_more_text", $_POST['premises_more_text']);

        update_user_meta($current_user->ID, "land_area_text", $_POST['land_area_text']);
        update_user_meta($current_user->ID, "land_more_text", $_POST['land_more_text']);

        // Platba / Vairāk info
        update_user_meta($current_user->ID, "premises_area_text_offer", $_POST['premises_area_text_offer']);
        update_user_meta($current_user->ID, "premises_more_text_offer", $_POST['premises_more_text_offer']);

        update_user_meta($current_user->ID, "land_area_text_offer", $_POST['land_area_text_offer']);
        update_user_meta($current_user->ID, "land_more_text_offer", $_POST['land_more_text_offer']);

        // Daudzums / Vairāk info
        update_user_meta($current_user->ID, "financial_resources_amount_text", $_POST['financial_resources_amount_text']);
        update_user_meta($current_user->ID, "financial_resources_more_text", $_POST['financial_resources_more_text']);

        // Daudzums / Vairāk info
        update_user_meta($current_user->ID, "financial_resources_amount_text_offer", $_POST['financial_resources_amount_text_offer']);
        update_user_meta($current_user->ID, "financial_resources_more_text_offer", $_POST['financial_resources_more_text_offer']);

        // Apjoms/h skaits / Vairāk
        update_user_meta($current_user->ID, "training_volume", $_POST['training_volume']);
        update_user_meta($current_user->ID, "training_more", $_POST['training_more']);

        update_user_meta($current_user->ID, "consultations_of_psychologists_volume", $_POST['consultations_of_psychologists_volume']);
        update_user_meta($current_user->ID, "consultations_of_psychologists_more", $_POST['consultations_of_psychologists_more']);

        update_user_meta($current_user->ID, "legal_advice_volume", $_POST['legal_advice_volume']);
        update_user_meta($current_user->ID, "legal_advice_more", $_POST['legal_advice_more']);

        update_user_meta($current_user->ID, "accounting_consulting_volume", $_POST['accounting_consulting_volume']);
        update_user_meta($current_user->ID, "accounting_consulting_more", $_POST['accounting_consulting_more']);

        update_user_meta($current_user->ID, "research_support_volume", $_POST['research_support_volume']);
        update_user_meta($current_user->ID, "research_support_more", $_POST['research_support_more']);

        update_user_meta($current_user->ID, "it_support_volume", $_POST['it_support_volume']);
        update_user_meta($current_user->ID, "it_support_more", $_POST['it_support_more']);

        update_user_meta($current_user->ID, "foto_video_design_volume", $_POST['foto_video_design_volume']);
        update_user_meta($current_user->ID, "foto_video_design_more", $_POST['foto_video_design_more']);

        update_user_meta($current_user->ID, "other_record_volume", $_POST['other_record_volume']);
        update_user_meta($current_user->ID, "other_record_more", $_POST['other_record_more']);

        // Apjoms/h skaits / Vairāk
        update_user_meta($current_user->ID, "training_volume_offer", $_POST['training_volume_offer']);
        update_user_meta($current_user->ID, "training_more_offer", $_POST['training_more_offer']);

        update_user_meta($current_user->ID, "consultations_of_psychologists_volume_offer", $_POST['consultations_of_psychologists_volume_offer']);
        update_user_meta($current_user->ID, "consultations_of_psychologists_more_offer", $_POST['consultations_of_psychologists_more_offer']);

        update_user_meta($current_user->ID, "legal_advice_volume_offer", $_POST['legal_advice_volume_offer']);
        update_user_meta($current_user->ID, "legal_advice_more_offer", $_POST['legal_advice_more_offer']);

        update_user_meta($current_user->ID, "accounting_consulting_volume_offer", $_POST['accounting_consulting_volume_offer']);
        update_user_meta($current_user->ID, "accounting_consulting_more_offer", $_POST['accounting_consulting_more_offer']);

        update_user_meta($current_user->ID, "research_support_volume_offer", $_POST['research_support_volume_offer']);
        update_user_meta($current_user->ID, "research_support_more_offer", $_POST['research_support_more_offer']);

        update_user_meta($current_user->ID, "it_support_volume_offer", $_POST['it_support_volume_offer']);
        update_user_meta($current_user->ID, "it_support_more_offer", $_POST['it_support_more_offer']);

        update_user_meta($current_user->ID, "foto_video_design_volume_offer", $_POST['foto_video_design_volume_offer']);
        update_user_meta($current_user->ID, "foto_video_design_more_offer", $_POST['foto_video_design_more_offer']);

        update_user_meta($current_user->ID, "other_record_volume_offer", $_POST['other_record_volume_offer']);
        update_user_meta($current_user->ID, "other_record_more_offer", $_POST['other_record_more_offer']);

        exit(wp_redirect(get_permalink($page->ID)));
    }
}
add_action('um_user_after_updating_profile', 'custom_redirect_after_updating_profile', 10, 1);

/**
 * Ultimate Member - Customization
 * Description: Allow everyone to upload profile and cover photos on front-end pages.
 */
add_filter("um_user_pre_updating_files_array", "um_custom_user_pre_updating_files_array", 10, 1);
function um_custom_user_pre_updating_files_array($arr_files)
{

    if (is_array($arr_files)) {
        foreach ($arr_files as $key => $details) {
            if ($key == "register_profile_photo") {
                unset($arr_files[$key]);
                $arr_files["register_profile_photo"] = $details;
            }
        }
    }

    return $arr_files;
}

add_filter("um_allow_frontend_image_uploads", "um_custom_allow_frontend_image_uploads", 10, 3);
function um_custom_allow_frontend_image_uploads($allowed, $user_id, $key)
{

    if ($key == "register_profile_photo") {
        return true;
    }

    return $allowed; // false
}

function default_email_value($field)
{
    global $user_ID;
    global $current_user;
    if ($user_ID) {
        $field['default_value'] = $current_user->user_email;
    }
    return $field;
}

add_filter('acf/load_field/name=email', 'default_email_value');

function add_a_hidden_field_to_register($args)
{
    get_template_part('template-parts/um-extra-fields');
}
add_action('um_after_register_fields', 'add_a_hidden_field_to_register');

add_filter('um_email_template_html_formatting', 'my_email_template_html', 10, 2);
function my_email_template_html($slug, $args)
{
    ob_start(); ?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <!--[if gte mso 15]>
        <xml>
           <o:OfficeDocumentSettings>
           <o:AllowPNG/>
           <o:PixelsPerInch>96</o:PixelsPerInch>
           </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!--[if !mso]><!-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--<![endif]-->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Your Title</title>
        <!-- <style type="text/css">
            br {display: none;}
        </style> -->
        <style>
            @media only screen and (max-width: 620px) {
                table.body h1 {
                    font-size: 28px !important;
                    margin-bottom: 10px !important;
                }

                table.body p,
                table.body ul,
                table.body ol,
                table.body td,
                table.body span,
                table.body a {
                    font-size: 16px !important;
                }

                table.body .wrapper,
                table.body .article {
                    padding: 10px !important;
                }

                table.body .content {
                    padding: 0 !important;
                }

                table.body .container {
                    padding: 0 !important;
                    width: 100% !important;
                }

                table.body .main {
                    border-left-width: 0 !important;
                    border-radius: 0 !important;
                    border-right-width: 0 !important;
                }

                table.body .btn table {
                    width: 100% !important;
                }

                table.body .btn a {
                    width: 100% !important;
                }

                table.body .img-responsive {
                    height: auto !important;
                    max-width: 100% !important;
                    width: auto !important;
                }
            }

            @media all {
                .ExternalClass {
                    width: 100%;
                }

                .ExternalClass,
                .ExternalClass p,
                .ExternalClass span,
                .ExternalClass font,
                .ExternalClass td,
                .ExternalClass div {
                    line-height: 100%;
                }

                .apple-link a {
                    color: inherit !important;
                    font-family: inherit !important;
                    font-size: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                    text-decoration: none !important;
                }

                #MessageViewBody a {
                    color: inherit;
                    text-decoration: none;
                    font-size: inherit;
                    font-family: inherit;
                    font-weight: inherit;
                    line-height: inherit;
                }

                .btn-primary table td:hover {
                    background-color: #34495e !important;
                }

                .btn-primary a:hover {
                    background-color: #34495e !important;
                    border-color: #34495e !important;
                }
            }
        </style>
        <!--[if mso]>
        <style type="text/css">
            body { font-family: Helvetica, Arial, sans-serif, background-color: #fff !important; }
            .header_headline,
            .bgcolor_headline { font-family: Georgia,"Times New Roman",Times,serif; }
            .btn {background-color: #302149 !important}
            .btn {display: inline-block !important;}
            .btn {line-height: 40px !important;}
            .btn {width: 260px; !important}
            .message-wrapper {width: 560px; background-color:#fff !important;}
            br {display: none;}
        </style>
        <![endif]-->
    </head>
<?php $head = ob_get_clean();
    return $head;
}

function nitropack_footer_remove()
{
?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let divc = document.querySelectorAll('div[style]');
            for (let i = 0, len = divc.length; i < len; i++) {
                let actdisplay = window.getComputedStyle(divc[i], null).display;
                let actclear = window.getComputedStyle(divc[i], null).clear;

                if (actdisplay == 'block' && actclear == 'both') {
                    divc[i].remove();
                }
            }
        });
    </script>
<?php
}
add_action('wp_footer', 'nitropack_footer_remove');
/**
 * Remove meta tags on user page
 */
remove_action( 'wp_head', 'um_profile_dynamic_meta_desc', 20 );