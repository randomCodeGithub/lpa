<?php if (!defined('ABSPATH')) exit;
if (is_admin()) return;
global $wp;
if (isset($_POST['remove_account'])) {
    wp_redirect(home_url() . '/pieslegties');
}
if (isset($_GET['message']) && $_GET['message'] == "checkmail") {
    header('Location: ' . home_url($wp->request) . "/?successfulRegistration");
}
if (isset($_GET['updated']) && $_GET['updated'] == "checkemail") {
    header('Location: ' . home_url($wp->request) . "/?successfulPWChange");
}
?>
<section class="b--form">
    <div class="container">
        <?php $is_title_outside_form = get_field("title_outside_form");
        if ($is_title_outside_form) {
            get_template_part('template-parts/title');
        }
        ?>
        <div class="row">
            <?php $col_size = get_field("col_size") ?: "4" ?>
            <div class="col-lg-<?php echo $col_size ?>">
                <?php
                if (!$is_title_outside_form) {
                    get_template_part('template-parts/title');
                }
                $registration = get_field('registration');
                if (!isset($_GET['activity'])) {
                    if ($shortcode = get_field("shortcode")) {
                        echo do_shortcode($shortcode);
                    }
                } else {
                    echo do_shortcode('[ultimatemember form_id="190"]');
                }
                // if(isset($_GET[''])) {}
                ?>
            </div>
        </div>
    </div>
</section>

<?php if (isset($_GET['successfulRegistration'])) : ?>
    <div class="success-registration-popup d-flex align-items-center justify-content-center">
        <div class="message text-center">
            <i class="ic ic--close"></i>
            <i class="ic ic--checkmark"></i>
            <h4><?php _e('Paldies, reģistrācija ir veikta!', 'lpa') ?></h4>
            <p><?php _e('Profila paroli saņemsiet uz anketā norādīto e-pasta adresi.', 'lpa') ?></p>
            <a href="#" class="btn"><?php _e('Aizvērt', 'lpa') ?></a>
        </div>
    </div>
<?php endif; ?>
<?php if (isset($_GET['successfulPWChange']) && !isset($_POST['um_error'])) : ?>
    <div class="success-registration-popup d-flex align-items-center justify-content-center">
        <div class="message text-center">
            <i class="ic ic--close"></i>
            <i class="ic ic--checkmark"></i>
            <h4><?php _e('Paldies!', 'lpa') ?></h4>
            <p><?php _e('Paroles atiestatīšanas saiti saņemsiet uz norādīto e-pasta adresi.', 'lpa') ?></p>
            <a href="#" class="btn"><?php _e('Aizvērt', 'lpa') ?></a>
        </div>
    </div>
<?php endif; ?>