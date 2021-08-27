$(document).ready(function () {
  let option = {
    beforeSend: function () {
      console.log("starting");
    },
    type: "GET",
    url: "destinations.json",
    dataType: "json",
    contentType: "application/json",
    cache: false,
    success: function (response) {
      let data = JSON.stringify(response);
      console.log(data);
      let obj = JSON.parse(data);
      console.log("----------------------------------------------");
      console.log(obj);
      console.log(obj[0].name);
    },
  };

  $.ajax(option);
});
