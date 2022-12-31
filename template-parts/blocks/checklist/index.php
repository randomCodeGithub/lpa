<?php if (!defined('ABSPATH')) exit;
if (is_admin()) return; ?>
<section class="b--checklist">
    <div class="container">
        <?php if ($title = get_field("title")) : ?>
            <h2><?php echo $title ?></h2>
        <?php endif ?>
        <?php if (have_rows('checklist')) :
            $cols = ["3", "4"];
            $col_number = $cols[0];
            $is_number_default = true;
            $to_left = 4;
        ?>
            <div class="row">
                <?php while (have_rows('checklist')) : the_row();
                    $text = get_sub_field('text');
                    // echo $i;
                ?>
                    <div class="col-lg-<?php echo $col_number ?>">
                        <i class="ic ic--checkmark"></i>
                        <div class="text-wrapper">
                            <?php echo $text ?>
                        </div>
                    </div>
                <?php
                    $to_left--;
                    if ($is_number_default && $to_left == 0) {
                        $is_number_default = false;
                        $to_left = 3;
                        $col_number = $cols[1];
                    } else if (!$is_number_default && $to_left == 0) {
                        $is_number_default = true;
                        $to_left = 4;
                        $col_number = $cols[0];
                    }
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>