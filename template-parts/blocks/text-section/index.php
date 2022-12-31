<?php if (!defined('ABSPATH')) exit;
if (is_admin()) return; ?>
<section class="b--text">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="text-wrapper editor">
                    <?php if ($title = get_field('title')) : ?>
                        <h2>
                            <div class="line"></div>
                            <?php echo $title ?>
                        </h2>
                    <?php endif ?>
                    <?php
                    if ($text = get_field('text_wysiwyg'))
                        echo $text ?>
                </div>
            </div>
            <?php $is_icon = get_field('is_icon'); ?>
            <div class="col-lg-5 <?php if (!$is_icon) echo "d-flex align-items-end" ?>">
                <?php
                if ($text = get_field('text_wysiwyg_2')) : ?>
                    <div class="text-wrapper <?php if ($is_icon) echo "h-100" ?>">
                        <?php if ($is_icon) :
                            $icon = get_field('icon')
                        ?>
                            <i class="ic ic--<?php echo $icon ?>"></i>
                        <?php endif; ?>
                        <div class="text-editor">
                            <?php echo $text; ?>
                        </div>
                        <?php
                        $link = get_field('link');
                        if ($link && $link['url'] && $link['title']) : ?>
                            <a class="btn" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>