var paginaInicio = 1,
  numeroDatosRequeridos = 0,
  IdGaleria = 0;
(function ($) {
  "use strict";
  $(function () {
    debugger;
    var params = new URLSearchParams(location.search);
    IdGaleria = params.get("IdGaleria");

    var numPaginasSoportadas = paginasSoportadas(
      parseInt($("#cboCantidadSolicitada").val()),
      IdGaleria
    );
    setlocalStorage(paginaInicio);
    LoadImages(IdGaleria);
    generacionPaginador(numPaginasSoportadas, paginaInicio);
  });
})(jQuery);

function LoadImages(IdGaleria) {
  /* 1 -> Videos, 2 ->Fotos */
  var resultadoMultimedia = JSON.parse(
    localStorage.getItem("resultadoMultimedia")
  );

  resultadoContenido = resultadoMultimedia.filter(
    (data) => data.GaleriaId == IdGaleria
  );

  var paginaInicioIntra = getlocalStorage("paginaInicio");
  numeroDatosRequeridos = parseInt($("#cboCantidadSolicitada").val());

  var inicio = numeroDatosRequeridos * (paginaInicioIntra - 1);
  var fin = numeroDatosRequeridos * paginaInicioIntra;
  var cargaFinal = resultadoContenido.slice(inicio, fin);
  $("#images").empty();

  jQuery.each(cargaFinal, function (i, val) {
    $("#images").append(
      "<figure class='col-6 col-lg-3 galeria__imagen'>" +
        "<a href='" +
        val.RutaImagen +
        "' class='galeria__imagen__link' data-size='1600x1067'>" +
        "<img alt='picture' src='" +
        val.RutaImagen +
        "' class='img-fluid'>" +
        "</a>" +
        "</figure>"
    );
  });
}

function paginasSoportadas(numeroDatosRequeridos, IdGaleria) {
  var resultado = JSON.parse(localStorage.getItem("resultadoMultimedia"));

  resultado = resultado.filter((data) => data.GaleriaId == IdGaleria);

  var numPaginasSoportadas = parseInt(resultado.length / numeroDatosRequeridos);
  if (resultado.length % numeroDatosRequeridos) numPaginasSoportadas++;
  return numPaginasSoportadas;
}

$("#cboCantidadSolicitada").change(function () {
  var paginaInicioIntra = getlocalStorage("paginaInicio");
  LoadImages(IdGaleria);
  var numPaginasSoportadas = paginasSoportadas(
    parseInt($("#cboCantidadSolicitada").val()),
    IdGaleria
  );
  generacionPaginador(numPaginasSoportadas, paginaInicioIntra);
});

function atras(valor) {
  var paginaInicioIntra = getlocalStorage("paginaInicio");
  paginaInicioIntra--;
  var numPaginasSoportadas = paginasSoportadas(
    parseInt($("#cboCantidadSolicitada").val()),
    IdGaleria
  );
  if (paginaInicioIntra <= 0) paginaInicioIntra = 1;
  setlocalStorage(paginaInicioIntra);
  LoadImages(IdGaleria);
  generacionPaginador(numPaginasSoportadas, paginaInicioIntra);
}

function adelante(valor) {
  var paginaInicioIntra = getlocalStorage("paginaInicio");
  paginaInicioIntra++;
  var numPaginasSoportadas = paginasSoportadas(
    parseInt($("#cboCantidadSolicitada").val()),
    IdGaleria
  );
  if (paginaInicioIntra >= numPaginasSoportadas)
    paginaInicioIntra = numPaginasSoportadas;

  setlocalStorage(paginaInicioIntra);
  LoadImages(IdGaleria);
  generacionPaginador(numPaginasSoportadas, paginaInicioIntra);
}

function paginador(valor) {
  var paginaInicioIntra = parseInt(valor.firstElementChild.text);
  var numPaginasSoportadas = paginasSoportadas(
    parseInt($("#cboCantidadSolicitada").val()),
    IdGaleria
  );
  if (paginaInicioIntra >= numPaginasSoportadas)
    paginaInicioIntra = numPaginasSoportadas;

  setlocalStorage(paginaInicioIntra);
  LoadImages(IdGaleria);
  generacionPaginador(numPaginasSoportadas, paginaInicioIntra);
}
