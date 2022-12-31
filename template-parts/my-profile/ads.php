<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type'        => 'sludinajums',
    'author' => get_current_user_id(),
    'posts_per_page'   => 6,
    'order'   => 'DESC',
    'paged' => $paged
);
$ads = new WP_Query($args); ?>
<?php if ($ads->have_posts()) : ?>
    <!-- Add ad btn -->
    <a class="btn" href="<?php echo home_url() ?>/pievienot-sludinajumu/"><?php _e("PIEVIENOT SLUDINĀJUMU", "lpa") ?></a>
<?php endif; ?>
<?php if ($ads->have_posts()) : ?>
    <?php while ($ads->have_posts()) :
        $ads->the_post(); ?>
        <?php
        $category = get_the_category(get_the_ID());
        ?>
        <div class="row ad">
            <div class="col-lg-4">
                <div class="ad--image">
                    <!-- Profile photo -->
                    <?php if ($image = get_field("image", get_the_ID())) {
                        pdg_img($image, [384, 322]);
                    } else {
                        echo '<img src="' . get_stylesheet_directory_uri() . '/assets/img/upload-photo-placeholder-2.svg" >';
                    } ?>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="content">
                    <ul class="dates d-flex">
                        <li class="publish-date has-small-font-size">
                            <?php _e('Publicēts:', 'leveria'); ?> <?php echo get_the_date('d.m.Y') ?>
                        </li>
                        <li class="publish-date has-small-font-size">
                            <?php
                            // Load field value.
                            $due_date_string = get_field('due_date', get_the_ID());

                            // Create DateTime object from value (formats must match).

                            if ($due_date_string = get_field('due_date')) {
                                $date = DateTime::createFromFormat('d/m/Y', $due_date_string);
                                echo __('Aktīvs līdz:', 'leveria') . " " . $date->format('d.m.Y');
                            }
                            ?>
                        </li>
                    </ul>
                    <h5><?php the_title() ?></h5>
                    <?php if ($category) : ?>
                        <ul class="categories d-flex">
                            <li class="category has-small-font-size">
                                <?php echo $category[0]->cat_name; ?>
                            </li>
                        </ul>
                    <?php endif;
                    $phone = get_field('phone', get_the_ID());
                    $email = get_field('email', get_the_ID());
                    if ($phone || $email) : ?>
                        <ul class="contacts d-flex">
                            <?php if ($phone) : ?>
                                <li><i class="ic ic--phone"></i><?php echo $phone ?></li>
                            <?php endif;
                            if ($email) : ?>
                                <li><i class="ic ic--email"></i><?php echo $email ?></li>
                            <?php endif ?>
                        </ul>
                    <?php endif ?>
                </div>

            </div>
            <?php if ($description = get_field('description')) : ?>
                <div class="col-lg-12">
                    <div class="description">
                        <?php echo $description; ?>
                    </div>
                </div>
            <?php endif ?>
            <div class="col-12 btn-wrapper">
                <a href="<?php the_permalink(get_the_ID()) ?>" class="btn"><?php _e('REDIĢĒT', 'lpa'); ?></a>
                <a href="#" class="js-remove-ad remove-ad" data-post-id="<?php echo get_the_ID() ?>"><?php _e('Dzēst', 'lpa'); ?><i class="ic ic--delete"></i></a>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata();
else : ?>
    <div style="margin: 0 auto;" class="text-center">
        <p class="has-bigger-font-size"><?php _e("Jūs vēl nepievienojāt nevienu sludinājumu.", "lpa") ?></p>
        <br>
        <!-- Add ad btn -->
        <a class="btn" href="<?php echo home_url() ?>/pievienot-sludinajumu/"><?php _e("PIEVIENOT SLUDINĀJUMU", "lpa") ?></a>
    </div>
<?php endif;
pdg_pager($ads, array(
    'prev' => '<span class="ic ic--arrow-left"></span>',
    'next' => '<span class="ic ic--arrow-right"></span>',
));
?>

<form method="post" class="d-none remove-post-form">
    <input type="hidden" name="remove_post" value="deletion" />
    <input type="hidden" name="delete_post_id" />
    <input type="submit" value="submit" class="btn" />
</form>

<div class="success-registration-popup d-none align-items-center justify-content-center js-remove-post-popup">
    <div class="message text-center">
        <i class="ic ic--close"></i>
        <h4><?php _e('Sludinājuma dzēšana', 'lpa') ?></h4>
        <p><?php _e('Vai tiešām vēlaties dzēst sludīnājumu?', 'lpa') ?></p>
        <div>
            <button class="btn js-post-deletion"><?php _e('Jā', 'lpa') ?></button>
            <a href="#"><?php _e('Nē', 'lpa') ?></a>
        </div>
    </div>
</div>