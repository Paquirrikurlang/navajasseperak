var Producto = [];
(function ($) {
  "use strict";

  $(function () {
    $.getJSON("./config/gallery.json", function (json) {
      debugger;
      var tipoMultimedia = json.TipoMultimedia;
      var tipoMuestra = json.TipoMuestra;
      var galeria = json.Galeria;
      var contenido = json.Contenido;

      var resultadoMultimedia = contenido.map(function (contenido) {
        var objgaleria = galeria.filter(function (m) {
          return m.Id == contenido.GaleriaId;
        })[0];

        var objtipoMultimedia = tipoMultimedia.filter(function (c) {
          return c.Id == objgaleria.TipoMuestraId;
        })[0];

        var objtipoMuestra = tipoMuestra.filter(function (c) {
          return c.Id == objgaleria.TipoMuestraId;
        })[0];

        return {
          IdContenido: contenido.Id,
          RutaContenido: contenido.Ruta,
          EstadoContenido: contenido.Estado,
          Titulo: objgaleria.Titulo,
          TipoMultimediaid: objgaleria.TipoMultimediaid,
          TipoMultimediaDescripcion: objtipoMultimedia.Descripcion,
          TipoMuestraId: objgaleria.TipoMuestraId,
          TipoMuestraDescripcion: objtipoMuestra.Descripcion,
          Descripcion: objgaleria.Descripcion,
          EstadoMultimedia: objgaleria.Estado,
        };
      });

      localStorage.setItem(
        "resultadoMultimedia",
        JSON.stringify(resultadoMultimedia)
      );
    });
  });
})(jQuery);
