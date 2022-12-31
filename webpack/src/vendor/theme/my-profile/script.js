$(document).ready(function () {
  var $d = $(document);
  if ($(".change-passform-form").length) {
    let changePassBtn = $("#um_account_submit_password");
    changePassBtn.addClass("btn w-100").removeClass("um-button");
    changePassBtn.parent().addClass("w-100");
    $("#confirm_user_password").attr("placeholder", "");
  }

  function conditionalCheckboxes(selectRoleElement) {
    let $getService = $(".js-get-service");
    let $offerService = $(".js-offer-service");
    if ($(selectRoleElement).val() == "um_nenoteikta") {
      $getService.addClass("d-none");
      $offerService.addClass("d-none");

      $getService.prev(".um-row-heading").addClass("d-none");
      $offerService.prev(".um-row-heading").addClass("d-none");
    }

    if ($(selectRoleElement).val() == "um_custom_role_3") {
      $getService.removeClass("d-none");
      $offerService.removeClass("d-none");

      $getService.prev(".um-row-heading").removeClass("d-none");
      $offerService.prev(".um-row-heading").removeClass("d-none");
    }

    if ($(selectRoleElement).val() == "um_custom_role_1") {
      $getService.removeClass("d-none");
      $offerService.addClass("d-none");

      $getService.prev(".um-row-heading").removeClass("d-none");
      $offerService.prev(".um-row-heading").addClass("d-none");
    }

    if ($(selectRoleElement).val() == "um_custom_role_2") {
      $getService.addClass("d-none");
      $offerService.removeClass("d-none");

      $getService.prev(".um-row-heading").addClass("d-none");
      $offerService.prev(".um-row-heading").removeClass("d-none");
    }
  }

  if ($(".um-button").length) {
    $(".um-button[data-modal=um_upload_single]")
      .addClass("btn w-100")
      .removeClass("um-button");
  }

  if (!$(".um-form form").length) {
    $(".um-form").wrapInner('<form method="post" action=""></form>');
  }
  if ($(".user-image").length) {
    $d.on("click", ".um-finish-upload", function (e) {
      $d.ajaxComplete(function (event, request, settings) {
        setTimeout(() => {
          $(".user-image input.um-button").trigger("click");
        }, 1500);
      });
    });
  }
  $(".um-field-area .um-single-image-preview").prepend(
    '<div class="image-preview"><i class="ic ic--close d-none"></i></div>'
  );

  $d.on("click", ".image-preview .ic--close", function () {
    $(".cancel").trigger("click");
    $(".image-preview").removeAttr("style");
    $(this).addClass("d-none");
    setTimeout(() => {
      $(".user-image input.um-button").trigger("click");
    }, 1500);
  });

  $(".um-field-area .um-single-image-preview img").on("load", function () {
    $(".image-preview").css({
      "background-image": "url(" + $(this).attr("src") + ")",
      "background-size": "cover",
    });

    $(".image-preview .ic--close").removeClass("d-none");
  });

  if ($(".user-image").length) {
    let userImageIcon = $(".user-image > .ic").detach();
    $(".user-image .um-field-label >label").append(userImageIcon);
  }

  /**
   * Place fields to checkboxes
   */

  $(".um-field-movable_property .um-field-checkbox").each(function (index) {
    let inputElement = $(".js-for-checkbox .checkbox-fields").eq(0).detach();
    $(this).append(inputElement);
  });

  $(".um-field-movable_property_offer .um-field-checkbox").each(function (
    index
  ) {
    let inputElement = $(".js-for-checkbox-offer .checkbox-fields")
      .eq(0)
      .detach();
    $(this).append(inputElement);
  });

  $(".um-field-real_estate .um-field-checkbox").each(function (index) {
    let inputElement = $(".js-for-checkbox-second .checkbox-fields")
      .eq(0)
      .detach();

    $(this).append(inputElement);
  });

  $(".um-field-real_estate_offer .um-field-checkbox").each(function (index) {
    let inputElement = $(".js-for-checkbox-second-offer .checkbox-fields")
      .eq(0)
      .detach();

    $(this).append(inputElement);
  });

  $(".um-field-financial_resources .um-field-checkbox").each(function (index) {
    let inputElement = $(".js-for-checkbox-third .checkbox-fields")
      .eq(0)
      .detach();

    $(this).addClass("um-field-checkbox-right");
    $(this).after(inputElement);
  });

  $(".um-field-financial_resources_offer .um-field-checkbox").each(function (
    index
  ) {
    let inputElement = $(".js-for-checkbox-third-offer .checkbox-fields")
      .eq(0)
      .detach();

    $(this).addClass("um-field-checkbox-right");
    $(this).after(inputElement);
  });

  $(".um-field-competences_and_consultations .um-field-checkbox").each(
    function (index) {
      let inputElement = $(".js-for-checkbox-five .checkbox-fields")
        .eq(0)
        .detach();
      $(this).append(inputElement);
    }
  );

  $(".um-field-competences_and_consultations_offer .um-field-checkbox").each(
    function (index) {
      let inputElement = $(".js-for-checkbox-five-offer .checkbox-fields")
        .eq(0)
        .detach();
      $(this).append(inputElement);
    }
  );

  $(".um-field-human_resources .um-field-checkbox").each(function (index) {
    let inputElement = $(".js-for-checkbox-four .checkbox-fields")
      .eq(0)
      .detach();
    $(this).after(inputElement);
  });
  $(".um-field-human_resources_offer .um-field-checkbox").each(function (
    index
  ) {
    let inputElement = $(".js-for-checkbox-four-offer .checkbox-fields")
      .eq(0)
      .detach();
    $(this).after(inputElement);
  });

  $(".um-field-human_resources .um-field-checkbox").each(function (index) {
    let firstElement = $(".js-for-checkbox-four .um-field-multiselect")
      .eq(0)
      .detach();
    let secondElement = $(".js-for-checkbox-four .um-field-text")
      .eq(0)
      .detach();
    let thirdElement = $(".js-for-checkbox-four .um-field-textarea")
      .eq(0)
      .detach();
    $(this).after(thirdElement);
    $(this).after(secondElement);
    $(this).after(firstElement);
  });
  $(".um-field-human_resources_offer .um-field-checkbox").each(function (
    index
  ) {
    let firstElement = $(".js-for-checkbox-four-offer .um-field-multiselect")
      .eq(0)
      .detach();
    let secondElement = $(".js-for-checkbox-four-offer .um-field-text")
      .eq(0)
      .detach();
    let thirdElement = $(".js-for-checkbox-four-offer .um-field-textarea")
      .eq(0)
      .detach();
    $(this).after(thirdElement);
    $(this).after(secondElement);
    $(this).after(firstElement);
  });

  if ($(".col-lg-9 > div:not(.main-info) .um-button").length) {
    $(".um-button")
      .parent(".um-center")
      .addClass("d-lg-flex align-items-center justify-content-between")
      .append('<a class="js-remove-link" href="#">Dzēst profilu</a>');
    $(".um-button").addClass("btn w-100").removeClass("um-button");

    $(".um-center input[type=submit]").on("click", function (e) {
      e.preventDefault();
      $(".um-field-activity_format select option").each(function () {
        $(this).val($(this).text());
      });
      setTimeout(() => {
        $(".um-form form").submit();
      }, 100);
    });
  }

  $(window).on("load", function () {
    if ($(".change-profile-form").length) {
      let imageInputFile = $(
        ".um-field-image > input[name*=register_profile_photo-]"
      );
      imageInputFile.attr("data-name", imageInputFile.attr("id"));
      imageInputFile.attr("name", "register_profile_photo-disabled");
      $d.on("click", ".um-finish-upload", function (e) {
        $d.ajaxComplete(function (event, request, settings) {
          setTimeout(() => {
            imageInputFile.attr("name", imageInputFile.data("name"));
          }, 1500);
        });
      });

      $(".um-field-role_select select").on("select2:select", function () {
        conditionalCheckboxes(this);
      });

      conditionalCheckboxes(".um-field-role_select select");
    }
  });

  //   CUSTOM checkbox

  $(".um-field-register_profile_photo .um-field-label label").append(
    $(".is-avatar-visible").detach()
  );
  $(".um-field-profile_name .um-field-label label").append(
    $(".is-username-visible").detach()
  );
  $(".um-field-phone_number .um-field-label label").append(
    $(".is-phone-visible").detach()
  );
  $(".um-field-activity_format .um-field-label label").append(
    $(".is_darbibas-formats-visible").detach()
  );
  $(".um-field-user_url .um-field-label label").append(
    $(".is-website-visible").detach()
  );
  $(".um-field-role_select .um-field-label label").append(
    $(".is-loma-programma-visible").detach()
  );
  $(".um-field-description-scope .um-field-label label").append(
    $(".is-apraksts-darbibas-joma-visible").detach()
  );
  $(".um-field-user_email .um-field-label label").append(
    $(".is-email-visible").detach()
  );

  $d.on("click", ".js-remove-link", function (e) {
    e.preventDefault();
    $(".js-remove-popup").addClass("d-flex").removeClass("d-none");
  });

  $(".js-remove-popup a, .message .ic--close").on("click", function (e) {
    e.preventDefault();
    $(".js-remove-popup").addClass("d-none").removeClass("d-flex");
  });

  $(".js-remove-post-popup a, .message .ic--close").on("click", function (e) {
    e.preventDefault();
    $(".js-remove-post-popup").addClass("d-none").removeClass("d-flex");
  });

  $(".js-remove-ad").on("click", function (e) {
    e.preventDefault();
    $(".remove-post-form input[name=delete_post_id]").val(
      $(this).data("post-id")
    );
    $(".js-remove-post-popup").addClass("d-flex").removeClass("d-none");
  });

  $(".js-post-deletion").on("click", function (e) {
    e.preventDefault();
    $(".remove-post-form input[type=submit]").trigger("click");
  });
});
