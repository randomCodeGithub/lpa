<?php if (!defined('ABSPATH')) exit;
if (is_admin()) return; ?>

<?php if (have_rows('items')) :
    $i = 1;
    $offset_bottom = get_field('offset_bottom') ?: false;
?>
    <section class="text-and-image-multiple <?php if ($offset_bottom) echo 'offset-bottom' ?>">
        <?php while (have_rows('items')) : the_row();
            $image_group = get_sub_field('image_group');
            $image = get_sub_field('image');
            $image_height = $image_group['image_height'] ?: 'image-h-normal';
            $text_content = get_sub_field('text_content');
            $title = $text_content['title'];
            $text = $text_content['text'];
            $link = $text_content['link'];
        ?>
            <div class="item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-col">
                            <div class="content-wrapper">
                                <?php if ($title) : ?>
                                    <h2 class="title">
                                        <div class="line"></div>
                                        <?php echo $title ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if ($text) : ?>
                                    <div class="text editor"><?php echo $text ?></div>
                                <?php endif; ?>
                            </div>

                        </div>
                        <div class="col-lg-6 image-col">
                            <?php if ($image) : ?>
                                <div class="image-wrapper">
                                    <!-- <picture> -->
                                    <!-- <source media="(max-width: 1099.98px)" srcset="<?php //echo pdg_get_image_src($image, array(660, 680), true, true) 
                                                                                        ?>"> -->
                                    <?php
                                    pdg_img($image, array(555, 900), array(
                                        'crop' => true,
                                        'class' => array('item-image', 'w-100')
                                    ));
                                    ?>
                                    <!-- </picture> -->
                                    <div class="overlay"></div>
                                </div>
                            <?php endif ?>
                        </div>

                    </div>
                    <?php if ($i > 1) : ?>
                        <div class="object d-none d-lg-block"></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php $i++;
        endwhile; ?>
    </section>
<?php endif; ?>