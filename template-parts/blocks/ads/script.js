$(document).ready(function () {
  var $d = $(document);
  $(document).on("facetwp-loaded", function () {
    $(".facetwp-dropdown").select2({ width: "100%" });
    if (
      !$("select").next(".select2-container--default").find(".select-search")
        .length
    ) {
      $("select")
        .next(".select2-container--default")
        .append('<input class="select-search" >');
    }
    $(".facetwp-dropdown").on("select2:open", function (e) {
      setTimeout(() => {
        $(".select-search").focus();
      }, 500);
    });
  });

  $d.on("click", ".js-read-more", function (e) {
    e.preventDefault();
    let expand;
    if ($(this).attr("data-collapsed") === "true") {
      $(this).attr("data-collapsed", "false");
      expand = false;
    } else {
      $(this).attr("data-collapsed", "true");
      expand = true;
    }

    $(this).text(expand ? $(this).data("collapse") : $(this).data("expand"));
    $(this).prev(".description").toggleClass("description-hidden");
    $(this).attr("data-collapsed");
  });
});
