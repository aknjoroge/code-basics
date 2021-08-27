$(document).ready(function () {
  $("#example").on("click", "button.switch", function () {
    $.ajax("resul.html", {
      beforeSend: function () {
        $("#status").text("Cargando..");
      },
    })
      .done(function (response) {
        $("#result").html(response);
      })
      .always(function () {
        $("#status").text("Completado");
      })
      .fail(function (request, errortype, errorMessage) {
        console.log("request", request);
        console.log("errortype", errortype);
        console.log("errorMessage", errorMessage);
      });
  });
});
