<?php get_header();
$current_user = wp_get_current_user();
if (is_user_logged_in() && $current_user->ID == $post->post_author) { ?>
    <section class="b--form">
        <div class="container">
            <?php
            get_template_part('template-parts/title');
            ?>
            <div class="row">
                <div class="col-lg-9">
                    <?php if ($edit_ad_shortcode = get_field('edit_ad_shortcode', 'option')) {
                        echo do_shortcode($edit_ad_shortcode);
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php } else {
    wp_redirect(home_url());
}
get_footer(); ?>