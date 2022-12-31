$(document).ready(function () {
  var $d = $(document);

  /**
   * Sludinājuma pievienošanas forma
   */

  if ($(".acf-form-fields")) {
    $(".acf-field-image").after('<div class="acf-blocks"></div>');
    let image_label = $(".acf-field-image .acf-label").detach();
    let email = $(".acf-field-image").next().next().detach();
    let phone = $(".acf-field-image").next().next().detach();
    let category = $(".acf-field-image").next().next().detach();
    let dueDate = $(".acf-field-image").next().next().detach();
    $(".acf-blocks").append(email);
    $(".acf-blocks").append(phone);
    $(".acf-blocks").append(category);
    $(".acf-blocks").append(dueDate);

    $(".acf-field-image input[type=file]").before(
      '<label for="file-upload" class="btn w-100 img-upload">AUGŠUPIELĀDĒT</label>'
    );

    $(".acf-field-image").prepend(
      '<div class="image-preview"><i class="ic ic--close d-none"></i></div>'
    );
    $(".acf-field-image").prepend(image_label);
  }
  // ACF IMAGE

  if ($(".acfe-form").length) {
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $(".image-preview").css(
            "background-image",
            "url(" + e.target.result + ")"
          );

          $(".image-preview i").removeClass("d-none");
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

    $('select option:contains("- Select -")').text("Visi");

    $d.on("click", ".acf-basic-uploader .img-upload", function () {
      $(".acf-basic-uploader input[type=file]").trigger("click");
    });

    $d.on("click", ".image-preview .ic--close", function () {
      $(".acf-basic-uploader input[type=file]").val(null);
      $(".image-preview").removeAttr("style");
      $(this).addClass("d-none");

      let imageWrapAttr = $(".image-wrap img").attr("src");
      if (imageWrapAttr.length > 0) {
        $(".acf-icon.-cancel").trigger("click");
      }
    });

    $(".acf-basic-uploader input[type=file]").change(function () {
      readURL(this);
    });
    let imageWrapAttr = $(".image-wrap img").attr("src");
    if (imageWrapAttr.length > 0) {
      $(".image-preview").css({
        "background-image": "url(" + imageWrapAttr + ")",
        "background-size": "cover",
      });
      $(".image-preview i").removeClass("d-none");
    }
  }
  if ($(".acf-field-date-picker").length) {
    acf.add_filter("date_picker_args", function (args, field) {
      args.dayNamesMin = ["SV", "P", "O", "T", "C", "P", "S"];
      args.monthNamesShort = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "Maijs",
        "Jun",
        "Jūl",
        "Aug",
        "Sep",
        "Okt",
        "Nov",
        "Dek",
      ];

      // return
      return args;
    });
  }

  $(".message a, .message .ic--close").click(function (e) {
    e.preventDefault();
    $(".success-registration-popup").addClass("d-none").removeClass("d-flex");
  });
});
