(function ($) {
  "use strict";
  debugger;
  var params = new URLSearchParams(location.search);
  var idProducto = params.get("idProducto");
  var cantidad = params.get("cantidad");

  var resultadoMultimedia = JSON.parse(
    localStorage.getItem("resultadoProductos")
  );

  resultadoMultimedia = resultadoMultimedia.filter(
    (data) => data.Id == idProducto
  );

  cantidad = cantidad == "undefined" ? 1 : parseInt(cantidad);
  var montoParcial = cantidad * 100;
  var montoFial = montoParcial;
  $("#nombreProducto").html(resultadoMultimedia[0].Titulo);
  $("#cantidadProducto").html(cantidad);

  $("#totalParcial").html("S/ " + montoParcial + ".00");
  $("#totalFinal").html("S/ " + montoFial + ".00");
})(jQuery);
