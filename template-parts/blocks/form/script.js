$(document).ready(function () {
  var $d = $(document);

  $("#role").on("select2:select", function (e) {
    let umRowElement = $(".um-row");
    umRowElement.each(function (index) {
      $(this)
        .prev(".um-row-heading")
        .addClass($(this).height() == 0 && "d-none");
      $(this)
        .prev(".um-row-heading")
        .removeClass($(this).height() > 0 && "d-none");
    });
  });

  /**
   * Place fields to checkboxes
   */
  /**
   * Login
   */
  if ($(".um-login").length) {
    let resetPasswordElement = $(".um-link-alt").detach();
    let rememberMeElement = $(".um-field-checkbox");
    let loginBtn = $(".um-form .um-left .um-button");
    let registrationBtn = $(".um-form .um-right .um-button");
    rememberMeElement.after(resetPasswordElement);
    rememberMeElement.parent().addClass("d-flex justify-content-between");
    loginBtn.addClass("btn w-100").removeClass("um-button");
    loginBtn.after('<p class="text-center">vēl neesi reģistrējies?</p>');
    registrationBtn.addClass("btn w-100 btn--white").removeClass("um-button");
  }
  /**
   * Register
   */
  if ($(".um-register").length || $(".um-password").length) {
    let submitBtn = $(".um-form .um-center .um-button");
    submitBtn.addClass("btn w-100").removeClass("um-button");
  }

  if ($(".um-register").length) {
    let imageUploadBtn = $("a[data-modal='um_upload_single']");
    imageUploadBtn.addClass("btn w-100").removeClass("um-button");

    setTimeout(() => {
      $(".b--form .um-register").css("max-width", "1366px");
    }, 1000);

    let umRowElement = $(".um-row");
    umRowElement.each(function (index) {
      $(this)
        .prev(".um-row-heading")
        .addClass($(this).height() == 0 && "d-none");
      $(this)
        .prev(".um-row-heading")
        .removeClass($(this).height() > 0 && "d-none");
    });

    $(
      '.b--form .um-register div[class*="um-field-noteikums_"] .um-field-checkbox-option'
    ).each(function () {
      let checkboxText = $(this).text();
      if (checkboxText.includes("[")) {
        let url = checkboxText.substring(
          checkboxText.indexOf("[") + 1,
          checkboxText.lastIndexOf("]")
        );
        let newCheckboxText = checkboxText.replace(/ *\[[^)]*\] */g, "");
        $(this).html(
          newCheckboxText +
            '<a target="_blank" href="' +
            url +
            '"><span class="ic ic--link"></span></a>'
        );
      }
      let $fieldError = $(this).parent().parent().parent().find(".um-field-error");
      if($fieldError.length) {
        let errorText = $fieldError.text();
        let newErrorText = "Šis lauks " + errorText.substring(errorText.indexOf("ir ") - 1);
        $fieldError.text(newErrorText);
      }
    });

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

    if ($("input[name=image_link]").val()) {
      let imageLink = $("input[name=image_link]").val();
      if (!imageLink.includes("empty")) {
        $(".image-preview").css({
          "background-image": "url(" + $("input[name=image_link]").val() + ")",
          "background-size": "cover",
        });
        $(".image-preview .ic--close").removeClass("d-none");
      }
    }
  }

  if ($(".um-password").length) {
    let input = $("input[type=text]");
    $(".um-field-area").before(
      '<div class="um-field-label"><label for="username_b">' +
        input.attr("placeholder") +
        '</label><div class="um-clear"></div></div>'
    );
    input.attr("placeholder", "");
    let errorMessage = $(".um-field-username_b .um-field-error").text();
    $(".um-field-username_b .um-field-error").html(errorMessage);
  }

  if ($(".um-login").length) {
    let errorMessage = $(".um-field-username .um-field-error").text();
    $(".um-field-username  .um-field-error").html(errorMessage);
  }

  $(".message a, .message .ic--close").click(function (e) {
    e.preventDefault();
    $(".success-registration-popup").addClass("d-none").removeClass("d-flex");
  });

  $(".b--form form").attr("novalidate", "");

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
});
