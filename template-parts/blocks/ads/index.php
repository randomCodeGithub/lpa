<?php if (!defined('ABSPATH')) exit;
if (is_admin()) return; ?>
<section class="b--ads">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filters d-flex align-items-end">
                    <?php
                    if ($facetwp_facets_shortcodes = get_field('facetwp_facets_shortcodes')) {
                        foreach ($facetwp_facets_shortcodes as $facet) {
                            $shortcode = $facet["shortcode"];
                            $label = $facet["label"];
                            if ($label) { ?>
                                <div class="filter">
                                    <label class="has-bigger-font-size"><?php echo $label ?></label>
                                    <?php echo do_shortcode($shortcode); ?>
                                </div>
                    <?php
                            }
                        }
                    } ?>
                    <?php
                    $link = get_field('add_ad_link');
                    if ($link && $link['url'] && $link['title']) : ?>
                        <a class="btn" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
                    <?php endif; ?>
                </div>
                <?
                if ($facetwp_template_shortcode = get_field("facetwp_template_shortcode")) {
                    echo do_shortcode($facetwp_template_shortcode);
                } ?>
            </div>
            <div class="col-lg-12">
                <?php echo facetwp_display('pager'); ?>
            </div>
        </div>
    </div>
</section>