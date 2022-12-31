<?php $current_user = wp_get_current_user(); ?>
<!-- js-for-checkbox
Daudzums / Veids -->
<div class="js-for-checkbox">
    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="computer_amount_text" id="computer_amount_text" value="<?php echo (isset($_POST['computer_amount_text'])) ? $_POST['computer_amount_text'] : get_user_meta($current_user->ID, 'computer_amount_text', true) ?>" placeholder="Daudzums" data-validate="" data-key="computer_amount_text">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="computer_type_text" id="computer_type_text" value="<?php echo (isset($_POST['computer_type_text'])) ? $_POST['computer_type_text'] : get_user_meta($current_user->ID, 'computer_type_text', true) ?>" placeholder="Veids" data-validate="" data-key="computer_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="electrical_devices_amount_text" id="electrical_devices_amount_text" value="<?php echo (isset($_POST['electrical_devices_amount_text'])) ? $_POST['electrical_devices_amount_text'] : get_user_meta($current_user->ID, 'electrical_devices_amount_text', true) ?>" placeholder="Daudzums" data-validate="" data-key="electrical_devices_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="electrical_devices_type_text" id="electrical_devices_type_text" value="<?php echo (isset($_POST['electrical_devices_type_text'])) ? $_POST['electrical_devices_type_text'] : get_user_meta($current_user->ID, 'electrical_devices_type_text', true) ?>" placeholder="Veids" data-validate="" data-key="electrical_devices_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="furniture_amount_text" id="furniture_amount_text" value="<?php echo (isset($_POST['furniture_amount_text'])) ? $_POST['furniture_amount_text'] : get_user_meta($current_user->ID, 'furniture_amount_text', true) ?>" placeholder="Daudzums" data-validate="" data-key="furniture_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="furniture_type_text" id="furniture_type_text" value="<?php echo (isset($_POST['furniture_type_text'])) ? $_POST['furniture_type_text'] : get_user_meta($current_user->ID, 'furniture_type_text', true) ?>" placeholder="Veids" data-validate="" data-key="furniture_type_text">
        </div>

    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outdoor_activities_amount_items" id="outdoor_activities_amount_items" value="<?php echo (isset($_POST['outdoor_activities_amount_items'])) ? $_POST['outdoor_activities_amount_items'] : get_user_meta($current_user->ID, 'outdoor_activities_amount_items', true) ?>" placeholder="Daudzums" data-validate="" data-key="outdoor_activities_amount_items">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outdoor_activities_type_items" id="outdoor_activities_type_items" value="<?php echo (isset($_POST['outdoor_activities_type_items'])) ? $_POST['outdoor_activities_type_items'] : get_user_meta($current_user->ID, 'outdoor_activities_type_items', true) ?>" placeholder="Veids" data-validate="" data-key="outdoor_activities_type_items">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="vehicles_amount" id="vehicles_amount" value="<?php echo (isset($_POST['vehicles_amount'])) ? $_POST['vehicles_amount'] : get_user_meta($current_user->ID, 'vehicles_amount', true) ?>" placeholder="Daudzums" data-validate="" data-key="vehicles_amount">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="vehicles_type" id="vehicles_type" value="<?php echo (isset($_POST['vehicles_type'])) ? $_POST['vehicles_type'] : get_user_meta($current_user->ID, 'vehicles_type', true) ?>" placeholder="Veids" data-validate="" data-key="vehicles_type">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="digital_content_amount_text" id="digital_content_amount_text" value="<?php echo (isset($_POST['digital_content_amount_text'])) ? $_POST['digital_content_amount_text'] : get_user_meta($current_user->ID, 'digital_content_amount_text', true) ?>" placeholder="Daudzums" data-validate="" data-key="digital_content_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="digital_content_type_text" id="digital_content_type_text" value="<?php echo (isset($_POST['digital_content_type_text'])) ? $_POST['digital_content_type_text'] : get_user_meta($current_user->ID, 'digital_content_type_text', true) ?>" placeholder="Veids" data-validate="" data-key="digital_content_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="food_amount_text" id="food_amount_text" value="<?php echo (isset($_POST['food_amount_text'])) ? $_POST['food_amount_text'] : get_user_meta($current_user->ID, 'food_amount_text', true) ?>" placeholder="Daudzums" data-validate="" data-key="food_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="food_type_text" id="food_type_text" value="<?php echo (isset($_POST['food_type_text'])) ? $_POST['food_type_text'] : get_user_meta($current_user->ID, 'food_type_text', true) ?>" placeholder="Veids" data-validate="" data-key="food_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="clothes_amount_text" id="clothes_amount_text" value="<?php echo (isset($_POST['clothes_amount_text'])) ? $_POST['clothes_amount_text'] : get_user_meta($current_user->ID, 'clothes_amount_text', true) ?>" placeholder="Daudzums" data-validate="" data-key="clothes_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="clothes_type_text" id="clothes_type_text" value="<?php echo (isset($_POST['clothes_type_text'])) ? $_POST['clothes_type_text'] : get_user_meta($current_user->ID, 'clothes_type_text', true) ?>" placeholder="Veids" data-validate="" data-key="clothes_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="print_materrial_amount_text" id="print_materrial_amount_text" value="<?php echo (isset($_POST['print_materrial_amount_text'])) ? $_POST['print_materrial_amount_text'] : get_user_meta($current_user->ID, 'print_materrial_amount_text', true) ?>" placeholder="Daudzums" data-validate="" data-key="print_materrial_amount_text">

        </div>
        <div class="um-field-area"><input autocomplete="off" class="um-form-field valid not-required " type="text" name="print_materrial_type_text" id="print_materrial_type_text" value="<?php echo (isset($_POST['print_materrial_type_text'])) ? $_POST['print_materrial_type_text'] : get_user_meta($current_user->ID, 'print_materrial_type_text', true) ?>" placeholder="Veids" data-validate="" data-key="print_materrial_type_text">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_amount_text" id="other_amount_text" value="<?php echo (isset($_POST['other_amount_text'])) ? $_POST['other_amount_text'] : get_user_meta($current_user->ID, 'other_amount_text', true) ?>" placeholder="Daudzums" data-validate="" data-key="other_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_type_text" id="other_type_text" value="<?php echo (isset($_POST['other_type_text'])) ? $_POST['other_type_text'] : get_user_meta($current_user->ID, 'other_type_text', true) ?>" placeholder="Veids" data-validate="" data-key="other_type_text">
        </div>
    </div>

</div>

<!-- js-for-checkbox-offer
Daudzums / Veids -->
<div class="js-for-checkbox-offer d-none">

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="computer_amount_text_offer" id="computer_amount_text_offer" value="<?php echo (isset($_POST['computer_amount_text_offer'])) ? $_POST['computer_amount_text_offer'] : get_user_meta($current_user->ID, 'computer_amount_text_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="computer_amount_text_offer">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="computer_type_text_offer" id="computer_type_text_offer" value="<?php echo (isset($_POST['computer_type_text_offer'])) ? $_POST['computer_type_text_offer'] : get_user_meta($current_user->ID, 'computer_type_text_offer', true) ?>" placeholder="Veids" data-validate="" data-key="computer_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="electrical_devices_amount_text_offer" id="electrical_devices_amount_text_offer" value="<?php echo (isset($_POST['electrical_devices_amount_text_offer'])) ? $_POST['electrical_devices_amount_text_offer'] : get_user_meta($current_user->ID, 'electrical_devices_amount_text_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="electrical_devices_amount_text_offer">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="electrical_devices_type_text_offer" id="electrical_devices_type_text_offer" value="<?php echo (isset($_POST['electrical_devices_type_text_offer'])) ? $_POST['electrical_devices_type_text_offer'] : get_user_meta($current_user->ID, 'electrical_devices_type_text_offer', true) ?>" placeholder="Veids" data-validate="" data-key="electrical_devices_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="furniture_amount_text_offer" id="furniture_amount_text_offer" value="<?php echo (isset($_POST['furniture_amount_text_offer'])) ? $_POST['furniture_amount_text_offer'] : get_user_meta($current_user->ID, 'furniture_amount_text_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="furniture_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="furniture_type_text_offer" id="furniture_type_text_offer" value="<?php echo (isset($_POST['furniture_type_text_offer'])) ? $_POST['furniture_type_text_offer'] : get_user_meta($current_user->ID, 'furniture_type_text_offer', true) ?>" placeholder="Veids" data-validate="" data-key="furniture_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outdoor_activities_amount_items_offer" id="outdoor_activities_amount_items_offer" value="<?php echo (isset($_POST['outdoor_activities_amount_items_offer'])) ? $_POST['outdoor_activities_amount_items_offer'] : get_user_meta($current_user->ID, 'outdoor_activities_amount_items_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="outdoor_activities_amount_items_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outdoor_activities_type_items_offer" id="outdoor_activities_type_items_offer" value="<?php echo (isset($_POST['outdoor_activities_type_items_offer'])) ? $_POST['outdoor_activities_type_items_offer'] : get_user_meta($current_user->ID, 'outdoor_activities_type_items_offer', true) ?>" placeholder="Veids" data-validate="" data-key="outdoor_activities_type_items_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="vehicles_amount_offer" id="vehicles_amount_offer" value="<?php echo (isset($_POST['vehicles_amount_offer'])) ? $_POST['vehicles_amount_offer'] : get_user_meta($current_user->ID, 'vehicles_amount_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="vehicles_amount_offer">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="vehicles_type_offer" id="vehicles_type_offer" value="<?php echo (isset($_POST['vehicles_type_offer'])) ? $_POST['vehicles_type_offer'] : get_user_meta($current_user->ID, 'vehicles_type_offer', true) ?>" placeholder="Veids" data-validate="" data-key="vehicles_type_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="digital_content_amount_text_offer" id="digital_content_amount_text_offer" value="<?php echo (isset($_POST['digital_content_amount_text_offer'])) ? $_POST['digital_content_amount_text_offer'] : get_user_meta($current_user->ID, 'digital_content_amount_text_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="digital_content_amount_text_offer">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="digital_content_type_text_offer" id="digital_content_type_text_offer" value="<?php echo (isset($_POST['digital_content_type_text_offer'])) ? $_POST['digital_content_type_text_offer'] : get_user_meta($current_user->ID, 'digital_content_type_text_offer', true) ?>" placeholder="Veids" data-validate="" data-key="digital_content_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="food_amount_text_offer" id="food_amount_text_offer" value="<?php echo (isset($_POST['food_amount_text_offer'])) ? $_POST['food_amount_text_offer'] : get_user_meta($current_user->ID, 'food_amount_text_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="food_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="food_type_text_offer" id="food_type_text_offer" value="<?php echo (isset($_POST['food_type_text_offer'])) ? $_POST['food_type_text_offer'] : get_user_meta($current_user->ID, 'food_type_text_offer', true) ?>" placeholder="Veids" data-validate="" data-key="food_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="clothes_amount_text_offer" id="clothes_amount_text_offer" value="<?php echo (isset($_POST['clothes_amount_text_offer'])) ? $_POST['clothes_amount_text_offer'] : get_user_meta($current_user->ID, 'clothes_amount_text_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="clothes_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="clothes_type_text_offer" id="clothes_type_text_offer" value="<?php echo (isset($_POST['clothes_type_text_offer'])) ? $_POST['clothes_type_text_offer'] : get_user_meta($current_user->ID, 'clothes_type_text_offer', true) ?>" placeholder="Veids" data-validate="" data-key="clothes_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="print_materrial_amount_text_offer" id="print_materrial_amount_text_offer" value="<?php echo (isset($_POST['print_materrial_amount_text_offer'])) ? $_POST['print_materrial_amount_text_offer'] : get_user_meta($current_user->ID, 'print_materrial_amount_text_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="print_materrial_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="print_materrial_type_text_offer" id="print_materrial_type_text_offer" value="<?php echo (isset($_POST['print_materrial_type_text_offer'])) ? $_POST['print_materrial_type_text_offer'] : get_user_meta($current_user->ID, 'print_materrial_type_text_offer', true) ?>" placeholder="Veids" data-validate="" data-key="print_materrial_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_amount_text_offer" id="other_amount_text_offer" value="<?php echo (isset($_POST['other_amount_text_offer'])) ? $_POST['other_amount_text_offer'] : get_user_meta($current_user->ID, 'other_amount_text_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="other_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_type_text_offer" id="other_type_text_offer" value="<?php echo (isset($_POST['other_type_text_offer'])) ? $_POST['other_type_text_offer'] : get_user_meta($current_user->ID, 'other_type_text_offer', true) ?>" placeholder="Veids" data-validate="" data-key="other_type_text_offer">

        </div>
    </div>

</div>

<!-- js-for-checkbox-second
Platba / Vairāk info -->
<div class="js-for-checkbox-second d-none">
    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="premises_area_text" id="premises_area_text" value="<?php echo (isset($_POST['premises_area_text'])) ? $_POST['premises_area_text'] : get_user_meta($current_user->ID, 'premises_area_text', true) ?>" placeholder="Platība" data-validate="" data-key="premises_area_text">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="premises_more_text" id="premises_more_text" placeholder="Vairāk info"><?php echo (isset($_POST['premises_more_text'])) ? $_POST['premises_more_text'] : get_user_meta($current_user->ID, 'premises_more_text', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="land_area_text" id="land_area_text" value="<?php echo (isset($_POST['land_area_text'])) ? $_POST['land_area_text'] : get_user_meta($current_user->ID, 'land_area_text', true) ?>" placeholder="Platība" data-validate="" data-key="land_area_text">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="land_more_text" id="land_more_text" placeholder="Vairāk info"><?php echo (isset($_POST['land_more_text'])) ? $_POST['land_more_text'] : get_user_meta($current_user->ID, 'land_more_text', true) ?></textarea>
        </div>

    </div>
</div>

<!-- js-for-checkbox-second-offer
Platība / Vairāk info -->
<div class="js-for-checkbox-second-offer d-none">
    <div class="checkbox-fields">
        <div class="um-field-area"><input autocomplete="off" class="um-form-field valid not-required " type="text" name="premises_area_text_offer" id="premises_area_text_offer" value="<?php echo (isset($_POST['premises_area_text_offer'])) ? $_POST['premises_area_text_offer'] : get_user_meta($current_user->ID, 'premises_area_text_offer', true) ?>" placeholder="Platība" data-validate="" data-key="premises_area_text_offer">

        </div>
        <div class="um-field-area"><textarea style="height: 100px;" class="um-form-field valid not-required " name="premises_more_text_offer" id="premises_more_text_offer" placeholder="Vairāk info"><?php echo (isset($_POST['premises_more_text_offer'])) ? $_POST['premises_more_text_offer'] : get_user_meta($current_user->ID, 'premises_more_text_offer', true) ?></textarea></div>

    </div>

    <div class="checkbox-fields">
        <div class="um-field-area"><input autocomplete="off" class="um-form-field valid not-required " type="text" name="land_area_text_offer" id="land_area_text_offer" value="<?php echo (isset($_POST['land_area_text_offer'])) ? $_POST['land_area_text_offer'] : get_user_meta($current_user->ID, 'land_area_text_offer', true) ?>" placeholder="Platība" data-validate="" data-key="land_area_text_offer">

        </div>
        <div class="um-field-area"><textarea style="height: 100px;" class="um-form-field valid not-required " name="land_more_text_offer" id="land_more_text_offer" placeholder="Vairāk info"><?php echo (isset($_POST['land_more_text_offer'])) ? $_POST['land_more_text_offer'] : get_user_meta($current_user->ID, 'land_more_text_offer', true) ?></textarea></div>

    </div>

</div>

<!-- js-for-checkbox-third
Daudzums / Vairāk info -->
<div class="js-for-checkbox-third d-none">
    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="financial_resources_amount_text" id="financial_resources_amount_text" value="<?php echo (isset($_POST['financial_resources_amount_text'])) ? $_POST['financial_resources_amount_text'] : get_user_meta($current_user->ID, 'financial_resources_amount_text', true) ?>" placeholder="Daudzums" data-validate="" data-key="financial_resources_amount_text">

        </div>

        <div class="um-field-area"><textarea style="height: 100px;" class="um-form-field valid not-required " name="financial_resources_more_text" id="financial_resources_more_text" placeholder="Vairāk info"><?php echo (isset($_POST['financial_resources_more_text'])) ? $_POST['financial_resources_more_text'] : get_user_meta($current_user->ID, 'financial_resources_more_text', true) ?></textarea></div>
    </div>
</div>

<!-- js-for-checkbox-third-offer
Daudzums / Vairāk info -->
<div class="js-for-checkbox-third-offer d-none">
    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="financial_resources_amount_text_offer" id="financial_resources_amount_text_offer" value="<?php echo (isset($_POST['financial_resources_amount_text_offer'])) ? $_POST['financial_resources_amount_text_offer'] : get_user_meta($current_user->ID, 'financial_resources_amount_text_offer', true) ?>" placeholder="Daudzums" data-validate="" data-key="financial_resources_amount_text_offer">
        </div>
        <div class="um-field-area"><textarea style="height: 100px;" class="um-form-field valid not-required " name="financial_resources_more_text_offer" id="financial_resources_more_text_offer" placeholder="Vairāk info"><?php echo (isset($_POST['financial_resources_more_text_offer'])) ? $_POST['financial_resources_more_text_offer'] : get_user_meta($current_user->ID, 'financial_resources_more_text_offer', true) ?></textarea></div>
    </div>
</div>

<!-- js-for-checkbox-five -->
<!-- Apjoms/h skaits / Vairāk -->
<div class="js-for-checkbox-five d-none">

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="training_volume" id="training_volume" value="<?php echo (isset($_POST['training_volume'])) ? $_POST['training_volume'] : get_user_meta($current_user->ID, 'training_volume', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="training_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="training_more" id="training_more" placeholder="Vairāk info"><?php echo (isset($_POST['training_more'])) ? $_POST['training_more'] : get_user_meta($current_user->ID, 'training_more', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="consultations_of_psychologists_volume" id="consultations_of_psychologists_volume" value="<?php echo (isset($_POST['consultations_of_psychologists_volume'])) ? $_POST['consultations_of_psychologists_volume'] : get_user_meta($current_user->ID, 'consultations_of_psychologists_volume', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="consultations_of_psychologists_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="consultations_of_psychologists_more" id="consultations_of_psychologists_more" placeholder="Vairāk info"><?php echo (isset($_POST['consultations_of_psychologists_more'])) ? $_POST['consultations_of_psychologists_more'] : get_user_meta($current_user->ID, 'consultations_of_psychologists_more', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="legal_advice_volume" id="legal_advice_volume" value="<?php echo (isset($_POST['legal_advice_volume'])) ? $_POST['legal_advice_volume'] : get_user_meta($current_user->ID, 'legal_advice_volume', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="legal_advice_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="legal_advice_more" id="legal_advice_more" placeholder="Vairāk info"><?php echo (isset($_POST['legal_advice_more'])) ? $_POST['legal_advice_more'] : get_user_meta($current_user->ID, 'legal_advice_more', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="accounting_consulting_volume" id="accounting_consulting_volume" value="<?php echo (isset($_POST['accounting_consulting_volume'])) ? $_POST['accounting_consulting_volume'] : get_user_meta($current_user->ID, 'accounting_consulting_volume', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="accounting_consulting_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="accounting_consulting_more" id="accounting_consulting_more" placeholder="Vairāk info"><?php echo (isset($_POST['accounting_consulting_more'])) ? $_POST['accounting_consulting_more'] : get_user_meta($current_user->ID, 'accounting_consulting_more', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="research_support_volume" id="research_support_volume" value="<?php echo (isset($_POST['research_support_volume'])) ? $_POST['research_support_volume'] : get_user_meta($current_user->ID, 'research_support_volume', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="research_support_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="research_support_more" id="research_support_more" placeholder="Vairāk info"><?php echo (isset($_POST['research_support_more'])) ? $_POST['research_support_more'] : get_user_meta($current_user->ID, 'research_support_more', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="it_support_volume" id="it_support_volume" value="<?php echo (isset($_POST['it_support_volume'])) ? $_POST['it_support_volume'] : get_user_meta($current_user->ID, 'it_support_volume', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="it_support_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="it_support_more" id="it_support_more" placeholder="Vairāk info"><?php echo (isset($_POST['it_support_more'])) ? $_POST['it_support_more'] : get_user_meta($current_user->ID, 'it_support_more', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="foto_video_design_volume" id="foto_video_design_volume" value="<?php echo (isset($_POST['foto_video_design_volume'])) ? $_POST['foto_video_design_volume'] : get_user_meta($current_user->ID, 'foto_video_design_volume', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="foto_video_design_volume">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="foto_video_design_more" id="foto_video_design_more" placeholder="Vairāk info"><?php echo (isset($_POST['foto_video_design_more'])) ? $_POST['foto_video_design_more'] : get_user_meta($current_user->ID, 'foto_video_design_more', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_record_volume" id="other_record_volume" value="<?php echo (isset($_POST['other_record_volume'])) ? $_POST['other_record_volume'] : get_user_meta($current_user->ID, 'other_record_volume', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="other_record_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="other_record_more" id="other_record_more" placeholder="Vairāk"><?php echo (isset($_POST['other_record_more'])) ? $_POST['other_record_more'] : get_user_meta($current_user->ID, 'other_record_more', true) ?></textarea>
        </div>

    </div>

</div>

<!-- js-for-checkbox-five-offer -->
<!-- Apjoms/h skaits / Vairāk -->
<div class="js-for-checkbox-five-offer d-none">

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="training_volume_offer" id="training_volume_offer" value="<?php echo (isset($_POST['training_volume_offer'])) ? $_POST['training_volume_offer'] : get_user_meta($current_user->ID, 'training_volume_offer', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="training_volume_offer">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="training_more_offer" id="training_more_offer" placeholder="Vairāk"><?php echo (isset($_POST['training_more_offer'])) ? $_POST['training_more_offer'] : get_user_meta($current_user->ID, 'training_more_offer', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="consultations_of_psychologists_volume_offer" id="consultations_of_psychologists_volume_offer" value="<?php echo (isset($_POST['consultations_of_psychologists_volume_offer'])) ? $_POST['consultations_of_psychologists_volume_offer'] : get_user_meta($current_user->ID, 'consultations_of_psychologists_volume_offer', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="consultations_of_psychologists_volume_offer">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="consultations_of_psychologists_more_offer" id="consultations_of_psychologists_more_offer" placeholder="Vairāk"><?php echo (isset($_POST['consultations_of_psychologists_more_offer'])) ? $_POST['consultations_of_psychologists_more_offer'] : get_user_meta($current_user->ID, 'consultations_of_psychologists_more_offer', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="legal_advice_volume_offer" id="legal_advice_volume_offer" value="<?php echo (isset($_POST['legal_advice_volume_offer'])) ? $_POST['legal_advice_volume_offer'] : get_user_meta($current_user->ID, 'legal_advice_volume_offer', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="legal_advice_volume_offer">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="legal_advice_more_offer" id="legal_advice_more_offer" placeholder="Vairāk"><?php echo (isset($_POST['legal_advice_more_offer'])) ? $_POST['legal_advice_more_offer'] : get_user_meta($current_user->ID, 'legal_advice_more_offer', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="accounting_consulting_volume_offer" id="accounting_consulting_volume_offer" value="<?php echo (isset($_POST['accounting_consulting_volume_offer'])) ? $_POST['accounting_consulting_volume_offer'] : get_user_meta($current_user->ID, 'accounting_consulting_volume_offer', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="accounting_consulting_volume_offer">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="accounting_consulting_more_offer" id="accounting_consulting_more_offer" placeholder="Vairāk"><?php echo (isset($_POST['accounting_consulting_more_offer'])) ? $_POST['accounting_consulting_more_offer'] : get_user_meta($current_user->ID, 'accounting_consulting_more_offer', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="research_support_volume_offer" id="research_support_volume_offer" value="<?php echo (isset($_POST['research_support_volume_offer'])) ? $_POST['research_support_volume_offer'] : get_user_meta($current_user->ID, 'research_support_volume_offer', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="research_support_volume_offer">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="research_support_more_offer" id="research_support_more_offer" placeholder="Vairāk"><?php echo (isset($_POST['research_support_more_offer'])) ? $_POST['research_support_more_offer'] : get_user_meta($current_user->ID, 'research_support_more_offer', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="it_support_volume_offer" id="it_support_volume_offer" value="<?php echo (isset($_POST['it_support_volume_offer'])) ? $_POST['it_support_volume_offer'] : get_user_meta($current_user->ID, 'it_support_volume_offer', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="it_support_volume_offer">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="it_support_more_offer" id="it_support_more_offer" placeholder="Vairāk"><?php echo (isset($_POST['it_support_more_offer'])) ? $_POST['it_support_more_offer'] : get_user_meta($current_user->ID, 'it_support_more_offer', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="foto_video_design_volume_offer" id="foto_video_design_volume_offer" value="<?php echo (isset($_POST['foto_video_design_volume_offer'])) ? $_POST['foto_video_design_volume_offer'] : get_user_meta($current_user->ID, 'foto_video_design_volume_offer', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="foto_video_design_volume_offer">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="foto_video_design_more_offer" id="foto_video_design_more_offer" placeholder="Vairāk"><?php echo (isset($_POST['foto_video_design_more_offer'])) ? $_POST['foto_video_design_more_offer'] : get_user_meta($current_user->ID, 'foto_video_design_more_offer', true) ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_record_volume_offer" id="other_record_volume_offer" value="<?php echo (isset($_POST['other_record_volume_offer'])) ? $_POST['other_record_volume_offer'] : get_user_meta($current_user->ID, 'other_record_volume_offer', true) ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="other_record_volume_offer">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="other_record_more_offer" id="other_record_more_offer" placeholder="Vairāk"><?php echo (isset($_POST['other_record_more_offer'])) ? $_POST['other_record_more_offer'] : get_user_meta($current_user->ID, 'other_record_more_offer', true) ?></textarea>
        </div>

    </div>
</div>

<?php
$outsourced_profesion = get_field_object('field_6345c2093221c')['choices'];
// foreach ($_POST['outsourced_proffesion'] as $outsourced_proffesion_selection)
// echo $outsourced_proffesion_selection
?>

<style>
    .site-wrap .um-field-checkbox .checkbox-fields>div.um-field-area:last-child {
        width: 100%;
    }

    label.um-field-checkbox:not(.active) .checkbox-fields,
    label.um-field-checkbox:not(.active)+.checkbox-fields {
        display: none !important;
    }

    .site-wrap label.um-field-checkbox .checkbox-fields,
    .site-wrap label.um-field-checkbox+.checkbox-fields {
        margin-top: 13px;
        margin-bottom: 13px;
    }

    .site-wrap .um-field-competences_and_consultations_offer input[type=text] {
        float: none;
    }

    .site-wrap label.um-field-checkbox .checkbox-fields.checkbox-fields-column input {
        margin-bottom: 16px !important;
    }

    .site-wrap .checkbox-fields--group .um-field-multiselect .um-field-area:first-child {
        float: left;
    }

    .site-wrap .checkbox-fields--group .um-field-area:nth-child(2) {
        float: right;
    }

    .site-wrap .checkbox-fields--group .um-field-area:not(:last-child),
    .site-wrap .checkbox-fields--group .um-field-multiselect .um-field-area:first-child {
        width: 48%;
    }

    .site-wrap .checkbox-fields--group {
        display: block !important;
    }

    .site-wrap .checkbox-fields--group .um-field-area:last-child,
    .site-wrap .um-field-real_estate .um-field-checkbox .checkbox-fields>div:last-child,
    .site-wrap .um-field-real_estate_offer .um-field-checkbox .checkbox-fields>div:last-child {
        display: inline-block;
        margin-top: 8px;
        padding-top: 6px;
        width: 100% !important;
        padding-left: 0 !important;
    }

    .site-wrap .um-field-checkbox .checkbox-fields .um-field-multiselect {
        margin-bottom: 0;
    }

    .site-wrap .um-field-competences_and_consultations_offer .checkbox-fields {
        display: block;
    }

    .site-wrap .um-field-competences_and_consultations_offer .checkbox-fields .um-field-area:first-child {
        width: 100%;
        padding-right: 0;
    }

    .site-wrap .checkbox-fields--group .um-field-multiselect .um-field-area:first-child {
        margin-top: 0;
        padding-top: 0;
        width: 100%;
    }

    .site-wrap .checkbox-fields .um-field-area:last-child textarea {
        padding-left: 20px !important;
        padding-top: 12px !important;
    }

    @media (max-width: 1099.98px) {
        .site-wrap .checkbox-fields--group .um-field-area:not(:last-child) {
            width: 100%;
        }

        .site-wrap .checkbox-fields.checkbox-fields-column textarea,
        .site-wrap .checkbox-fields.checkbox-fields--group textarea {
            padding-left: 23px !important;
        }

        .site-wrap label.um-field-checkbox .checkbox-fields,
        .site-wrap label.um-field-checkbox+.checkbox-fields {
            margin-top: 4px;
            margin-bottom: 24px;
        }

        .site-wrap .um-field-checkbox .checkbox-fields>div:last-child {
            margin-top: 5px;
        }


        .site-wrap .um-field-financial_resources .checkbox-fields .um-field-area:last-child textarea,
        .site-wrap .um-field-financial_resources_offer .checkbox-fields .um-field-area:last-child textarea {
            height: 51px !important;
        }

        .site-wrap .checkbox-fields.checkbox-fields--group .um-field-area:last-child textarea,
        .site-wrap .checkbox-fields.checkbox-fields-column .um-field-area:last-child textarea {
            height: 100px !important;
        }

        .site-wrap label.um-field-checkbox .checkbox-fields.checkbox-fields-column input {
            margin-bottom: 6px !important;
        }

    }

    @media (min-width: 1100px) {
        .site-wrap .um-field-checkbox:is(.um-field-movable_property, .um-field-movable_property_offer, .um-field-financial_resources, .um-field-financial_resources_offer) .checkbox-fields>div.um-field-area:last-child {
            padding-right: 8px;
        }

        .site-wrap .um-field-checkbox:not(.um-field-competences_and_consultations_offer)>.um-field-area .checkbox-fields>div.um-field-area:first-child {
            width: 100%;
            max-width: 304px;
        }

        .site-wrap .um-field-checkbox.um-field-financial_resources_offer>.um-field-area .checkbox-fields>div.um-field-area:first-child,
        .site-wrap .um-field-checkbox.um-field-financial_resources>.um-field-area .checkbox-fields>div.um-field-area:first-child {
            margin-bottom: 14px;
            max-width: 284px;
        }

        .site-wrap .um-field-checkbox.um-field-human_resources .um-field-multiselect,
        .site-wrap .um-field-checkbox.um-field-human_resources .um-field-text,
        .site-wrap .um-field-checkbox.um-field-human_resources_offer .um-field-multiselect,
        .site-wrap .um-field-checkbox.um-field-human_resources_offer .um-field-text {
            width: 48%;
        }

        .site-wrap .um-field-checkbox.um-field-human_resources .um-field-multiselect,
        .site-wrap .um-field-checkbox.um-field-human_resources_offer .um-field-multiselect {
            float: left;
        }

        .site-wrap .um-field-checkbox.um-field-human_resources .um-field-text,
        .site-wrap .um-field-checkbox.um-field-human_resources_offer .um-field-text {
            float: right;
        }
    }
</style>

<script>
    jQuery(document).ready(function() {
        // if (jQuery(".um").length) {
        jQuery(".um-field-movable_property .um-field-checkbox").each(function(index) {
            let inputElement = jQuery(".js-for-checkbox .checkbox-fields").eq(0).detach();
            jQuery(this).append(inputElement);
        });

        jQuery(".um-field-movable_property_offer .um-field-checkbox").each(function(index) {
            let inputElement = jQuery(".js-for-checkbox-offer .checkbox-fields").eq(0).detach();
            jQuery(this).append(inputElement);
        });

        jQuery(".um-field-real_estate .um-field-checkbox").each(function(index) {
            let inputElement = jQuery(".js-for-checkbox-second .checkbox-fields")
                .eq(0)
                .detach();

            jQuery(this).append(inputElement);
        });

        jQuery(".um-field-real_estate_offer .um-field-checkbox").each(function(index) {
            let inputElement = jQuery(".js-for-checkbox-second-offer .checkbox-fields")
                .eq(0)
                .detach();

            jQuery(this).append(inputElement);
        });

        jQuery(".um-field-financial_resources .um-field-checkbox").each(function(index) {
            let inputElement = jQuery(".js-for-checkbox-third .checkbox-fields")
                .eq(0)
                .detach();

            jQuery(this).addClass("um-field-checkbox-right");
            jQuery(this).after(inputElement);
        });

        jQuery(".um-field-financial_resources_offer .um-field-checkbox").each(function(index) {
            let inputElement = jQuery(".js-for-checkbox-third-offer .checkbox-fields")
                .eq(0)
                .detach();

            jQuery(this).addClass("um-field-checkbox-right");
            jQuery(this).after(inputElement);
        });

        jQuery(".um-field-competences_and_consultations .um-field-checkbox").each(
            function(index) {
                let inputElement = jQuery(".js-for-checkbox-five .checkbox-fields")
                    .eq(0)
                    .detach();
                jQuery(this).append(inputElement);
            }
        );

        jQuery(".um-field-competences_and_consultations_offer .um-field-checkbox").each(
            function(index) {
                let inputElement = jQuery(".js-for-checkbox-five-offer .checkbox-fields")
                    .eq(0)
                    .detach();
                jQuery(this).append(inputElement);
            }
        );

        jQuery(".um-field-human_resources .um-field-checkbox").each(function(index) {
            let inputElement = $(".js-for-checkbox-four .checkbox-fields")
                .eq(0)
                .detach();
            jQuery(this).after(inputElement);
        });
        jQuery(".um-field-human_resources_offer .um-field-checkbox").each(function(index) {
            let inputElement = $(".js-for-checkbox-four-offer .checkbox-fields")
                .eq(0)
                .detach();
            jQuery(this).after(inputElement);
        });
        // }
    })
</script>