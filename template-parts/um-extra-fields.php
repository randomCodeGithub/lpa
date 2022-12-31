<!-- js-for-checkbox
Daudzums / Veids -->

<?php if (isset($_POST['register_profile_photo-526']) && !empty($_POST['register_profile_photo-526'])) : ?>
    <input type="hidden" name="image_link" value="<?php echo home_url() . "/wp-content/uploads/ultimatemember/temp/" . $_POST['register_profile_photo-526'] ?>">
<?php endif ?>
<input type="hidden" name="is_avatar_visible" value="1">
<input type="hidden" name="is_username_visible" value="1">
<input type="hidden" name="is_email_visible" value="1">
<input type="hidden" name="is_phone_visible" value="1">
<input type="hidden" name="is_darbibas_formats_visible" value="1">
<input type="hidden" name="is_website_visible" value="1">
<input type="hidden" name="is_loma_programma_visible" value="1">
<input type="hidden" name="is_apraksts_darbibas_joma_visible" value="1">
<div class="js-for-checkbox d-none">
    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="computer_amount_text-526" id="computer_amount_text-526" value="<?php if (isset($_POST['computer_amount_text-526'])) echo $_POST['computer_amount_text-526'] ?>" placeholder="Daudzums" data-validate="" data-key="computer_amount_text">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="computer_type_text-526" id="computer_type_text-526" value="<?php if (isset($_POST['computer_type_text-526'])) echo $_POST['computer_type_text-526'] ?>" placeholder="Veids" data-validate="" data-key="computer_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="electrical_devices_amount_text-526" id="electrical_devices_amount_text-526" value="<?php if (isset($_POST['electrical_devices_amount_text-526'])) echo $_POST['electrical_devices_amount_text-526'] ?>" placeholder="Daudzums" data-validate="" data-key="electrical_devices_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="electrical_devices_type_text-526" id="electrical_devices_type_text-526" value="<?php if (isset($_POST['electrical_devices_type_text-526'])) echo $_POST['electrical_devices_type_text-526'] ?>" placeholder="Veids" data-validate="" data-key="electrical_devices_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="furniture_amount_text-526" id="furniture_amount_text-526" value="<?php if (isset($_POST['furniture_amount_text-526'])) echo $_POST['furniture_amount_text-526'] ?>" placeholder="Daudzums" data-validate="" data-key="furniture_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="furniture_type_text-526" id="furniture_type_text-526" value="<?php if (isset($_POST['furniture_type_text-526'])) echo $_POST['furniture_type_text-526'] ?>" placeholder="Veids" data-validate="" data-key="furniture_type_text">
        </div>

    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outdoor_activities_amount_items-526" id="outdoor_activities_amount_items-526" value="<?php if (isset($_POST['outdoor_activities_amount_items-526'])) echo $_POST['outdoor_activities_amount_items-526'] ?>" placeholder="Daudzums" data-validate="" data-key="outdoor_activities_amount_items">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outdoor_activities_type_items-526" id="outdoor_activities_type_items-526" value="<?php if (isset($_POST['outdoor_activities_type_items-526'])) echo $_POST['outdoor_activities_type_items-526'] ?>" placeholder="Veids" data-validate="" data-key="outdoor_activities_type_items">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="vehicles_amount-526" id="vehicles_amount-526" value="<?php if (isset($_POST['vehicles_amount-526'])) echo $_POST['vehicles_amount-526'] ?>" placeholder="Daudzums" data-validate="" data-key="vehicles_amount">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="vehicles_type-526" id="vehicles_type-526" value="<?php if (isset($_POST['vehicles_type-526'])) echo $_POST['vehicles_type-526'] ?>" placeholder="Veids" data-validate="" data-key="vehicles_type">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="digital_content_amount_text-526" id="digital_content_amount_text-526" value="<?php if (isset($_POST['digital_content_amount_text-526'])) echo $_POST['digital_content_amount_text-526'] ?>" placeholder="Daudzums" data-validate="" data-key="digital_content_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="digital_content_type_text-526" id="digital_content_type_text-526" value="<?php if (isset($_POST['digital_content_type_text-526'])) echo $_POST['digital_content_type_text-526'] ?>" placeholder="Veids" data-validate="" data-key="digital_content_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="food_amount_text-526" id="food_amount_text-526" value="<?php if (isset($_POST['food_amount_text-526'])) echo $_POST['food_amount_text-526'] ?>" placeholder="Daudzums" data-validate="" data-key="food_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="food_type_text-526" id="food_type_text-526" value="<?php if (isset($_POST['food_type_text-526'])) echo $_POST['food_type_text-526'] ?>" placeholder="Veids" data-validate="" data-key="food_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="clothes_amount_text-526" id="clothes_amount_text-526" value="<?php if (isset($_POST['clothes_amount_text-526'])) echo $_POST['clothes_amount_text-526'] ?>" placeholder="Daudzums" data-validate="" data-key="clothes_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="clothes_type_text-526" id="clothes_type_text-526" value="<?php if (isset($_POST['clothes_type_text-526'])) echo $_POST['clothes_type_text-526'] ?>" placeholder="Veids" data-validate="" data-key="clothes_type_text">
        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="print_materrial_amount_text-526" id="print_materrial_amount_text-526" value="<?php if (isset($_POST['print_materrial_amount_text-526'])) echo $_POST['print_materrial_amount_text-526'] ?>" placeholder="Daudzums" data-validate="" data-key="print_materrial_amount_text">

        </div>
        <div class="um-field-area"><input autocomplete="off" class="um-form-field valid not-required " type="text" name="print_materrial_type_text-526" id="print_materrial_type_text-526" value="<?php if (isset($_POST['print_materrial_type_text-526'])) echo $_POST['print_materrial_type_text-526'] ?>" placeholder="Veids" data-validate="" data-key="print_materrial_type_text">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_amount_text-526" id="other_amount_text-526" value="<?php if (isset($_POST['other_amount_text-526'])) echo $_POST['other_amount_text-526'] ?>" placeholder="Daudzums" data-validate="" data-key="other_amount_text">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_type_text-526" id="other_type_text-526" value="<?php if (isset($_POST['other_type_text-526'])) echo $_POST['other_type_text-526'] ?>" placeholder="Veids" data-validate="" data-key="other_type_text">
        </div>
    </div>

</div>

<!-- js-for-checkbox-offer
Daudzums / Veids -->
<div class="js-for-checkbox-offer d-none">

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="computer_amount_text_offer-526" id="computer_amount_text_offer-526" value="<?php if (isset($_POST['computer_amount_text_offer-526'])) echo $_POST['computer_amount_text_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="computer_amount_text_offer">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="computer_type_text_offer-526" id="computer_type_text_offer-526" value="<?php if (isset($_POST['computer_type_text_offer-526'])) echo $_POST['computer_type_text_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="computer_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="electrical_devices_amount_text_offer-526" id="electrical_devices_amount_text_offer-526" value="<?php if (isset($_POST['electrical_devices_amount_text_offer-526'])) echo $_POST['electrical_devices_amount_text_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="electrical_devices_amount_text_offer">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="electrical_devices_type_text_offer-526" id="electrical_devices_type_text_offer-526" value="<?php if (isset($_POST['electrical_devices_type_text_offer-526'])) echo $_POST['electrical_devices_type_text_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="electrical_devices_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="furniture_amount_text_offer-526" id="furniture_amount_text_offer-526" value="<?php if (isset($_POST['furniture_amount_text_offer-526'])) echo $_POST['furniture_amount_text_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="furniture_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="furniture_type_text_offer-526" id="furniture_type_text_offer-526" value="<?php if (isset($_POST['furniture_type_text_offer-526'])) echo $_POST['furniture_type_text_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="furniture_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outdoor_activities_amount_items_offer-526" id="outdoor_activities_amount_items_offer-526" value="<?php if (isset($_POST['outdoor_activities_amount_items_offer-526'])) echo $_POST['outdoor_activities_amount_items_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="outdoor_activities_amount_items_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outdoor_activities_type_items_offer-526" id="outdoor_activities_type_items_offer-526" value="<?php if (isset($_POST['outdoor_activities_type_items_offer-526'])) echo $_POST['outdoor_activities_type_items_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="outdoor_activities_type_items_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="vehicles_amount_offer-526" id="vehicles_amount_offer-526" value="<?php if (isset($_POST['vehicles_amount_offer-526'])) echo $_POST['vehicles_amount_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="vehicles_amount_offer">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="vehicles_type_offer-526" id="vehicles_type_offer-526" value="<?php if (isset($_POST['vehicles_type_offer-526'])) echo $_POST['vehicles_type_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="vehicles_type_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="digital_content_amount_text_offer-526" id="digital_content_amount_text_offer-526" value="<?php if (isset($_POST['digital_content_amount_text_offer-526'])) echo $_POST['digital_content_amount_text_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="digital_content_amount_text_offer">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="digital_content_type_text_offer-526" id="digital_content_type_text_offer-526" value="<?php if (isset($_POST['digital_content_type_text_offer-526'])) echo $_POST['digital_content_type_text_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="digital_content_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="food_amount_text_offer-526" id="food_amount_text_offer-526" value="<?php if (isset($_POST['food_amount_text_offer-526'])) echo $_POST['food_amount_text_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="food_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="food_type_text_offer-526" id="food_type_text_offer-526" value="<?php if (isset($_POST['food_type_text_offer-526'])) echo $_POST['food_type_text_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="food_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="clothes_amount_text_offer-526" id="clothes_amount_text_offer-526" value="<?php if (isset($_POST['clothes_amount_text_offer-526'])) echo $_POST['clothes_amount_text_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="clothes_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="clothes_type_text_offer-526" id="clothes_type_text_offer-526" value="<?php if (isset($_POST['clothes_type_text_offer-526'])) echo $_POST['clothes_type_text_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="clothes_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="print_materrial_amount_text_offer-526" id="print_materrial_amount_text_offer-526" value="<?php if (isset($_POST['print_materrial_amount_text_offer-526'])) echo $_POST['print_materrial_amount_text_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="print_materrial_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="print_materrial_type_text_offer-526" id="print_materrial_type_text_offer-526" value="<?php if (isset($_POST['print_materrial_type_text_offer-526'])) echo $_POST['print_materrial_type_text_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="print_materrial_type_text_offer">

        </div>
    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_amount_text_offer-526" id="other_amount_text_offer-526" value="<?php if (isset($_POST['other_amount_text_offer-526'])) echo $_POST['other_amount_text_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="other_amount_text_offer">

        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_type_text_offer-526" id="other_type_text_offer-526" value="<?php if (isset($_POST['other_type_text_offer-526'])) echo $_POST['other_type_text_offer-526'] ?>" placeholder="Veids" data-validate="" data-key="other_type_text_offer">

        </div>
    </div>

</div>

<!-- js-for-checkbox-second
Platba / Vairāk info -->
<div class="js-for-checkbox-second d-none">
    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="premises_area_text-526" id="premises_area_text-526" value="<?php if (isset($_POST['premises_area_text-526'])) echo $_POST['premises_area_text-526'] ?>" placeholder="Platība" data-validate="" data-key="premises_area_text">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="premises_more_text" id="premises_more_text" placeholder="Vairāk info"><?php if (isset($_POST['premises_more_text'])) echo $_POST['premises_more_text'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="land_area_text-526" id="land_area_text-526" value="<?php if (isset($_POST['land_area_text-526'])) echo $_POST['land_area_text-526'] ?>" placeholder="Platība" data-validate="" data-key="land_area_text">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="land_more_text" id="land_more_text" placeholder="Vairāk info"><?php if (isset($_POST['land_more_text'])) echo $_POST['land_more_text'] ?></textarea>
        </div>

    </div>
</div>

<!-- js-for-checkbox-second-offer
Platība / Vairāk info -->
<div class="js-for-checkbox-second-offer d-none">
    <div class="checkbox-fields">
        <div class="um-field-area"><input autocomplete="off" class="um-form-field valid not-required " type="text" name="premises_area_text_offer-526" id="premises_area_text_offer-526" value="<?php if (isset($_POST['premises_area_text_offer-526'])) echo $_POST['premises_area_text_offer-526'] ?>" placeholder="Platība" data-validate="" data-key="premises_area_text_offer">

        </div>
        <div class="um-field-area"><textarea style="height: 100px;" class="um-form-field valid not-required " name="premises_more_text_offer" id="premises_more_text_offer" placeholder="Vairāk info"><?php if (isset($_POST['premises_more_text_offer'])) echo $_POST['premises_more_text_offer'] ?></textarea></div>

    </div>

    <div class="checkbox-fields">
        <div class="um-field-area"><input autocomplete="off" class="um-form-field valid not-required " type="text" name="land_area_text_offer-526" id="land_area_text_offer-526" value="<?php if (isset($_POST['land_area_text_offer-526'])) echo $_POST['land_area_text_offer-526'] ?>" placeholder="Platība" data-validate="" data-key="land_area_text_offer">

        </div>
        <div class="um-field-area"><textarea style="height: 100px;" class="um-form-field valid not-required " name="land_more_text_offer" id="land_more_text_offer" placeholder="Vairāk info"><?php if (isset($_POST['land_more_text_offer'])) echo $_POST['land_more_text_offer'] ?></textarea></div>

    </div>

</div>

<!-- js-for-checkbox-third
Daudzums / Vairāk info -->
<div class="js-for-checkbox-third d-none">
    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="financial_resources_amount_text-526" id="financial_resources_amount_text-526" value="<?php if (isset($_POST['financial_resources_amount_text-526'])) echo $_POST['financial_resources_amount_text-526'] ?>" placeholder="Daudzums" data-validate="" data-key="financial_resources_amount_text">

        </div>

        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="financial_resources_more_text-526" id="financial_resources_more_text-526" value="<?php if (isset($_POST['financial_resources_more_text-526'])) echo $_POST['financial_resources_more_text-526'] ?>" placeholder="Vairāk info" data-validate="" data-key="financial_resources_more_text">

        </div>
    </div>
</div>

<!-- js-for-checkbox-third-offer
Daudzums / Vairāk info -->
<div class="js-for-checkbox-third-offer d-none">
    <div class="checkbox-fields">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="financial_resources_amount_text_offer-526" id="financial_resources_amount_text_offer-526" value="<?php if (isset($_POST['financial_resources_amount_text_offer-526'])) echo $_POST['financial_resources_amount_text_offer-526'] ?>" placeholder="Daudzums" data-validate="" data-key="financial_resources_amount_text_offer">
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="financial_resources_more_text_offer-526" id="financial_resources_more_text_offer-526" value="<?php if (isset($_POST['financial_resources_more_text_offer-526'])) echo $_POST['financial_resources_more_text_offer-526'] ?>" placeholder="Vairāk info" data-validate="" data-key="financial_resources_more_text_offer">

        </div>
    </div>
</div>

<!-- js-for-checkbox-five -->
<!-- Apjoms/h skaits / Vairāk -->
<div class="js-for-checkbox-five d-none">

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="training_volume-526" id="training_volume-526" value="<?php if (isset($_POST['training_volume-526'])) echo $_POST['training_volume-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="training_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="training_more" id="training_more" placeholder="Vairāk info"><?php if (isset($_POST['training_more'])) echo $_POST['training_more'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="consultations_of_psychologists_volume-526" id="consultations_of_psychologists_volume-526" value="<?php if (isset($_POST['consultations_of_psychologists_volume-526'])) echo $_POST['consultations_of_psychologists_volume-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="consultations_of_psychologists_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="consultations_of_psychologists_more" id="consultations_of_psychologists_more" placeholder="Vairāk info"><?php if (isset($_POST['consultations_of_psychologists_more'])) echo $_POST['consultations_of_psychologists_more'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="legal_advice_volume-526" id="legal_advice_volume-526" value="<?php if (isset($_POST['legal_advice_volume-526'])) echo $_POST['legal_advice_volume-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="legal_advice_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="legal_advice_more" id="legal_advice_more" placeholder="Vairāk info"><?php if (isset($_POST['legal_advice_more'])) echo $_POST['legal_advice_more'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="accounting_consulting_volume-526" id="accounting_consulting_volume-526" value="<?php if (isset($_POST['accounting_consulting_volume-526'])) echo $_POST['accounting_consulting_volume-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="accounting_consulting_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="accounting_consulting_more" id="accounting_consulting_more" placeholder="Vairāk info"><?php if (isset($_POST['accounting_consulting_more'])) echo $_POST['accounting_consulting_more'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="research_support_volume-526" id="research_support_volume-526" value="<?php if (isset($_POST['research_support_volume-526'])) echo $_POST['research_support_volume-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="research_support_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="research_support_more" id="research_support_more" placeholder="Vairāk info"><?php if (isset($_POST['research_support_more'])) echo $_POST['research_support_more'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="it_support_volume-526" id="it_support_volume-526" value="<?php if (isset($_POST['it_support_volume-526'])) echo $_POST['it_support_volume-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="it_support_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="it_support_more" id="it_support_more" placeholder="Vairāk info"><?php if (isset($_POST['it_support_more'])) echo $_POST['it_support_more'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="foto_video_design_volume-526" id="foto_video_design_volume-526" value="<?php if (isset($_POST['foto_video_design_volume-526'])) echo $_POST['foto_video_design_volume-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="foto_video_design_volume">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="foto_video_design_more" id="foto_video_design_more" placeholder="Vairāk info"><?php if (isset($_POST['foto_video_design_more'])) echo $_POST['foto_video_design_more'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_record_volume-526" id="other_record_volume-526" value="<?php if (isset($_POST['other_record_volume-526'])) echo $_POST['other_record_volume-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="other_record_volume">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="other_record_more" id="other_record_more" placeholder="Vairāk info"><?php if (isset($_POST['other_record_more'])) echo $_POST['other_record_more'] ?></textarea>
        </div>

    </div>

</div>

<!-- js-for-checkbox-five-offer -->
<!-- Apjoms/h skaits / Vairāk -->
<div class="js-for-checkbox-five-offer d-none">

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="training_volume_offer-526" id="training_volume_offer-526" value="<?php if (isset($_POST['training_volume_offer-526'])) echo $_POST['training_volume_offer-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="training_volume_offer">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="training_more_offer" id="training_more_offer" placeholder="Vairāk info"><?php if (isset($_POST['training_more_offer'])) echo $_POST['training_more_offer'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="consultations_of_psychologists_volume_offer-526" id="consultations_of_psychologists_volume_offer-526" value="<?php if (isset($_POST['consultations_of_psychologists_volume_offer-526'])) echo $_POST['consultations_of_psychologists_volume_offer-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="consultations_of_psychologists_volume_offer">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="consultations_of_psychologists_more_offer" id="consultations_of_psychologists_more_offer" placeholder="Vairāk info"><?php if (isset($_POST['consultations_of_psychologists_more_offer'])) echo $_POST['consultations_of_psychologists_more_offer'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="legal_advice_volume_offer-526" id="legal_advice_volume_offer-526" value="<?php if (isset($_POST['legal_advice_volume_offer-526'])) echo $_POST['legal_advice_volume_offer-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="legal_advice_volume_offer">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="legal_advice_more_offer" id="legal_advice_more_offer" placeholder="Vairāk info"><?php if (isset($_POST['legal_advice_more_offer'])) echo $_POST['legal_advice_more_offer'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="accounting_consulting_volume_offer-526" id="accounting_consulting_volume_offer-526" value="<?php if (isset($_POST['accounting_consulting_volume_offer-526'])) echo $_POST['accounting_consulting_volume_offer-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="accounting_consulting_volume_offer">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="accounting_consulting_more_offer" id="accounting_consulting_more_offer" placeholder="Vairāk info"><?php if (isset($_POST['accounting_consulting_more_offer'])) echo $_POST['accounting_consulting_more_offer'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="research_support_volume_offer-526" id="research_support_volume_offer-526" value="<?php if (isset($_POST['research_support_volume_offer-526'])) echo $_POST['research_support_volume_offer-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="research_support_volume_offer">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="research_support_more_offer" id="research_support_more_offer" placeholder="Vairāk info"><?php if (isset($_POST['research_support_more_offer'])) echo $_POST['research_support_more_offer'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="it_support_volume_offer-526" id="it_support_volume_offer-526" value="<?php if (isset($_POST['it_support_volume_offer-526'])) echo $_POST['it_support_volume_offer-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="it_support_volume_offer">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="it_support_more_offer" id="it_support_more_offer" placeholder="Vairāk info"><?php if (isset($_POST['it_support_more_offer'])) echo $_POST['it_support_more_offer'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="foto_video_design_volume_offer-526" id="foto_video_design_volume_offer-526" value="<?php if (isset($_POST['foto_video_design_volume_offer-526'])) echo $_POST['foto_video_design_volume_offer-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="foto_video_design_volume_offer">

        </div>
        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="foto_video_design_more_offer" id="foto_video_design_more_offer" placeholder="Vairāk info"><?php if (isset($_POST['foto_video_design_more_offer'])) echo $_POST['foto_video_design_more_offer'] ?></textarea>
        </div>

    </div>

    <div class="checkbox-fields checkbox-fields-column">
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="other_record_volume_offer-526" id="other_record_volume_offer-526" value="<?php if (isset($_POST['other_record_volume_offer-526'])) echo $_POST['other_record_volume_offer-526'] ?>" placeholder="Apjoms/h skaits" data-validate="" data-key="other_record_volume_offer">

        </div>

        <div class="um-field-area">
            <textarea style="height: 100px;" class="um-form-field valid not-required " name="other_record_more_offer" id="other_record_more_offer" placeholder="Vairāk info"><?php if (isset($_POST['other_record_more_offer'])) echo $_POST['other_record_more_offer'] ?></textarea>
        </div>

    </div>
</div>

<?php
$outsourced_profesion = get_field_object('field_6345c2093221c')['choices'];
// foreach ($_POST['outsourced_proffesion'] as $outsourced_proffesion_selection)
// echo $outsourced_proffesion_selection
?>

<!-- js-for-checkbox-four -->
<div class="js-for-checkbox-four d-none">
    <div class="checkbox-fields checkbox-fields--group">

        <div class="um-field um-field-multiselect um-field-outsourced_proffesion" data-key="outsourced_proffesion" style="padding-top: 0;">
            <div class="um-field-area">
                <select multiple="" name="outsourced_proffesion[]" id="outsourced_proffesion" data-maxsize="0" data-validate="" data-key="outsourced_proffesion" class="um-form-field valid not-required um-s1 um-user-keyword_0 select2-hidden-accessible" style="width: 100%; display: block;" data-placeholder="Profesija" data-select2-id="outsourced_proffesion" tabindex="-1" aria-hidden="true">
                    <option value=""></option>
                    <?php
                    foreach ($outsourced_profesion as $k => $v) :
                    ?>
                        <option value="<?php echo $k ?>" <?php if (isset($_POST['outsourced_proffesion']) && in_array($k, $_POST['outsourced_proffesion'])) echo 'selected' ?>><?php echo $v ?></option>
                    <?php
                    endforeach; ?>
                </select>
            </div>
        </div>

        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outsourced_load-526" id="outsourced_load-526" value="<?php if (isset($_POST['outsourced_load-526'])) echo $_POST['outsourced_load-526'] ?>" placeholder="Slodze/h skaits" data-validate="" data-key="outsourced_load">
        </div>

        <div class="um-field-area w-100"><textarea style="height: 100px;" class="um-form-field valid not-required " name="outsourced_more" id="outsourced_more" placeholder="Vairak info"><?php if (isset($_POST['outsourced_more'])) echo $_POST['outsourced_more'] ?></textarea></div>

    </div>

    <div class="checkbox-fields checkbox-fields--group">

        <div class="um-field um-field-multiselect um-field-salaried_employee_profession um-field-multiselect um-field-type_multiselect" data-key="salaried_employee_profession" style="padding-top: 0;">
            <div class="um-field-area  ">
                <select multiple="" name="salaried_employee_profession[]" id="salaried_employee_profession" data-maxsize="0" data-validate="" data-key="salaried_employee_profession" class="um-form-field valid not-required um-s1 um-user-keyword_0 select2-hidden-accessible" style="width: 100%; display: block;" data-placeholder="Profesija" data-select2-id="salaried_employee_profession" tabindex="-1" aria-hidden="true">
                    <option value=""></option>
                    <?php foreach ($outsourced_profesion as $k => $v) :
                    ?>
                        <option value="<?php echo $k ?>" <?php if (isset($_POST['salaried_employee_profession']) && in_array($k, $_POST['salaried_employee_profession'])) echo 'selected' ?>><?php echo $v ?></option>
                    <?php
                    endforeach; ?>
                </select>
            </div>
        </div>
        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="salaried_employee_load-526" id="salaried_employee_load-526" value="<?php if (isset($_POST['salaried_employee_load-526'])) echo $_POST['salaried_employee_load-526'] ?>" placeholder="Slodze/h skaits" data-validate="" data-key="salaried_employee_load">
        </div>

        <div class="um-field-area w-100"><textarea style="height: 100px;" class="um-form-field valid not-required " name="salaried_employee_more" id="salaried_employee_more" placeholder="Vairāk info"><?php if (isset($_POST['salaried_employee_more'])) echo $_POST['salaried_employee_more'] ?></textarea></div>

    </div>

    <div class="checkbox-fields checkbox-fields--group">
        <div class="um-field um-field-multiselect um-field-trainee_profession um-field-multiselect um-field-type_multiselect" data-key="trainee_profession" style="padding-top: 0;">
            <div class="um-field-area  ">
                <select multiple="" name="trainee_profession[]" id="trainee_profession" data-maxsize="0" data-validate="" data-key="trainee_profession" class="um-form-field valid not-required um-s1 um-user-keyword_0 select2-hidden-accessible" style="width: 100%; display: block;" data-placeholder="Profesija" data-select2-id="trainee_profession" tabindex="-1" aria-hidden="true">
                    <option value=""></option>
                    <?php foreach ($outsourced_profesion as $k => $v) :
                    ?>
                        <option value="<?php echo $k ?>" <?php if (isset($_POST['trainee_profession']) && in_array($k, $_POST['trainee_profession'])) echo 'selected' ?>><?php echo $v ?></option>
                    <?php
                    endforeach; ?>
                </select>
            </div>
        </div>

        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="trainee_load-526" id="trainee_load-526" value="<?php if (isset($_POST['trainee_load-526'])) echo $_POST['trainee_load-526'] ?>" placeholder="Slodze/h skaits" data-validate="" data-key="trainee_load">

        </div>

        <div class="um-field-area w-100"><textarea style="height: 100px;" class="um-form-field valid not-required " name="trainee_more" id="trainee_more" placeholder="Vairāk info"><?php if (isset($_POST['trainee_more'])) echo $_POST['trainee_more'] ?></textarea></div>

    </div>

</div>

<!-- js-for-checkbox-four-offer -->

<div class="js-for-checkbox-four-offer d-none">
    <div class="checkbox-fields checkbox-fields--group">

        <div class="um-field um-field-multiselect um-field-outsourced_proffesion_offer um-field-multiselect um-field-type_multiselect" data-key="outsourced_proffesion_offer" style="padding-top: 0;">
            <div class="um-field-area  ">
                <select multiple="" name="outsourced_proffesion_offer[]" id="outsourced_proffesion_offer" data-maxsize="0" data-validate="" data-key="outsourced_proffesion_offer" class="um-form-field valid not-required um-s1 um-user-keyword_0 select2-hidden-accessible" style="width: 100%; display: block;" data-placeholder="Profesija" data-select2-id="outsourced_proffesion_offer" tabindex="-1" aria-hidden="true">
                    <option value=""></option>
                    <?php foreach ($outsourced_profesion as $k => $v) :
                    ?>
                        <option value="<?php echo $k ?>" <?php if (isset($_POST['outsourced_proffesion_offer']) && in_array($k, $_POST['outsourced_proffesion_offer'])) echo 'selected' ?>><?php echo $v ?></option>
                    <?php
                    endforeach; ?>
                </select>
            </div>
        </div>

        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="outsourced_load_offer-526" id="outsourced_load_offer-526" value="<?php if (isset($_POST['outsourced_load_offer-526'])) echo $_POST['outsourced_load_offer-526'] ?>" placeholder="Slodze/h skaits" data-validate="" data-key="outsourced_load_offer">
        </div>

        <div class="um-field-area w-100"><textarea style="height: 100px;" class="um-form-field valid not-required " name="outsourced_more_offer" id="outsourced_more_offer" placeholder="Vairak info"><?php if (isset($_POST['outsourced_more_offer'])) echo $_POST['outsourced_more_offer'] ?></textarea></div>
    </div>

    <div class="checkbox-fields checkbox-fields--group">
        <div class="um-field um-field-multiselect um-field-salaried_employee_profession_offer um-field-multiselect um-field-type_multiselect" data-key="salaried_employee_profession_offer" style="padding-top: 0">
            <div class="um-field-area  ">
                <select multiple="" name="salaried_employee_profession_offer[]" id="salaried_employee_profession_offer" data-maxsize="0" data-validate="" data-key="salaried_employee_profession_offer" class="um-form-field valid not-required um-s1 um-user-keyword_0 select2-hidden-accessible" style="width: 100%; display: block;" data-placeholder="Profesija" data-select2-id="salaried_employee_profession_offer" tabindex="-1" aria-hidden="true">
                    <option value=""></option>
                    <?php foreach ($outsourced_profesion as $k => $v) :
                    ?>
                        <option value="<?php echo $k ?>" <?php if (isset($_POST['salaried_employee_profession_offer']) && in_array($k, $_POST['salaried_employee_profession_offer'])) echo 'selected' ?>><?php echo $v ?></option>
                    <?php
                    endforeach; ?>
                </select>
            </div>
        </div>

        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="salaried_employee_load_offer-526" id="salaried_employee_load_offer-526" value="<?php if (isset($_POST['salaried_employee_load_offer-526'])) echo $_POST['salaried_employee_load_offer-526'] ?>" placeholder="Slodze/h skaits" data-validate="" data-key="salaried_employee_load_offer">
        </div>

        <div class="um-field-area w-100"><textarea style="height: 100px;" class="um-form-field valid not-required " name="salaried_employee_more_offer" id="salaried_employee_more_offer" placeholder="Vairak info"><?php if (isset($_POST['salaried_employee_more_offer'])) echo $_POST['salaried_employee_more_offer'] ?></textarea></div>
    </div>

    <div class="checkbox-fields checkbox-fields--group">
        <div class="um-field um-field-multiselect um-field-trainee_profession_offer um-field-multiselect um-field-type_multiselect" data-key="trainee_profession_offer" style="padding-top: 0px">
            <div class="um-field-area  ">
                <select multiple="" name="trainee_profession_offer[]" id="trainee_profession_offer" data-maxsize="0" data-validate="" data-key="trainee_profession_offer" class="um-form-field valid not-required um-s1 um-user-keyword_0 select2-hidden-accessible" style="width: 100%; display: block;" data-placeholder="Profesija" data-select2-id="trainee_profession_offer" tabindex="-1" aria-hidden="true">
                    <option value=""></option>
                    <?php foreach ($outsourced_profesion as $k => $v) :
                    ?>
                        <option value="<?php echo $k ?>" <?php if (isset($_POST['trainee_profession_offer']) && in_array($k, $_POST['trainee_profession_offer'])) echo 'selected' ?>><?php echo $v ?></option>
                    <?php
                    endforeach; ?>
                </select>
            </div>
        </div>

        <div class="um-field-area">
            <input autocomplete="off" class="um-form-field valid not-required " type="text" name="trainee_load_offer-526" id="trainee_load_offer-526" value="<?php if (isset($_POST['trainee_load_offer-526'])) echo $_POST['trainee_load_offer-526'] ?>" placeholder="Slodze/h skaits" data-validate="" data-key="trainee_load_offer">

        </div>

        <div class="um-field-area w-100"><textarea style="height: 100px;" class="um-form-field valid not-required " name="trainee_more_offer" id="trainee_more_offer" placeholder="Vairak info"><?php if (isset($_POST['trainee_more_offer-526'])) echo $_POST['trainee_more_offer-526'] ?></textarea></div>
    </div>

</div>

<style>
    label.um-field-checkbox:not(.active) .checkbox-fields,
    label.um-field-checkbox:not(.active)+.checkbox-fields {
        display: none !important;
    }

    .site-wrap .um-field-competences_and_consultations_offer input[type=text] {
        float: none;
    }

    .site-wrap label.um-field-checkbox .checkbox-fields,
    .site-wrap label.um-field-checkbox+.checkbox-fields {
        margin-top: 13px;
        margin-bottom: 13px;
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

        .site-wrap .checkbox-fields .um-field-area:last-child textarea {
            height: 150px !important;
        }

        .site-wrap .checkbox-fields.checkbox-fields--group .um-field-area:last-child textarea,
        .site-wrap .checkbox-fields.checkbox-fields-column .um-field-area:last-child textarea {
            height: 100px !important;
        }

        .site-wrap label.um-field-checkbox .checkbox-fields.checkbox-fields-column input {
            margin-bottom: 6px !important;
        }

    }
</style>

<script>
    jQuery(document).ready(function() {
        if (jQuery(".um-526").length) {
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
        }
    })
</script>