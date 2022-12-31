<!--
Template Name: Mans Profils
-->
<?php get_header();
// echo do_shortcode("[ultimatemember_account]");
?>
<section class="my-profile">
    <div class="container">
        <?php get_template_part('template-parts/title'); ?>
        <div class="row">
            <div class="col-lg-3">
                <ul class="profile-sidebar">
                    <li>
                        <a href="<?php echo get_permalink() ?>" class="<?php if (!isset($_GET['profile']) || $_GET['profile'] == "edit_profile") echo "active" ?>"><?php _e('Mans profils', 'lpa'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_permalink() ?>?profile=edit_pass" class="<?php if (isset($_GET['profile']) && $_GET['profile'] == "edit_pass") echo "active" ?>">
                            <?php _e('Mainīt paroli', 'lpa'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_permalink() ?>?profile=ads" class="<?php if (isset($_GET['profile']) && $_GET['profile'] == "ads") echo "active" ?>"><?php _e('Sludinājumi', 'lpa'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo wp_logout_url(home_url()); ?>"><?php _e('Iziet', 'lpa'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9">
                <?php
                $my_profile_path = "template-parts/my-profile/";
                if (!isset($_GET['profile'])) {
                    get_template_part($my_profile_path . 'info');
                } else {
                    if ($_GET['profile'] == "edit_pass") {
                        get_template_part($my_profile_path . 'change-password');
                    } elseif ($_GET['profile'] == "ads") {
                        get_template_part($my_profile_path . 'ads');
                    } elseif ($_GET['profile'] == "edit_profile") {
                        if ($edit_profile_shortcode = get_field('edit_profile_shortcode')) { ?>
                            <div class="d-none">
                                <label class="eye-container is-avatar-visible">
                                    <input type="checkbox" name="is_avatar_visible" <?php if (get_user_meta($current_user->ID, 'is_avatar_visible', true)) echo 'checked' ?> id="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="eye-container is-username-visible">
                                    <input type="checkbox" name="is_username_visible" <?php if (get_user_meta($current_user->ID, 'is_username_visible', true)) echo 'checked' ?> id="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="eye-container is-email-visible">
                                    <input type="checkbox" name="is_email_visible" <?php if (get_user_meta($current_user->ID, 'is_email_visible', true)) echo 'checked' ?> id="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="eye-container is-phone-visible">
                                    <input type="checkbox" name="is_phone_visible" <?php if (get_user_meta($current_user->ID, 'is_phone_visible', true)) echo 'checked' ?> id="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="eye-container is_darbibas-formats-visible">
                                    <input type="checkbox" name="is_darbibas_formats_visible" <?php if (get_user_meta($current_user->ID, 'is_darbibas_formats_visible', true)) echo 'checked' ?> id="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="eye-container is-website-visible">
                                    <input type="checkbox" name="is_website_visible" <?php if (get_user_meta($current_user->ID, 'is_website_visible', true)) echo 'checked' ?> id="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="eye-container is-loma-programma-visible">
                                    <input type="checkbox" name="is_loma_programma_visible" <?php if (get_user_meta($current_user->ID, 'is_loma_programma_visible', true)) echo 'checked' ?> id="">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="eye-container is-apraksts-darbibas-joma-visible">
                                    <input type="checkbox" name="is_apraksts_darbibas_joma_visible" <?php if (get_user_meta($current_user->ID, 'is_apraksts_darbibas_joma_visible', true)) echo 'checked' ?> id="">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="change-profile-form">
                                <?php
                                echo do_shortcode($edit_profile_shortcode);
                                get_template_part($my_profile_path . 'um-extra-fields-edit');
                                ?>
                            </div>

                <?php
                        }
                    }
                }
                ?>

            </div>
        </div>
    </div>
</section>
<div class="success-registration-popup d-none align-items-center justify-content-center js-remove-popup">
    <div class="message text-center">
        <i class="ic ic--close"></i>
        <h4><?php _e('Profila dzēšana', 'lpa') ?></h4>
        <p><?php _e('Vai tiešām vēlaties dzēst savu profilu?', 'lpa') ?></p>
        <form method="POST" action="<?php echo home_url() . '/pieslegties' ?>">
            <div>
                <button name="remove_account" class="btn"><?php _e('Jā', 'lpa') ?></button>
                <a href="#"><?php _e('Nē', 'lpa') ?></a>
            </div>
        </form>
    </div>
</div>
<?php get_footer(); ?>