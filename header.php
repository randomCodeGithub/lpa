<?php if (!defined('ABSPATH')) exit; ?>

<?php get_template_part('template-parts/head'); ?>
<header class="site-header">
    <div class="container">
        <div class="flex justify-content-between align-items-center">
            <?php if ($header_logo = get_field('header_logo', 'option')) : ?>
                <a href="<?php echo home_url() ?>" class="header-logo">
                    <?php
                    pdg_img($header_logo, 'full', array(
                        'class' => array('w-100 default'),
                        'crop' => false,
                        'svg_mode' => 2
                    ));
                    ?>
                </a>
            <?php endif ?>

            <span class="ic ic--burgermenu burger-menu js-burger-menu d-lg-none"></span>
            <div class="nav-main-wrap flex align-items-center">
                <div class="nav-main-inner flex align-items-center">
                    <nav class="nav-main responsive-menu">
                        <?php pdg_nav('header', 'd-block d-lg-flex align-items-center'); ?>
                    </nav>
                    <?php //pdg_language_switcher('dropdown'); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="site-content">