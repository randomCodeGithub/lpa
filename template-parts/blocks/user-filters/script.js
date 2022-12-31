$(document).ready(function () {
  let timeout;
  $("select").select2({ width: "100%" });

  function clearTimer() {
    if (timeout !== undefined) {
      clearTimeout(timeout);
    }
  }

  $("select, input[type=checkbox]").on("change", function () {
    clearTimer();
    timeout = setTimeout(function () {
      $("form button[type=submit]").trigger("click");
    }, 1000);
  });

  $("select").on("select2:open", function (e) {
    clearTimer();
  });
});
