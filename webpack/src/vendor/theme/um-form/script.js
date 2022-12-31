$(document).ready(function () {
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
});
