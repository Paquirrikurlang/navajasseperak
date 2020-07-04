(function ($) {
  "use strict";
  debugger;
  var params = new URLSearchParams(location.search);
  var idProducto = params.get("idProducto");

  var resultadoMultimedia = JSON.parse(
    localStorage.getItem("resultadoProductos")
  );

  resultadoMultimedia = resultadoMultimedia.filter(
    (data) => data.Id == idProducto
  );

  $("#nombreProducto").html(resultadoMultimedia[0].Titulo);
})(jQuery);
