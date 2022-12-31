$(document).ready(function () {
    $('.search-info .col-lg-6 .resource-info').each(function () {
        if (!$(this).children().length) {
            $(this).parent().addClass("d-none");
        }
      })
})