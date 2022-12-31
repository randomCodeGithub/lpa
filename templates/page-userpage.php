<!--
Template Name: Lietotāja lapa
-->
<?php get_header();
global $current_user;
global $wp_roles;
$user_id = um_profile_id();
$user_main_info = get_userdata($user_id);
$email = $user_main_info->user_email;
$website_url = $user_main_info->user_url;
$user_roles = $current_user->roles;
$user_role = array_shift($user_roles);

if (!get_user_meta($user_id, 'is_username_visible', true)) {
$header = ob_get_clean();
$header = preg_replace('#<title>(.*?)<\/title>#', '<title>' . __("Profila nosaukums nav publiski pieejams", 'lpa') . ' - ' . get_bloginfo('name') . '</title>', $header);
echo $header;
}

if (get_current_user_id() == $user_id) {
    // $page = get_page_by_path('mans-profils');
    // wp_redirect(get_permalink($page->ID));
}
if (get_user_meta($user_id, 'profile_availability', true) == "Tikai reģistrētiem lietotājiem" && !is_user_logged_in()) {
    wp_redirect(home_url());
}
?>
<section class="user">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block-title">
                    <h1>
                        <div class="line"></div>
                        <?php echo get_user_meta($user_id, 'profile_name', true) ?>
                    </h1>
                    <?php
                    $user_meta = get_userdata($user_id);
                    $user_roles = $user_meta->roles;

                    $movable_properties = get_user_meta($user_id, 'movable_property', true);
                    $real_estates = get_user_meta($user_id, 'real_estate', true);
                    $human_resources = get_user_meta($user_id, 'human_resources', true);
                    $financial_resources = get_user_meta($user_id, 'financial_resources', true);
                    $competences_and_consultations = get_user_meta($user_id, 'competences_and_consultations', true);

                    $movable_properties_offer = get_user_meta($user_id, 'movable_property_offer', true);
                    $real_estates_offer = get_user_meta($user_id, 'real_estate_offer', true);
                    $human_resources_offer = get_user_meta($user_id, 'human_resources_offer', true);
                    $financial_resources_offer = get_user_meta($user_id, 'financial_resources_offer', true);
                    $competences_and_consultations_offer = get_user_meta($user_id, 'competences_and_consultations_offer', true);

                    $user_support_areas_offer = array_merge((array)$movable_properties_offer, (array)$real_estates_offer, (array)$human_resources_offer, (array)$financial_resources_offer, (array)$competences_and_consultations_offer);
                    $user_support_areas = array_merge((array)$movable_properties, (array)$real_estates, (array)$human_resources, (array)$financial_resources, (array)$competences_and_consultations);
                    ?>
                    <?php
                    if (in_array('um_custom_role_1', (array)$user_roles) || in_array('um_custom_role_3', (array)$user_roles) && (isset($_GET["mekle-atbalstu"]) || empty($_GET))) : ?>
                        <ul class="support-area d-flex align-items-center">
                            <?php
                            if ($user_support_areas) :
                                foreach ($user_support_areas as $user_support_area) :
                                    if (!empty($user_support_area)) : ?>
                                        <li><?php echo $user_support_area; ?></li>
                            <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </ul>
                    <?php endif; ?>
                    <?php if (in_array('um_custom_role_2', (array) $user_roles) || in_array('um_custom_role_3', (array) $user_roles) && (isset($_GET["piedava-atbalstu"]) || empty($_GET))) :  ?>
                        <ul class="support-area d-flex align-items-center">
                            <?php
                            if ($user_support_areas_offer) :
                                foreach ($user_support_areas_offer as $user_support_area) :
                                    if (!empty($user_support_area)) : ?>
                                        <li><?php echo $user_support_area; ?></li>
                            <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </ul>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 user-image">
                <?php $photo_link = apply_filters('um_user_shortcode_filter__profile_photo', get_user_meta($user_id, 'profile_photo', true), $user_id); ?>
                <img src="<?php echo (!get_user_meta($user_id, 'is_avatar_visible', true) && !is_user_logged_in()) ? home_url() . "/wp-content/plugins/ultimate-member/assets/img/default_avatar.jpg" : $photo_link ?>" alt="">
            </div>
            <div class="col-lg-8">
                <div class="info-group">
                    <div class="info-group--pair flex justify-content-between">
                        <div>
                            <p class="has-bigger-font-size"><?php _e("E-pasta adrese", "lpa") ?>
                            </p>
                            <p>
                                <?php
                                if (!get_user_meta($user_id, 'is_email_visible', true) && !is_user_logged_in()) {
                                    _e("nav publiski pieejams", 'lpa');
                                } else {
                                    echo $email;
                                }

                                ?>
                                <?php //echo $email 
                                ?></p>
                        </div>
                        <div>
                            <p class="has-bigger-font-size"><?php _e("Tālruņa nr.", "lpa") ?>
                            </p>
                            <p>
                                <?php
                                if (get_user_meta($user_id, 'phone_number', true) != '') {
                                    if (!get_user_meta($user_id, 'is_phone_visible', true) && !is_user_logged_in()) {
                                        _e("nav publiski pieejams", 'lpa');
                                    } else {
                                        echo get_user_meta($user_id, 'phone_number', true);
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="info-group--pair flex justify-content-between">
                        <div>
                            <p class="has-bigger-font-size"><?php _e("Darbības formāts", "lpa") ?>
                            </p>
                            <p>
                                <?php
                                if (!get_user_meta($user_id, 'is_darbibas_formats_visible', true) && !is_user_logged_in()) {
                                    _e("nav publiski pieejams", 'lpa');
                                } else {
                                    if (is_numeric(get_field('activity_format', "user_" . $user_id))) {
                                        $activity_format = get_field_object('field_6343b5343d9ba')["choices"];
                                        echo $activity_format[get_field('activity_format', "user_" . $user_id)];
                                    } else {
                                        echo get_field('activity_format', "user_" . $user_id);
                                    }
                                }
                                ?>

                            </p>
                        </div>
                        <div>
                            <p class="has-bigger-font-size"><?php _e("Mājas lapa", "lpa") ?>
                            </p>
                            <p><?php
                                if (!empty($website_url)) {
                                    if (!get_user_meta($user_id, 'is_website_visible', true) && !is_user_logged_in()) {
                                        _e("nav publiski pieejams", 'lpa');
                                    } else {
                                        echo $website_url;
                                    }
                                }
                                ?></p>
                        </div>
                    </div>
                    <div class="info-group--pair description">
                        <p class="has-bigger-font-size"><?php _e("Apraksts, darbības joma", "lpa") ?></p>
                        <p>
                            <?php if (!get_user_meta($user_id, 'is_apraksts_darbibas_joma_visible', true) && !is_user_logged_in()) {
                                _e("nav publiski pieejams", 'lpa');
                            } else {
                                echo get_user_meta($user_id, 'description-scope', true);
                            } ?>
                            <?php //echo get_user_meta($user_id, 'description-scope', true) 
                            ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($_GET["mekle-atbalstu"]) || empty($_GET)) : ?>
            <div class="row search-info">
                <div class="col-lg-6">
                    <h4><?php _e("Resursu vajadzības (meklē)", "lpa") ?></h4>
                    <div class="resource-info">
                        <?php if (get_user_meta($user_id, 'movable_property', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Kustamais īpašums", "lpa") ?></p>
                            <?php
                            $movable_properties = get_user_meta($user_id, 'movable_property', true);

                            $computer_amount_text = get_user_meta($user_id, 'computer_amount_text', true);
                            $computer_type_text = get_user_meta($user_id, 'computer_type_text', true);

                            $electrical_devices_amount_text = get_user_meta($user_id, 'electrical_devices_amount_text', true);
                            $electrical_devices_type_text = get_user_meta($user_id, 'electrical_devices_type_text', true);

                            $furniture_amount_text = get_user_meta($user_id, 'furniture_amount_text', true);
                            $furniture_type_text = get_user_meta($user_id, 'furniture_type_text', true);

                            $outdoor_activities_amount_items = get_user_meta($user_id, 'outdoor_activities_amount_items', true);
                            $outdoor_activities_type_items = get_user_meta($user_id, 'outdoor_activities_type_items', true);

                            $vehicles_amount = get_user_meta($user_id, 'vehicles_amount', true);
                            $vehicles_type = get_user_meta($user_id, 'vehicles_type', true);

                            $digital_content_amount_text = get_user_meta($user_id, 'digital_content_amount_text', true);
                            $digital_content_type_text = get_user_meta($user_id, 'digital_content_type_text', true);

                            $food_amount_text = get_user_meta($user_id, 'food_amount_text', true);
                            $food_type_text = get_user_meta($user_id, 'food_type_text', true);

                            $clothes_amount_text = get_user_meta($user_id, 'clothes_amount_text', true);
                            $clothes_type_text = get_user_meta($user_id, 'clothes_type_text', true);

                            $print_materrial_amount_text = get_user_meta($user_id, 'print_materrial_amount_text', true);
                            $print_materrial_type_text = get_user_meta($user_id, 'print_materrial_type_text', true);

                            $other_amount_text = get_user_meta($user_id, 'other_amount_text', true);
                            $other_type_text = get_user_meta($user_id, 'other_type_text', true);

                            foreach ($movable_properties as $movable_property) : ?>
                                <p class="resource-name"><?php echo $movable_property ?></p>
                                <ul class="resources">
                                    <?php if ($movable_property == "Datortehnika") : ?>
                                        <?php if (!empty($computer_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $computer_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($computer_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $computer_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Elektroierīces, darba rīki") : ?>
                                        <?php if (!empty($electrical_devices_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $electrical_devices_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($electrical_devices_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $electrical_devices_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Mēbeles") : ?>
                                        <?php if (!empty($furniture_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $furniture_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($furniture_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $furniture_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Priekšmeti ārtelpu aktivitātēm") : ?>
                                        <?php if (!empty($outdoor_activities_amount_items)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $outdoor_activities_amount_items ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($outdoor_activities_type_items)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $outdoor_activities_type_items ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Transportlīdzekļi") : ?>
                                        <?php if (!empty($vehicles_amount)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $vehicles_amount ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($vehicles_type)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $vehicles_type ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Digitāls saturs") : ?>
                                        <?php if (!empty($digital_content_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $digital_content_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($digital_content_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $digital_content_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Pārtika") : ?>
                                        <?php if (!empty($food_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $food_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($food_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $food_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Apģērbs") : ?>
                                        <?php if (!empty($clothes_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $clothes_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($clothes_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $clothes_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Grāmatas, drukātie materiāli") : ?>
                                        <?php if (!empty($print_materrial_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $print_materrial_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($print_materrial_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $print_materrial_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Cits") : ?>
                                        <?php if (!empty($other_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $other_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($other_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $other_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (get_user_meta($user_id, 'real_estate', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Nekustamais īpašums", "lpa") ?></p>
                            <?php
                            $real_estates = get_user_meta($user_id, 'real_estate', true);

                            $premises_area_text = get_user_meta($user_id, 'premises_area_text', true);
                            $premises_more_text = get_user_meta($user_id, 'premises_more_text', true);

                            $land_area_text = get_user_meta($user_id, 'land_area_text', true);
                            $land_more_text = get_user_meta($user_id, 'land_more_text', true);
                            foreach ($real_estates as $real_estate) : ?>
                                <p class="resource-name"><?php echo $real_estate ?></p>
                                <ul class="resources">
                                    <?php if ($real_estate == "Telpas") : ?>
                                        <?php if (!empty($premises_area_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Platība:", "lpa") ?></span><?php echo $premises_area_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($premises_more_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $premises_more_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($real_estate == "Zemes platība") : ?>
                                        <?php if (!empty($land_area_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Platība:", "lpa") ?></span><?php echo $land_area_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($land_more_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $land_more_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>

                        <?php endif ?>
                        <?php if (get_user_meta($user_id, 'financial_resources', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Finanšu resursi", "lpa") ?></p>
                            <?php
                            $financial_resources = get_user_meta($user_id, 'financial_resources', true);
                            $financial_resources_amount_text = get_user_meta($user_id, 'financial_resources_amount_text', true);
                            $financial_resources_more_text = get_user_meta($user_id, 'financial_resources_more_text', true);
                            foreach ($financial_resources as $financial_resource) : ?>
                                <ul class="resources">
                                    <?php if ($financial_resource == "Finanšu resursi") : ?>
                                        <?php if (!empty($financial_resources_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $financial_resources_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($financial_resources_more_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $financial_resources_more_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4><?php _e("Resursu vajadzības (meklē)", "lpa") ?></h4>
                    <div class="resource-info">
                        <?php if (get_user_meta($user_id, 'human_resources', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Cilvēkresursi", "lpa") ?></p>
                            <?php
                            $human_resources = get_user_meta($user_id, 'human_resources', true);

                            $outsourced_proffesion = get_user_meta($user_id, 'outsourced_proffesion', true);
                            $outsourced_load = get_user_meta($user_id, 'outsourced_load', true);
                            $outsourced_more = get_user_meta($user_id, 'outsourced_more', true);

                            $salaried_employee_profession = get_user_meta($user_id, 'salaried_employee_profession', true);
                            $salaried_employee_load = get_user_meta($user_id, 'salaried_employee_load', true);
                            $salaried_employee_more = get_user_meta($user_id, 'salaried_employee_more', true);

                            $trainee_profession = get_user_meta($user_id, 'trainee_profession', true);
                            $trainee_load = get_user_meta($user_id, 'trainee_load', true);
                            $trainee_more = get_user_meta($user_id, 'trainee_more', true);
                            foreach ($human_resources as $human_resource) : ?>
                                <p class="resource-name"><?php echo $human_resource ?></p>
                                <ul class="resources">
                                    <?php if ($human_resource == "Ārpakalpojumā") : ?>
                                        <?php if (!empty($outsourced_proffesion)) : ?>
                                            <li>
                                                <p><span><?php _e("Profesija:", "lpa") ?></span><?php echo implode(', ', $outsourced_proffesion); ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($outsourced_load)) : ?>
                                            <li>
                                                <p><span><?php _e("Slodze/h skaits:", "lpa") ?></span><?php echo $outsourced_load ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($outsourced_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $outsourced_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($human_resource == "Algots darbinieks") : ?>
                                        <?php if (!empty($salaried_employee_profession)) : ?>
                                            <li>
                                                <p><span><?php _e("Profesija:", "lpa") ?></span><?php echo implode(', ', $salaried_employee_profession); ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($salaried_employee_load)) : ?>
                                            <li>
                                                <p><span><?php _e("Slodze/h skaits:", "lpa") ?></span><?php echo $salaried_employee_load ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($salaried_employee_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $salaried_employee_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($human_resource == "Praktikants") : ?>
                                        <?php if (!empty($trainee_profession)) : ?>
                                            <li>
                                                <p><span><?php _e("Profesija:", "lpa") ?></span><?php echo implode(', ', $trainee_profession); ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($trainee_load)) : ?>
                                            <li>
                                                <p><span><?php _e("Slodze/h skaits:", "lpa") ?></span><?php echo $trainee_load ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($trainee_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $trainee_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (get_user_meta($user_id, 'competences_and_consultations', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Kompetences un konsultācijas", "lpa") ?></p>
                            <?php
                            $competences_and_consultations = get_user_meta($user_id, 'competences_and_consultations', true);

                            $training_volume = get_user_meta($user_id, 'training_volume', true);
                            $training_more = get_user_meta($user_id, 'training_more', true);

                            $consultations_of_psychologists_volume = get_user_meta($user_id, 'consultations_of_psychologists_volume', true);
                            $consultations_of_psychologists_more = get_user_meta($user_id, 'consultations_of_psychologists_more', true);

                            $legal_advice_volume = get_user_meta($user_id, 'legal_advice_volume', true);
                            $legal_advice_more = get_user_meta($user_id, 'legal_advice_more', true);

                            $accounting_consulting_volume = get_user_meta($user_id, 'accounting_consulting_volume', true);
                            $accounting_consulting_more = get_user_meta($user_id, 'accounting_consulting_more', true);

                            $research_support_volume = get_user_meta($user_id, 'research_support_volume', true);
                            $research_support_more = get_user_meta($user_id, 'research_support_more', true);

                            $it_support_volume = get_user_meta($user_id, 'it_support_volume', true);
                            $it_support_more = get_user_meta($user_id, 'it_support_more', true);

                            $foto_video_design_volume = get_user_meta($user_id, 'foto_video_design_volume', true);
                            $foto_video_design_more = get_user_meta($user_id, 'foto_video_design_more', true);

                            $other_record_volume = get_user_meta($user_id, 'other_record_volume', true);
                            $other_record_more = get_user_meta($user_id, 'other_record_more', true);
                            foreach ($competences_and_consultations as $competences_and_consultation) : ?>
                                <p class="resource-name"><?php echo $competences_and_consultation ?></p>
                                <ul class="resources">
                                    <?php if ($competences_and_consultation == "Apmācības") : ?>
                                        <?php if (!empty($training_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $training_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($training_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $training_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Psihologu, kouču un supervizoru konsultācijas") : ?>
                                        <?php if (!empty($consultations_of_psychologists_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $consultations_of_psychologists_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($consultations_of_psychologists_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $consultations_of_psychologists_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Juridiskās konsultācijas") : ?>
                                        <?php if (!empty($legal_advice_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $legal_advice_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($legal_advice_more)) : ?>
                                            <li>
                                                <p><?php _e("Vairāk info:", "lpa") ?></p><?php echo $legal_advice_more ?>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Grāmatvežu konsultācijas") : ?>
                                        <?php if (!empty($accounting_consulting_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $accounting_consulting_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($accounting_consulting_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $accounting_consulting_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Pētījumi un atbalsts pētniecībā") : ?>
                                        <?php if (!empty($research_support_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $research_support_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($research_support_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $research_support_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "IT atbalsts") : ?>
                                        <?php if (!empty($it_support_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $it_support_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($it_support_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $it_support_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Foto, video un dizains") : ?>
                                        <?php if (!empty($foto_video_design_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $foto_video_design_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($foto_video_design_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $foto_video_design_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Cits - ierakstīt") : ?>
                                        <?php if (!empty($other_record_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $other_record_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($other_record_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $other_record_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>
                        <?php endif ?>
                        <?php if ($region_of_operation = get_user_meta($user_id, 'Region_of_operation', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Darbības novads", "lpa") ?></p>
                            <p class="resource-name"><?php echo implode(', ', $region_of_operation); ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (isset($_GET["piedava-atbalstu"]) || empty($_GET)) : ?>
            <div class="row search-info">
                <div class="col-lg-6">
                    <h4><?php _e("Resursu piedāvājums", "lpa") ?></h4>
                    <div class="resource-info">
                        <?php if (get_user_meta($user_id, 'movable_property_offer', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Kustamais īpašums", "lpa") ?></p>
                            <?php
                            $movable_properties = get_user_meta($user_id, 'movable_property_offer', true);

                            $computer_amount_text = get_user_meta($user_id, 'computer_amount_text_offer', true);
                            $computer_type_text = get_user_meta($user_id, 'computer_type_tex_offert', true);

                            $electrical_devices_amount_text = get_user_meta($user_id, 'electrical_devices_amount_text_offer', true);
                            $electrical_devices_type_text = get_user_meta($user_id, 'electrical_devices_type_text_offer', true);

                            $furniture_amount_text = get_user_meta($user_id, 'furniture_amount_text_offer', true);
                            $furniture_type_text = get_user_meta($user_id, 'furniture_type_text_offer', true);

                            $outdoor_activities_amount_items = get_user_meta($user_id, 'outdoor_activities_amount_items_offer', true);
                            $outdoor_activities_type_items = get_user_meta($user_id, 'outdoor_activities_type_items_offer', true);

                            $vehicles_amount = get_user_meta($user_id, 'vehicles_amount_offer', true);
                            $vehicles_type = get_user_meta($user_id, 'vehicles_type_offer', true);

                            $digital_content_amount_text = get_user_meta($user_id, 'digital_content_amount_text_offer', true);
                            $digital_content_type_text = get_user_meta($user_id, 'digital_content_type_text_offer', true);

                            $food_amount_text = get_user_meta($user_id, 'food_amount_text_offer', true);
                            $food_type_text = get_user_meta($user_id, 'food_type_text_offer', true);

                            $clothes_amount_text = get_user_meta($user_id, 'clothes_amount_text_offer', true);
                            $clothes_type_text = get_user_meta($user_id, 'clothes_type_text_offer', true);

                            $print_materrial_amount_text = get_user_meta($user_id, 'print_materrial_amount_text_offer', true);
                            $print_materrial_type_text = get_user_meta($user_id, 'print_materrial_type_text_offer', true);

                            $other_amount_text = get_user_meta($user_id, 'other_amount_text_offer', true);
                            $other_type_text = get_user_meta($user_id, 'other_type_text_offer', true);

                            foreach ($movable_properties as $movable_property) : ?>
                                <p class="resource-name"><?php echo $movable_property ?></p>
                                <ul class="resources">
                                    <?php if ($movable_property == "Datortehnika") : ?>
                                        <?php if (!empty($computer_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $computer_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($computer_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $computer_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Elektroierīces, darba rīki") : ?>
                                        <?php if (!empty($electrical_devices_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $electrical_devices_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($electrical_devices_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $electrical_devices_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Mēbeles") : ?>
                                        <?php if (!empty($furniture_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $furniture_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($furniture_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $furniture_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Priekšmeti ārtelpu aktivitātēm") : ?>
                                        <?php if (!empty($outdoor_activities_amount_items)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $outdoor_activities_amount_items ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($outdoor_activities_type_items)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $outdoor_activities_type_items ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Transportlīdzekļi") : ?>
                                        <?php if (!empty($vehicles_amount)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $vehicles_amount ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($vehicles_type)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $vehicles_type ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Digitāls saturs") : ?>
                                        <?php if (!empty($digital_content_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $digital_content_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($digital_content_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $digital_content_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Pārtika") : ?>
                                        <?php if (!empty($food_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $food_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($food_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $food_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Apģērbs") : ?>
                                        <?php if (!empty($clothes_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $clothes_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($clothes_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $clothes_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Grāmatas, drukātie materiāli") : ?>
                                        <?php if (!empty($print_materrial_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $print_materrial_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($print_materrial_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $print_materrial_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($movable_property == "Cits") : ?>
                                        <?php if (!empty($other_amount_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Daudzums:", "lpa") ?></span><?php echo $other_amount_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($other_type_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Veids:", "lpa") ?></span><?php echo $other_type_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (get_user_meta($user_id, 'real_estate_offer', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Nekustamais īpašums", "lpa") ?></p>
                            <?php
                            $real_estates = get_user_meta($user_id, 'real_estate_offer', true);

                            $premises_area_text = get_user_meta($user_id, 'premises_area_text_offer', true);
                            $premises_more_text = get_user_meta($user_id, 'premises_more_text_offer', true);

                            $land_area_text = get_user_meta($user_id, 'land_area_text_offer', true);
                            $land_more_text = get_user_meta($user_id, 'land_more_text_offer', true);
                            foreach ($real_estates as $real_estate) : ?>
                                <p class="resource-name"><?php echo $real_estate ?></p>
                                <ul class="resources">
                                    <?php if ($real_estate == "Telpas") : ?>
                                        <?php if (!empty($premises_area_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Platība:", "lpa") ?></span><?php echo $premises_area_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($premises_more_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $premises_more_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($real_estate == "Zemes platība") : ?>
                                        <?php if (!empty($land_area_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Platība:", "lpa") ?></span><?php echo $land_area_text ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($land_more_text)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $land_more_text ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>

                        <?php endif ?>
                        <?php if (get_user_meta($user_id, 'financial_resources_offer', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Finanšu resursi", "lpa") ?></p>
                            <?php
                            $financial_resources = get_user_meta($user_id, 'financial_resources_offer', true);
                            $financial_resources_amount_text = get_user_meta($user_id, 'financial_resources_amount_text_offer', true);
                            $financial_resources_more_text = get_user_meta($user_id, 'financial_resources_more_text_offer', true);
                            foreach ($financial_resources as $financial_resource) : ?>
                                <ul class="resources">
                                    <?php if ($financial_resource == "Finanšu resursi") : ?>
                                        <li>
                                            <p><span><?php _e("Daudzums:", "lpa") ?></span><?php if (!empty($financial_resources_amount_text)) echo $financial_resources_amount_text ?></p>
                                        </li>
                                        <li>
                                            <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php if (!empty($financial_resources_more_text)) echo $financial_resources_more_text ?></p>
                                        </li>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4><?php _e("Resursu piedāvājums", "lpa") ?></h4>
                    <div class="resource-info">
                        <?php if (get_user_meta($user_id, 'human_resources_offer', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Cilvēkresursi", "lpa") ?></p>
                            <?php
                            $human_resources = get_user_meta($user_id, 'human_resources_offer', true);

                            $outsourced_proffesion = get_user_meta($user_id, 'outsourced_proffesion_offer', true);
                            $outsourced_load = get_user_meta($user_id, 'outsourced_load_offer', true);
                            $outsourced_more = get_user_meta($user_id, 'outsourced_more_offer', true);

                            $salaried_employee_profession = get_user_meta($user_id, 'salaried_employee_profession_offer', true);
                            $salaried_employee_load = get_user_meta($user_id, 'salaried_employee_load_offer', true);
                            $salaried_employee_more = get_user_meta($user_id, 'salaried_employee_more_offer', true);

                            $trainee_profession = get_user_meta($user_id, 'trainee_profession_offer', true);
                            $trainee_load = get_user_meta($user_id, 'trainee_load_offer', true);
                            $trainee_more = get_user_meta($user_id, 'trainee_more_offer', true);
                            foreach ($human_resources as $human_resource) : ?>
                                <p class="resource-name"><?php echo $human_resource ?></p>
                                <ul class="resources">
                                    <?php if ($human_resource == "Ārpakalpojumā") : ?>
                                        <?php if (!empty($outsourced_proffesion)) : ?>
                                            <li>
                                                <p><span><?php _e("Profesija:", "lpa") ?></span><?php echo implode(', ', $outsourced_proffesion); ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($outsourced_load)) : ?>
                                            <li>
                                                <p><span><?php _e("Slodze/h skaits:", "lpa") ?></span><?php echo $outsourced_load ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($outsourced_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $outsourced_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($human_resource == "Algots darbinieks") : ?>
                                        <?php if (!empty($salaried_employee_profession)) : ?>
                                            <li>
                                                <p><span><?php _e("Profesija:", "lpa") ?></span><?php echo implode(', ', $salaried_employee_profession); ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($salaried_employee_load)) : ?>
                                            <li>
                                                <p><span><?php _e("Slodze/h skaits:", "lpa") ?></span><?php echo $salaried_employee_load ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($salaried_employee_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $salaried_employee_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($human_resource == "Praktikants") : ?>
                                        <?php if (!empty($trainee_profession)) : ?>
                                            <li>
                                                <p><span><?php _e("Profesija:", "lpa") ?></span><?php echo implode(', ', $trainee_profession); ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($trainee_load)) : ?>
                                            <li>
                                                <p><span><?php _e("Slodze/h skaits:", "lpa") ?></span><?php echo $trainee_load ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($trainee_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $trainee_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (get_user_meta($user_id, 'competences_and_consultations_offer', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Kompetences un konsultācijas", "lpa") ?></p>
                            <?php
                            $competences_and_consultations = get_user_meta($user_id, 'competences_and_consultations_offer', true);

                            $training_volume = get_user_meta($user_id, 'training_volume_offer', true);
                            $training_more = get_user_meta($user_id, 'training_more_offer', true);

                            $consultations_of_psychologists_volume = get_user_meta($user_id, 'consultations_of_psychologists_volume_offer', true);
                            $consultations_of_psychologists_more = get_user_meta($user_id, 'consultations_of_psychologists_more_offer', true);

                            $legal_advice_volume = get_user_meta($user_id, 'legal_advice_volume_offer', true);
                            $legal_advice_more = get_user_meta($user_id, 'legal_advice_more_offer', true);

                            $accounting_consulting_volume = get_user_meta($user_id, 'accounting_consulting_volume_offer', true);
                            $accounting_consulting_more = get_user_meta($user_id, 'accounting_consulting_more_offer', true);

                            $research_support_volume = get_user_meta($user_id, 'research_support_volume_offer', true);
                            $research_support_more = get_user_meta($user_id, 'research_support_more_offer', true);

                            $it_support_volume = get_user_meta($user_id, 'it_support_volume_offer', true);
                            $it_support_more = get_user_meta($user_id, 'it_support_more_offer', true);

                            $foto_video_design_volume = get_user_meta($user_id, 'foto_video_design_volume_offer', true);
                            $foto_video_design_more = get_user_meta($user_id, 'foto_video_design_more_offer', true);

                            $other_record_volume = get_user_meta($user_id, 'other_record_volume_offer', true);
                            $other_record_more = get_user_meta($user_id, 'other_record_more_offer', true);
                            foreach ($competences_and_consultations as $competences_and_consultation) : ?>
                                <p class="resource-name"><?php echo $competences_and_consultation ?></p>
                                <ul class="resources">
                                    <?php if ($competences_and_consultation == "Apmācības") : ?>
                                        <?php if (!empty($training_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $training_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($training_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $training_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Psihologu, kouču un supervizoru konsultācijas") : ?>
                                        <?php if (!empty($consultations_of_psychologists_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $consultations_of_psychologists_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($consultations_of_psychologists_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $consultations_of_psychologists_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Juridiskās konsultācijas") : ?>
                                        <?php if (!empty($legal_advice_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $legal_advice_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($legal_advice_more)) : ?>
                                            <li>
                                                <p><?php _e("Vairāk info:", "lpa") ?></p><?php echo $legal_advice_more ?>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Grāmatvežu konsultācijas") : ?>
                                        <?php if (!empty($accounting_consulting_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $accounting_consulting_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($accounting_consulting_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $accounting_consulting_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Pētījumi un atbalsts pētniecībā") : ?>
                                        <?php if (!empty($research_support_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $research_support_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($research_support_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $research_support_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "IT atbalsts") : ?>
                                        <?php if (!empty($it_support_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $it_support_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($it_support_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $it_support_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Foto, video un dizains") : ?>
                                        <?php if (!empty($foto_video_design_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $foto_video_design_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($foto_video_design_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $foto_video_design_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($competences_and_consultation == "Cits - ierakstīt") : ?>
                                        <?php if (!empty($other_record_volume)) : ?>
                                            <li>
                                                <p><span><?php _e("Apjoms/h skaits:", "lpa") ?></span><?php echo $other_record_volume ?></p>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!empty($other_record_more)) : ?>
                                            <li>
                                                <p><span><?php _e("Vairāk info:", "lpa") ?></span><?php echo $other_record_more ?></p>
                                            </li>
                                        <?php endif ?>
                                    <?php endif ?>

                                </ul>
                            <?php endforeach; ?>
                        <?php endif ?>
                        <?php if ($region_of_operation = get_user_meta($user_id, 'Region_of_operation', true)) : ?>
                            <p class="has-bigger-font-size resource-label"><?php _e("Darbības novads", "lpa") ?></p>
                            <p class="resource-name"><?php echo implode(', ', $region_of_operation); ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>
</section>
<?php get_footer(); ?>