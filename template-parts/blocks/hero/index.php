<?php if (!defined('ABSPATH')) exit;
if (is_admin()) return; ?>
<section class="b--hero" style="<?php if ($image = get_field('image')) echo 'background-image: url(' . pdg_get_image_src($image, [1920, 0]) . ');' ?>">
<div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="content-wrapper">
                    <?php if ($title = get_field('title')) : ?>
                        <h1><?php echo $title ?></h1>
                    <?php endif ?>
                    <?php if ($text = get_field('text')) : ?>
                        <p><?php echo $text ?></p>
                    <?php endif ?>
                    <?php
                    $link = get_field('link');
                    if ($link && $link['url'] && $link['title']) : ?>
                        <a class="btn" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>