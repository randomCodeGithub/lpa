<?php if (!defined('ABSPATH')) exit;
if (is_admin()) return; ?>
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="info">
                    <?php if ($title = get_field("title")) : ?>
                        <h1>
                            <div class="line"></div>
                            <?php echo $title ?>
                        </h1>
                    <?php endif ?>
                    <?php if ($description = get_field("description")) : ?>
                        <p><?php echo $description ?></p>
                    <?php endif ?>
                </div>
            </div>
            <?php
            $link = get_field('link');
            if ($link && $link['url'] && $link['title']) : ?>
                <div class="col-lg-6 d-flex align-items-center justify-content-end">
                    <a class="btn" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>