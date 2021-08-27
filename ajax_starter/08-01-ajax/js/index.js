$(document).ready(function () {
  $("#example").on("click", "button.switch", function () {
    let object = {
      beforeSend: function () {
        console.log("Reauest is starting");
      },
    };
    $.ajax("result.html", object)
      .done(function (el) {
        console.log(el);
        $("#result").text(el);
      })
      .always(function () {
        console.log("request is done");
      })
      .fail(function (request, errortype, errorMessage) {
        console.log("request", request);
        console.log("errortype", errortype);
        console.log("errorMessage", errorMessage);
      });
  });
});
