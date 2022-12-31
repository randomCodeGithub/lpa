$(document).ready(function () {
  var $w = $(window);
  var $d = $(document);
  var $b = $("body");

  /**
   * Cookie
   */

  var interval;
  function addClassesToCookie() {
    if ($(".cc-window").length) {
      $(".cc-allow").addClass("btn");
      $(".cc-window").addClass("cc-block");
      clearInterval(interval);
    }
  }
  interval = setInterval(addClassesToCookie, 500);
  /**
   * Header
   */
  var $siteHeader = $(".site-header");
  function headerScrollChangeClass(headerEl) {
    // scroll top position check
    if ($w.scrollTop() < 70) {
      headerEl.removeClass("smaller-header");
    } else {
      headerEl.addClass("smaller-header");
    }
  }

  /**
   * Responsive menu
   */

  var toggle = false;
  var $menu = $(".js-burger-menu");
  var $responsiveMenu = $(".responsive-menu");

  $menu.on("click", function () {
    toggle = !toggle;

    if (toggle) {
      $(this).addClass("ic--burgermenu-close");
      $(this).removeClass("ic--burgermenu");
      $responsiveMenu.addClass("open");
    } else {
      $(this).addClass("ic--burgermenu");
      $(this).removeClass("ic--burgermenu-close");
      $responsiveMenu.removeClass("open");
    }
  });

  headerScrollChangeClass($siteHeader);

  $w.bind("scroll", function () {
    headerScrollChangeClass($siteHeader);
  });

  // UM ERRORS
  $("input.um-error").parent().prev(".um-field-label").addClass("um-error");
  $(".um-field-radio .um-field-error").prev().prev(".um-field-label").addClass("um-error");

  $("select:not([multiple]").on("select2:opening", function (e) {
    if (
      !$(this).next(".select2-container--default").find(".select-search").length
    ) {
      $(this)
        .next(".select2-container--default")
        .append('<input class="select-search" >');
    }
  });

  $("select:not([multiple]").on("select2:closing", function (e) {
    $(".select-search").val("");
  });

  $("select:not([multiple]").on("select2:open", function (e) {
    setTimeout(() => {
      if ($(".facetwp-type-dropdown").length) {
        $(".select-search").focus();
      } else {
        $(this).next(".select2").find(".select-search").focus();
      }
    }, 500);
  });

  $d.on("input", ".select-search", function () {
    if ($(".facetwp-type-dropdown").length || $(".user-filters").length) {
      $(".select2-search__field").val($(this).val()).trigger("input");
    } else {
      $(this)
        .parent(".select2-container--open")
        .next(".select2-container--open")
        .find(".select2-search__field")
        .val($(this).val())
        .trigger("input");
    }
  });
});
