<?php
if (!defined('ABSPATH')) exit;
if (is_admin()) return;
global $post;
$post_slug = $post->post_name;
?>
<section class="user-filters">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="<?php echo get_permalink() ?>">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-4">
                            <div class="select-wrapper">
                                <label class="select-label"><?php _e('Atbalsta joma', 'lpa') ?></label>
                                <div>
                                    <?php
                                    $movable_property = get_field_object('field_6343b79928860');
                                    $real_estate = get_field_object('field_6345b5e01b467');
                                    $human_resources = get_field_object('field_6343b7ba28861');
                                    $financial_resources = get_field_object('field_6345b6321b468');
                                    $competences_and_consultations = get_field_object('field_6343b87c28862');
                                    $support_area = array($movable_property, $real_estate, $human_resources, $financial_resources, $competences_and_consultations);
                                    $support_area_choices = array_merge($movable_property['choices'], $real_estate['choices'], $human_resources['choices'], $financial_resources['choices'], $competences_and_consultations['choices']);
                                    ?>
                                    <select name="atbalsta_joma">
                                        <option value="all"><?php _e("Visas", 'lpa') ?></option>
                                        <?php
                                        if ($support_area_choices) {
                                            foreach ($support_area_choices as $k => $v) {
                                                if (isset($_GET['atbalsta_joma']) && $_GET['atbalsta_joma'] == $v) {
                                                    echo '<option value="' . $k . '" selected>' . $v . '</option>';
                                                } else {
                                                    echo '<option value="' . $k . '">' . $v . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="select-wrapper">
                                <label class="select-label"><?php _e('Novads', 'lpa') ?></label>
                                <?php $region_of_operation = get_field_object('field_6343b8d928863')['choices']; ?>
                                <div>
                                    <select name="novads">
                                        <?php
                                        if ($region_of_operation) {
                                            foreach ($region_of_operation as $k => $v) {
                                                if (isset($_GET['novads']) && $_GET['novads'] == $v) {
                                                    echo '<option selected value="' . $k . '">' . $v . '</option>';
                                                } else {
                                                    echo '<option value="' . $k . '">' . $v . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="checkbox-wrapper">
                                <label class="checkbox-label" for=""><?php _e('Atbalsta sniegšanas veids', 'lpa') ?></label>
                                <div class="d-flex">
                                    <label class="checkbox-container"><?php _e('Klātienē', 'lpa') ?>
                                        <input type="checkbox" name="type_of_support[]" <?php if (isset($_GET['type_of_support']) && in_array("Klātienē", $_GET['type_of_support'])) echo "checked" ?> value="Klātienē">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkbox-container"><?php _e('Attālināti', 'lpa') ?>
                                        <input type="checkbox" name="type_of_support[]" <?php if (isset($_GET['type_of_support']) && in_array("Attālināti", $_GET['type_of_support'])) echo "checked" ?> value="Attālināti">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <button class="d-none" type="submit" value="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
        $current_page = get_query_var('paged') ? (int) get_query_var('paged') : 1;
        $users_per_page = 9;

        $region_query = array();
        if (isset($_GET['novads']) && $_GET['novads'] != "Visi") {
            $region_query = array(
                'key'     => 'Region_of_operation',
                'value'   => $_GET['novads'],
                'compare' => 'LIKE',
            );
        }
        $support_area_query = array();
        if (isset($_GET['atbalsta_joma']) && $_GET['atbalsta_joma'] != "all") {
            foreach ($support_area as $k => $v) {
                foreach ($v['choices'] as $innerRow => $value) {
                    if ($value == $_GET['atbalsta_joma']) {
                        $support_area_query = array(
                            'key'     => ($post_slug == "piedava-atbalstu" ? $v["name"] . "_offer" : $v["name"]),
                            'value'   => $_GET['atbalsta_joma'],
                            'compare' => 'LIKE',
                        );
                        break;
                    }
                }
            }
        }

        $type_of_support_query = array('relation' => 'OR');
        if (isset($_GET['type_of_support'])) {
            $type_of_support = $_GET['type_of_support'];
            foreach ($type_of_support as $Key => $Value) {
                $type_of_support_query[] = array('key' => "Region_of_operation", 'value' => $Value, 'compare' => 'LIKE');
            }
        }

        $profile_availability = array('relation' => 'OR', array(
            'key'     => 'profile_availability',
            'value'   => '"Publiski pieejams"',
            'compare' => 'LIKE',
        ));

        if (is_user_logged_in()) {
            $profile_availability[] = array(
                'key'     => 'profile_availability',
                'value'   => '"Tikai reģistrētiem lietotājiem"',
                'compare' => 'LIKE',
            );
        }

        $blogusers = get_users();
        $excluded_user_ids = array();
        // Array of WP_User objects.
        foreach ($blogusers as $user) {
            if (!UM()->user()->is_approved($user->ID)) {
                array_push($excluded_user_ids, $user->ID);
            }
        }

        $user_roles = get_field('roles');
        $args = array(
            'role__in' => $user_roles,
            // 'exclude' => $excluded_user_ids,
            'number' => $users_per_page,
            'paged' => $current_page,
            'meta_query' => array(
                'relation' => 'AND',
                $profile_availability,
                $type_of_support_query,
                $region_query,
                $support_area_query
            ),


        );
        $user_query = new WP_User_Query($args);
        ?>
        <div class="row">
            <?php
            if (!empty($user_query->results)) :
                foreach ($user_query->results as $user) : ?>
                    <div class="col-lg-4 user-card">
                        <a href="<?php echo um_user_profile_url($user->ID) . "?" . $post_slug ?>" class="user">
                            <div class="user--image text-center">
                                <?php $photo_link = apply_filters('um_user_shortcode_filter__profile_photo', get_user_meta($user->ID, 'profile_photo', true), $user->ID); ?>
                                <img src="<?php echo (!get_user_meta($user->ID, 'is_avatar_visible', true) && !is_user_logged_in()) ? home_url() . "/wp-content/plugins/ultimate-member/assets/img/default_avatar.jpg" : $photo_link ?>" class="<?php if (!get_user_meta($user->ID, 'profile_photo', true)) echo "default-img" ?>" alt="">
                            </div>
                            <div class="user--main-info">
                                <h5>
                                    <?php
                                    if (!get_user_meta($user->ID, 'is_username_visible', true) && !is_user_logged_in()) {
                                        _e("nav publiski pieejams", 'lpa');
                                    } else {
                                        echo get_user_meta($user->ID, 'profile_name', true);
                                    }
                                    ?>
                                </h5>
                                <?php
                                $count_of_supports = 0;
                                ?>
                                <ul class="support-area d-flex align-items-center">
                                    <?php
                                    $user_support_areas = null;
                                    $category_type = get_field('category_type');
                                    if ($category_type == 'need') {
                                        $movable_properties = get_user_meta($user->ID, 'movable_property', true);
                                        $real_estates = get_user_meta($user->ID, 'real_estate', true);
                                        $human_resources = get_user_meta($user->ID, 'human_resources', true);
                                        $financial_resources = get_user_meta($user->ID, 'financial_resources', true);
                                        $competences_and_consultations = get_user_meta($user->ID, 'competences_and_consultations', true);

                                        $user_support_areas = array_merge((array)$movable_properties, (array)$real_estates, (array)$human_resources, (array)$financial_resources, (array)$competences_and_consultations);
                                    } else {
                                        $movable_properties_offer = get_user_meta($user->ID, 'movable_property_offer', true);
                                        $real_estates_offer = get_user_meta($user->ID, 'real_estate_offer', true);
                                        $human_resources_offer = get_user_meta($user->ID, 'human_resources_offer', true);
                                        $financial_resources_offer = get_user_meta($user->ID, 'financial_resources_offer', true);
                                        $competences_and_consultations_offer = get_user_meta($user->ID, 'competences_and_consultations_offer', true);
                                        $user_support_areas = array_merge((array)$movable_properties_offer, (array)$real_estates_offer, (array)$human_resources_offer, (array)$financial_resources_offer, (array)$competences_and_consultations_offer);
                                    }

                                    if ($user_support_areas) :
                                        foreach ($user_support_areas as $user_support_area) :
                                            if ($count_of_supports < 2 && !empty($user_support_area)) : ?>
                                                <li><?php echo $user_support_area; ?></li>
                                    <?php
                                            endif;
                                            if (!empty($user_support_area)) {
                                                $count_of_supports++;
                                            }
                                        endforeach;
                                    endif;
                                    ?>
                                    <?php if ($count_of_supports > 2) : ?>
                                        <li><?php printf(__('+%s citi', 'lpa'), $count_of_supports - 2); ?></li>
                                    <?php endif; ?>
                                </ul>
                                <p class="user--description">
                                    <?php
                                    if (!get_user_meta($user->ID, 'is_apraksts_darbibas_joma_visible', true) && !is_user_logged_in()) {
                                        _e("nav publiski pieejams", 'lpa');
                                    } else {
                                        echo get_user_meta($user->ID, 'description-scope', true);
                                    }
                                    ?>
                                    <?php echo get_user_meta($user->ID, 'description-scope', true) ?>
                                </p>
                                <div class="location d-flex align-items-center">
                                    <i class="ic ic--waypoint"></i>
                                    <p><?php echo implode(', ', get_user_meta($user->ID, 'Region_of_operation', true)); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                endforeach; ?>
            <?php else : ?>
                <div style="margin: 0 auto;" class="text-center">
                    <p class="has-bigger-font-size">Diemžēl Jūsu meklēšanas kritērijiem neatbilst neviens rezultāts.</p>
                    <p class="has-bigger-font-size">Lūdzu, pamēģiniet vēlreiz.</p>
                </div>
            <?php

            endif;
            ?>
            <div class="col-12">
                <div class="pager w-100 flex align-items-center justify-content-center">
                    <?php
                    $page_args = array(
                        'base'         => preg_replace('/\?.*/', '/', get_pagenum_link(1)) . '%_%',
                        'format'       => 'page/%#%/',
                        'total'        => ceil($user_query->total_users / $users_per_page),
                        'current'      => $current_page,
                        'end_size'     => 5,
                        'mid_size'     => 5,
                        'prev_next'    => True,
                        'prev_text'    => '<span class="ic ic--arrow-left"></span>',
                        'next_text'    => '<span class="ic ic--arrow-right"></span>',
                        'type'         => 'plain',
                    );

                    echo paginate_links($page_args);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>