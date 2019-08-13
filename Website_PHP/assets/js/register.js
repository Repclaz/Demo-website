$(document).ready(function () {
  $("#signup").click(function () {
    $("#login").slideUp("slow", function () {
      $("#register").slideDown("slow");
    });
  });

  $("#signin").click(function () {
    $("#register").slideUp("slow", function () {
      $("#login").slideDown("slow");
    });
  });

  $("#dialog-exit").click(function () {
    $("#dialog-wrapper").hide();
  });

  $("#account-link").click(function () {
    $("#dialog-wrapper").show();
  });

});