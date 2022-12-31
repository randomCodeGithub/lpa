<?php if (!defined('ABSPATH')) exit; ?>

</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 d-flex align-items-baseline align-items-lg-end">
                <?php if ($footer_logo = get_field('footer_logo', 'option')) : ?>
                    <a href="<?php echo home_url() ?>" class="footer-logo">
                        <?php pdg_img($footer_logo, 'full', array(
                            'class' => array('w-100'),
                            'crop' => false,
                            'svg_mode' => 2
                        )); ?>
                    </a>
                <?php endif ?>
                <?php if ($additional_footer_logo = get_field('additional_footer_logo', 'option')) : ?>
                    <div class="footer-additional-logo">
                        <?php pdg_img($additional_footer_logo, 'full', array(
                            'class' => array('w-100'),
                            'crop' => false,
                            'svg_mode' => 2
                        )); ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-lg-7">
                <?php $contacts = get_field("contacts", "option");
                if ($contacts) : ?>
                    <ul class="contacts d-flex">
                        <?php if ($contacts['address']) : ?>
                            <li><i class="ic ic--waypoint"></i><?php echo $contacts['address'] ?>
                                <a href="https://maps.google.com/?q=lpa<?php echo $contacts['address'] ?>" class="d-block"><?php _e('Skatīt kartē', 'lpa'); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if ($contacts['phone']) : ?>
                            <li><i class="ic ic--phone"></i>
                                <a href="tel:<?php echo $contacts['phone'] ?>"><?php echo $contacts['phone'] ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if ($contacts['email']) : ?>
                            <li><i class="ic ic--email"></i>
                                <a href="mailto:<?php echo $contacts['email'] ?>"><?php echo $contacts['email'] ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <?php $privacyPolicyLink = get_privacy_policy_url(); ?>
                    <?php if (!empty($privacyPolicyLink)) : ?>
                        <a class="text-decor-none d-none d-lg-block" href="<?php echo $privacyPolicyLink ?>"><?php _e('Privātuma politika', 'lpa'); ?></a>
                    <?php endif ?>
                </div>
                <div class="col-lg-6 text-center">
                    <?php get_template_part('template-parts/copyright'); ?>
                </div>
                <div class="col-lg-3 d-flex justify-content-between justify-content-lg-end">
                    <?php if (!empty($privacyPolicyLink)) : ?>
                        <a class="text-decor-none d-block d-lg-none privacy-link-mobile" href="<?php echo $privacyPolicyLink ?>"><?php _e('Privātuma politika', 'lpa'); ?></a>
                    <?php endif ?>
                    <?php get_template_part('template-parts/developer'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php get_template_part('template-parts/foot'); ?>