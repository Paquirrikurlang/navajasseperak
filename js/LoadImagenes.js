(function ($) {
  "use strict";
  $(function () {
    debugger;
    var params = new URLSearchParams(location.search);
    var TipoMultimedia = params.get("TipoMultimedia");
    LoadImages(TipoMultimedia);
  });
})(jQuery);

function LoadImages(TipoMultimedia) {
  /* 1 -> Videos, 2 ->Fotos */
  var resultadoMultimedia = JSON.parse(
    localStorage.getItem("resultadoMultimedia")
  );

  resultadoContenido = resultadoMultimedia.filter(
    (data) => data.GaleriaId == IdGaleria
  );

  jQuery.each(resultadoContenido, function (i, val) {});
}
