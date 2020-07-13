var Producto = [];
(function ($) {
  "use strict";

  /*Carga de galerìa */
  $(function () {
    $.getJSON("./config/gallery.json", function (json) {
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
          GaleriaId: objgaleria.Id,
          IdContenido: contenido.Id,
          RutaImagen: contenido.RutaImagen,
          RutaVideo: contenido.RutaVideo,
          EstadoContenido: contenido.Estado,
          Titulo: objgaleria.Titulo,
          TipoMultimediaid: objgaleria.TipoMultimediaid,
          TipoMultimediaDescripcion: objtipoMultimedia.Descripcion,
          TipoMuestraId: objgaleria.TipoMuestraId,
          TipoMuestraDescripcion: objtipoMuestra.Descripcion,
          Descripcion: objgaleria.Descripcion,
          EstadoMultimedia: objgaleria.Estado,
          Titulo: contenido.Titulo,
        };
      });

      localStorage.setItem(
        "resultadoMultimedia",
        JSON.stringify(resultadoMultimedia)
      );
    });
  });

  /*Carga de los productos */
  $(function () {
    $.getJSON("./config/data.json", function (json) {
      var producto = json.Producto;
      var productoImagen = json.ProductoImagen;
      var marca = json.Marca;
      var categoria = json.Categoria;
      var fabricacion = json.Fabricacion;
      var caracteristica = json.Caracteristica;
      var disponibilidad = json.Disponibilidad;
      var estadoAntiguedad = json.EstadoAntiguedad;

      var resultado = producto.map(function (producto) {
        var objMarca = marca.filter(function (m) {
          return m.Id == producto.MarcaId;
        })[0];

        var objCategoria = categoria.filter(function (c) {
          return c.Id == producto.CategoriaId;
        })[0];

        var objFabricacion = fabricacion.filter(function (f) {
          return f.Id == producto.FabricacionId;
        })[0];

        var listCaracteristica = caracteristica.filter(function (c) {
          return c.IdProducto == producto.Id;
        });

        var objDisponibilidad = disponibilidad.filter(function (d) {
          return d.Id == producto.DisponibilidadId;
        })[0];

        var objEstadoAntiguedad = estadoAntiguedad.filter(function (e) {
          return e.Id == producto.EstadoAntiguedadId;
        })[0];

        var listProductoImagen = productoImagen.filter(function (i) {
          return i.IdProducto == producto.Id;
        });

        return {
          Id: producto.Id,
          CodigoProducto: producto.CodigoProducto,
          SKU: producto.SKU,
          Titulo: producto.Titulo,
          MarcaId: objMarca.Descripcion,
          Categoria: objCategoria.Descripcion,
          Fabricacion: objFabricacion.Descripcion,
          Puntuacion: producto.Puntuacion,
          Descripcion: producto.Descripcion,
          Caracteristicas: listCaracteristica,
          Disponibilidad: objDisponibilidad.Descripcion,
          PrecioVenta: producto.PrecioVenta,
          EstadoAntiguedadId:
            objEstadoAntiguedad == undefined
              ? ""
              : objEstadoAntiguedad.Descripcion,
          CompartirFacebook: producto.CompartirFacebook,
          CompartirTweter: producto.CompartirTweter,
          ProductoImagen: listProductoImagen,
          ImagenPrincipal: listProductoImagen.find(
            (imagen) => imagen.PadreId == 0
          ),
          Letra: producto.Letra,
        };
      });

      localStorage.setItem("resultadoProductos", JSON.stringify(resultado));
    });
  });
})(jQuery);
