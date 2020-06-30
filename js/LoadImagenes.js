(function ($) {
  "use strict";
  $(function () {
    debugger;
    var params = new URLSearchParams(location.search);
    var IdGaleria = params.get("IdGaleria");
    LoadImages(IdGaleria);
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

  jQuery.each(resultadoContenido, function (i, val) {
    $("#images").append(
        "<figure class='col-2 col-md-3 galeria__imagen'>" +
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
