<?php if (!defined('ABSPATH')) exit;
if (is_admin()) return; ?>
<section class="ad-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?php if($shortcode = get_field('shortcode')) {
                    echo do_shortcode($shortcode);
                } ?>
            </div>
        </div>
    </div>
</section>