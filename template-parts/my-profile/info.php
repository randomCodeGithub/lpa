<?php
global $current_user;
global $wp_roles;
$user_main_info = get_userdata($current_user->ID);
$email = $user_main_info->user_email;
$website_url = $user_main_info->user_url;
$user_roles = $current_user->roles;
$user_role = array_shift($current_user->roles);
?>
<div class="row main-info">
    <div class="col-lg-4 user-image">
        <i class="ic ic--<?php echo (get_user_meta($current_user->ID, 'is_avatar_visible', true)) ? 'public' : 'private' ?>"></i>
        <?php if ($avatar_form_shortcode = get_field("avatar_form_shortcode")) : ?>
            <?php echo do_shortcode($avatar_form_shortcode) ?>
        <?php endif ?>
    </div>
    <div class="col-lg-8">
        <div class="info-group">
            <div class="info-group--pair">
                <p class="has-bigger-font-size"><?php _e("Lietotāja vārds - profila nosaukums", "lpa") ?>
                    <i class="ic ic--<?php echo (get_user_meta($current_user->ID, 'is_username_visible', true)) ? 'public' : 'private' ?>"></i>
                </p>
                <p> <?php echo get_user_meta($current_user->ID, 'profile_name', true) ?></p>
            </div>
            <div class="info-group--pair flex justify-content-between">
                <div>
                    <p class="has-bigger-font-size"><?php _e("E-pasta adrese", "lpa") ?>
                        <i class="ic ic--<?php echo (get_user_meta($current_user->ID, 'is_email_visible', true)) ? 'public' : 'private' ?>"></i>
                    </p>
                    <p><?php echo $email ?></p>
                </div>

                <div>
                    <p class="has-bigger-font-size"><?php _e("Tālruņa nr.", "lpa") ?>
                        <i class="ic ic--<?php echo (get_user_meta($current_user->ID, 'is_phone_visible', true)) ? 'public' : 'private' ?>"></i>
                    </p>
                    <?php if (get_user_meta($current_user->ID, 'phone_number', true) != '') : ?>
                        <p><?php echo get_user_meta($current_user->ID, 'phone_number', true) ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="info-group--pair flex justify-content-between">
                <div>
                    <p class="has-bigger-font-size"><?php _e("Darbības formāts", "lpa") ?>
                        <i class="ic ic--<?php echo (get_user_meta($current_user->ID, 'is_darbibas_formats_visible', true)) ? 'public' : 'private' ?>"></i>
                    </p>
                    <p><?php 
                    if(is_numeric(get_field('activity_format', "user_" . $current_user->ID))) {
                        $activity_format = get_field_object('field_6343b5343d9ba')["choices"];
                        echo $activity_format[get_field('activity_format', "user_" . $current_user->ID)];
                    }else {
                        echo get_field('activity_format', "user_" . $current_user->ID);
                    } 
                    // $activity_format = array_values(get_field_object('field_6343b5343d9ba')["choices"]);
                    // echo $activity_format[get_user_meta($current_user->ID, 'activity_format', true)];
                    // echo "</br></br></br>";
                    // echo get_field('activity_format', "user_" . $current_user->ID)
                    ?></p>
                </div>

                <div>
                    <p class="has-bigger-font-size"><?php _e("Mājas lapa", "lpa") ?>
                        <i class="ic ic--<?php echo (get_user_meta($current_user->ID, 'is_website_visible', true)) ? 'public' : 'private' ?>"></i>
                    </p>
                    <?php if (!empty($website_url)) : ?>
                        <p><?php echo $website_url ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="info-group--pair flex justify-content-between">
                <div>
                    <p class="has-bigger-font-size"><?php _e("Loma programmā", "lpa") ?>
                        <i class="ic ic--<?php echo (get_user_meta($current_user->ID, 'is_loma_programma_visible', true)) ? 'public' : 'private' ?>"></i>
                    </p>
                    <p><?php echo $wp_roles->roles[$user_role]['name']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="info-group--pair">
            <p class="has-bigger-font-size"><?php _e("Apraksts, darbības joma", "lpa") ?>
                <i class="ic ic--<?php echo (get_user_meta($current_user->ID, 'is_apraksts_darbibas_joma_visible', true)) ? 'public' : 'private' ?>"></i>
            </p>
            <p><?php echo get_user_meta($current_user->ID, 'description-scope', true) ?></p>
        </div>
        <?php if (in_array('um_custom_role_1', (array)$user_roles) || in_array('um_custom_role_3', (array)$user_roles)) : ?>
            <div class="resource-info">
                <h4><?php _e("Resursu vajadzības (meklē)", "lpa") ?></h4>
                <div class="resource-blocks">
                    <?php if (get_user_meta($current_user->ID, 'movable_property', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Kustamais īpašums", "lpa") ?></p>
                        <?php
                        $movable_properties = get_user_meta($current_user->ID, 'movable_property', true);

                        $computer_amount_text = get_user_meta($current_user->ID, 'computer_amount_text', true);
                        $computer_type_text = get_user_meta($current_user->ID, 'computer_type_text', true);

                        $electrical_devices_amount_text = get_user_meta($current_user->ID, 'electrical_devices_amount_text', true);
                        $electrical_devices_type_text = get_user_meta($current_user->ID, 'electrical_devices_type_text', true);

                        $furniture_amount_text = get_user_meta($current_user->ID, 'furniture_amount_text', true);
                        $furniture_type_text = get_user_meta($current_user->ID, 'furniture_type_text', true);

                        $outdoor_activities_amount_items = get_user_meta($current_user->ID, 'outdoor_activities_amount_items', true);
                        $outdoor_activities_type_items = get_user_meta($current_user->ID, 'outdoor_activities_type_items', true);

                        $vehicles_amount = get_user_meta($current_user->ID, 'vehicles_amount', true);
                        $vehicles_type = get_user_meta($current_user->ID, 'vehicles_type', true);

                        $digital_content_amount_text = get_user_meta($current_user->ID, 'digital_content_amount_text', true);
                        $digital_content_type_text = get_user_meta($current_user->ID, 'digital_content_type_text', true);

                        $food_amount_text = get_user_meta($current_user->ID, 'food_amount_text', true);
                        $food_type_text = get_user_meta($current_user->ID, 'food_type_text', true);

                        $clothes_amount_text = get_user_meta($current_user->ID, 'clothes_amount_text', true);
                        $clothes_type_text = get_user_meta($current_user->ID, 'clothes_type_text', true);

                        $print_materrial_amount_text = get_user_meta($current_user->ID, 'print_materrial_amount_text', true);
                        $print_materrial_type_text = get_user_meta($current_user->ID, 'print_materrial_type_text', true);

                        $other_amount_text = get_user_meta($current_user->ID, 'other_amount_text', true);
                        $other_type_text = get_user_meta($current_user->ID, 'other_type_text', true);

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
                    <?php if (get_user_meta($current_user->ID, 'real_estate', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Nekustamais īpašums", "lpa") ?></p>
                        <?php
                        $real_estates = get_user_meta($current_user->ID, 'real_estate', true);

                        $premises_area_text = get_user_meta($current_user->ID, 'premises_area_text', true);
                        $premises_more_text = get_user_meta($current_user->ID, 'premises_more_text', true);

                        $land_area_text = get_user_meta($current_user->ID, 'land_area_text', true);
                        $land_more_text = get_user_meta($current_user->ID, 'land_more_text', true);
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
                    <?php if (get_user_meta($current_user->ID, 'financial_resources', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Finanšu resursi", "lpa") ?></p>
                        <?php
                        $financial_resources = get_user_meta($current_user->ID, 'financial_resources', true);
                        $financial_resources_amount_text = get_user_meta($current_user->ID, 'financial_resources_amount_text', true);
                        $financial_resources_more_text = get_user_meta($current_user->ID, 'financial_resources_more_text', true);
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
                    <?php if (get_user_meta($current_user->ID, 'human_resources', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Cilvēkresursi", "lpa") ?></p>
                        <?php
                        $human_resources = get_user_meta($current_user->ID, 'human_resources', true);

                        $outsourced_proffesion = get_user_meta($current_user->ID, 'outsourced_proffesion', true);
                        $outsourced_load = get_user_meta($current_user->ID, 'outsourced_load', true);
                        $outsourced_more = get_user_meta($current_user->ID, 'outsourced_more', true);

                        $salaried_employee_profession = get_user_meta($current_user->ID, 'salaried_employee_profession', true);
                        $salaried_employee_load = get_user_meta($current_user->ID, 'salaried_employee_load', true);
                        $salaried_employee_more = get_user_meta($current_user->ID, 'salaried_employee_more', true);

                        $trainee_profession = get_user_meta($current_user->ID, 'trainee_profession', true);
                        $trainee_load = get_user_meta($current_user->ID, 'trainee_load', true);
                        $trainee_more = get_user_meta($current_user->ID, 'trainee_more', true);
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
                    <?php if (get_user_meta($current_user->ID, 'competences_and_consultations', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Kompetences un konsultācijas", "lpa") ?></p>
                        <?php
                        $competences_and_consultations = get_user_meta($current_user->ID, 'competences_and_consultations', true);

                        $training_volume = get_user_meta($current_user->ID, 'training_volume', true);
                        $training_more = get_user_meta($current_user->ID, 'training_more', true);

                        $consultations_of_psychologists_volume = get_user_meta($current_user->ID, 'consultations_of_psychologists_volume', true);
                        $consultations_of_psychologists_more = get_user_meta($current_user->ID, 'consultations_of_psychologists_more', true);

                        $legal_advice_volume = get_user_meta($current_user->ID, 'legal_advice_volume', true);
                        $legal_advice_more = get_user_meta($current_user->ID, 'legal_advice_more', true);

                        $accounting_consulting_volume = get_user_meta($current_user->ID, 'accounting_consulting_volume', true);
                        $accounting_consulting_more = get_user_meta($current_user->ID, 'accounting_consulting_more', true);

                        $research_support_volume = get_user_meta($current_user->ID, 'research_support_volume', true);
                        $research_support_more = get_user_meta($current_user->ID, 'research_support_more', true);

                        $it_support_volume = get_user_meta($current_user->ID, 'it_support_volume', true);
                        $it_support_more = get_user_meta($current_user->ID, 'it_support_more', true);

                        $foto_video_design_volume = get_user_meta($current_user->ID, 'foto_video_design_volume', true);
                        $foto_video_design_more = get_user_meta($current_user->ID, 'foto_video_design_more', true);

                        $other_record_volume = get_user_meta($current_user->ID, 'other_record_volume', true);
                        $other_record_more = get_user_meta($current_user->ID, 'other_record_more', true);
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
                    <?php if ($region_of_operation = get_user_meta($current_user->ID, 'Region_of_operation', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Darbības novads", "lpa") ?></p>
                        <p class="resource-name"><?php echo implode(', ', $region_of_operation); ?></p>
                    <?php endif ?>
                </div>
            </div>
        <?php endif ?>
        <div class="resource-info">
            <?php if (in_array('um_custom_role_2', (array) $user_roles) || in_array('um_custom_role_3', (array) $user_roles)) : ?>
                <h4><?php _e("Resursu piedāvājums", "lpa") ?></h4>
                <div class="resource-blocks">
                    <?php if (get_user_meta($current_user->ID, 'movable_property_offer', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Kustamais īpašums", "lpa") ?></p>
                        <?php
                        $movable_properties = get_user_meta($current_user->ID, 'movable_property_offer', true);

                        $computer_amount_text = get_user_meta($current_user->ID, 'computer_amount_text_offer', true);
                        $computer_type_text = get_user_meta($current_user->ID, 'computer_type_text_offer', true);

                        $electrical_devices_amount_text = get_user_meta($current_user->ID, 'electrical_devices_amount_text_offer', true);
                        $electrical_devices_type_text = get_user_meta($current_user->ID, 'electrical_devices_type_text_offer', true);

                        $furniture_amount_text = get_user_meta($current_user->ID, 'furniture_amount_text_offer', true);
                        $furniture_type_text = get_user_meta($current_user->ID, 'furniture_type_text_offer', true);

                        $outdoor_activities_amount_items = get_user_meta($current_user->ID, 'outdoor_activities_amount_items_offer', true);
                        $outdoor_activities_type_items = get_user_meta($current_user->ID, 'outdoor_activities_type_items_offer', true);

                        $vehicles_amount = get_user_meta($current_user->ID, 'vehicles_amount_offer', true);
                        $vehicles_type = get_user_meta($current_user->ID, 'vehicles_type_offer', true);

                        $digital_content_amount_text = get_user_meta($current_user->ID, 'digital_content_amount_text_offer', true);
                        $digital_content_type_text = get_user_meta($current_user->ID, 'digital_content_type_text_offer', true);

                        $food_amount_text = get_user_meta($current_user->ID, 'food_amount_text_offer', true);
                        $food_type_text = get_user_meta($current_user->ID, 'food_type_text_offer', true);

                        $clothes_amount_text = get_user_meta($current_user->ID, 'clothes_amount_text_offer', true);
                        $clothes_type_text = get_user_meta($current_user->ID, 'clothes_type_text_offer', true);

                        $print_materrial_amount_text = get_user_meta($current_user->ID, 'print_materrial_amount_text_offer', true);
                        $print_materrial_type_text = get_user_meta($current_user->ID, 'print_materrial_type_text_offer', true);

                        $other_amount_text = get_user_meta($current_user->ID, 'other_amount_text_offer', true);
                        $other_type_text = get_user_meta($current_user->ID, 'other_type_text_offer', true);

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
                    <?php if (get_user_meta($current_user->ID, 'real_estate_offer', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Nekustamais īpašums", "lpa") ?></p>
                        <?php
                        $real_estates = get_user_meta($current_user->ID, 'real_estate_offer', true);

                        $premises_area_text = get_user_meta($current_user->ID, 'premises_area_text_offer', true);
                        $premises_more_text = get_user_meta($current_user->ID, 'premises_more_text_offer', true);

                        $land_area_text = get_user_meta($current_user->ID, 'land_area_text_offer', true);
                        $land_more_text = get_user_meta($current_user->ID, 'land_more_text_offer', true);
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
                    <?php if (get_user_meta($current_user->ID, 'financial_resources_offer', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Finanšu resursi", "lpa") ?></p>
                        <?php
                        $financial_resources = get_user_meta($current_user->ID, 'financial_resources_offer', true);
                        $financial_resources_amount_text = get_user_meta($current_user->ID, 'financial_resources_amount_text_offer', true);
                        $financial_resources_more_text = get_user_meta($current_user->ID, 'financial_resources_more_text_offer', true);
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
                    <?php if (get_user_meta($current_user->ID, 'human_resources_offer', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Cilvēkresursi", "lpa") ?></p>
                        <?php
                        $human_resources = get_user_meta($current_user->ID, 'human_resources_offer', true);

                        $outsourced_proffesion = get_user_meta($current_user->ID, 'outsourced_proffesion_offer', true);
                        $outsourced_load = get_user_meta($current_user->ID, 'outsourced_load_offer', true);
                        $outsourced_more = get_user_meta($current_user->ID, 'outsourced_more_offer', true);

                        $salaried_employee_profession = get_user_meta($current_user->ID, 'salaried_employee_profession_offer', true);
                        $salaried_employee_load = get_user_meta($current_user->ID, 'salaried_employee_load_offer', true);
                        $salaried_employee_more = get_user_meta($current_user->ID, 'salaried_employee_more_offer', true);

                        $trainee_profession = get_user_meta($current_user->ID, 'trainee_profession_offer', true);
                        $trainee_load = get_user_meta($current_user->ID, 'trainee_load_offer', true);
                        $trainee_more = get_user_meta($current_user->ID, 'trainee_more_offer', true);
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
                    <?php if (get_user_meta($current_user->ID, 'competences_and_consultations_offer', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Kompetences un konsultācijas", "lpa") ?></p>
                        <?php
                        $competences_and_consultations = get_user_meta($current_user->ID, 'competences_and_consultations_offer', true);

                        $training_volume = get_user_meta($current_user->ID, 'training_volume_offer', true);
                        $training_more = get_user_meta($current_user->ID, 'training_more_offer', true);

                        $consultations_of_psychologists_volume = get_user_meta($current_user->ID, 'consultations_of_psychologists_volume_offer', true);
                        $consultations_of_psychologists_more = get_user_meta($current_user->ID, 'consultations_of_psychologists_more_offer', true);

                        $legal_advice_volume = get_user_meta($current_user->ID, 'legal_advice_volume_offer', true);
                        $legal_advice_more = get_user_meta($current_user->ID, 'legal_advice_more_offer', true);

                        $accounting_consulting_volume = get_user_meta($current_user->ID, 'accounting_consulting_volume_offer', true);
                        $accounting_consulting_more = get_user_meta($current_user->ID, 'accounting_consulting_more_offer', true);

                        $research_support_volume = get_user_meta($current_user->ID, 'research_support_volume_offer', true);
                        $research_support_more = get_user_meta($current_user->ID, 'research_support_more_offer', true);

                        $it_support_volume = get_user_meta($current_user->ID, 'it_support_volume_offer', true);
                        $it_support_more = get_user_meta($current_user->ID, 'it_support_more_offer', true);

                        $foto_video_design_volume = get_user_meta($current_user->ID, 'foto_video_design_volume_offer', true);
                        $foto_video_design_more = get_user_meta($current_user->ID, 'foto_video_design_more_offer', true);

                        $other_record_volume = get_user_meta($current_user->ID, 'other_record_volume_offer', true);
                        $other_record_more = get_user_meta($current_user->ID, 'other_record_more_offer', true);
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
                    <?php if ($region_of_operation = get_user_meta($current_user->ID, 'Region_of_operation', true)) : ?>
                        <p class="has-bigger-font-size resource-label"><?php _e("Darbības novads", "lpa") ?></p>
                        <p class="resource-name"><?php echo implode(', ', $region_of_operation); ?></p>
                    <?php endif ?>
                </div>
            <?php endif; ?>
            <div class="d-lg-flex justify-content-between align-items-center">
                <a href="<?php echo get_permalink() ?>?profile=edit_profile" class="btn"><?php _e("REDIĢĒT PROFILU", "lpa") ?></a>
                <a class="js-remove-link" href="#"><?php _e("Dzēst profilu", "lpa") ?></a>
            </div>
        </div>
    </div>
</div>