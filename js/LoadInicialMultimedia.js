var Producto = [];
(function ($) {
  "use strict";
  debugger;
  /*Carga de galerìa */
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
    debugger;
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

      jQuery.each(resultado, function (i, val) {
        var caracteristicas = "";

        $("#productoIndex").append(
          "<div class='block-products-carousel__column'>" +
            "<div class='block-products-carousel__cell'>" +
            "<div class='product-card product-card--hidden-actions'>" +
            "<button id='1' onclick='myFunction(this)' class='product-card__quickview' type='button'><svg width='16px' height='16px'>" +
            "<use xlink:href='images/sprite.svg#quickview-16'></use>" +
            "</svg><span class='fake-svg-icon'></span>" +
            "</button>" +
            "<div class='product-card__image product-image'><a href='product.php?IdProducto=1' class='product-image__body'>" +
            "<img class='product-image__img' src='images/navajas/modelos/A/A1.jpeg' alt=''></a></div>" +
            "<div class='product-card__info'>" +
            "<div class='product-card__name'><a href='./product.php'>Olivo</a></div>" +
            "<div class='product-card__rating'>" +
            "<div class='product-card__rating-stars'>" +
            "<div class='rating'>" +
            "<div class='rating__body'><svg class='rating__star rating__star--active' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge rating__star--active'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div><svg class='rating__star rating__star--active' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge rating__star--active'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div><svg class='rating__star rating__star--active' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge rating__star--active'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div><svg class='rating__star rating__star--active' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge rating__star--active'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div><svg class='rating__star' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "<div class='product-card__rating-legend'>0 Comentarios</div>" +
            "</div>" +
            "<ul class='product-card__features-list'>" +
            "<li>Speed: 750 RPM</li>" +
            "<li>Power Source: Cordless-Electric</li>" +
            "<li>Battery Cell Type: Lithium</li>" +
            "<li>Voltage: 20 Volts</li>" +
            "<li>Battery Capacity: 2 Ah</li>" +
            "</ul>" +
            "</div>" +
            "<div class='product-card__actions'>" +
            "<div class='product-card__availability'>Availability: <span class='text-success'>In Stock</span></div>" +
            "<div class='product-card__prices'>S/ 100.00</div>" +
            "<div class='product-card__buttons'><button class='btn btn-primary product-card__addtocart pt' type='button'>Agregar</button><button class='btn btn-secondary product-card__addtocart product-card__addtocart--list' type='button'>Agregar</button><button class='btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist' type='button'><svg width='16px' height='16px'>" +
            "<use xlink:href='images/sprite.svg#wishlist-16'></use>" +
            "</svg><span class='fake-svg-icon fake-svg-icon--wishlist-16'></span></button><button class='btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare' type='button'><svg width='16px' height='16px'>" +
            "<use xlink:href='images/sprite.svg#compare-16'></use>" +
            "</svg><span class='fake-svg-icon fake-svg-icon--compare-16'></span></button></div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "<div class='block-products-carousel__cell'>" +
            "<div class='product-card product-card--hidden-actions'>" +
            "<button id='14' onclick='myFunction(this)' class='product-card__quickview' type='button'><svg width='16px' height='16px'>" +
            "<use xlink:href='images/sprite.svg#quickview-16'></use>" +
            "</svg><span class='fake-svg-icon'></span>" +
            "</button>" +
            "<div class='product-card__image product-image'><a href='product.php?IdProducto=14' class='product-image__body'>" +
            "<img class='product-image__img' src='images/navajas/modelos/N/N1.jpeg' alt=''></a></div>" +
            "<div class='product-card__info'>" +
            "<div class='product-card__name'><a href='./product.php'>Colgada</a></div>" +
            "<div class='product-card__rating'>" +
            "<div class='product-card__rating-stars'>" +
            "<div class='rating'>" +
            "<div class='rating__body'><svg class='rating__star rating__star--active' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge rating__star--active'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div><svg class='rating__star rating__star--active' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge rating__star--active'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div><svg class='rating__star rating__star--active' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge rating__star--active'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div><svg class='rating__star rating__star--active' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge rating__star--active'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div><svg class='rating__star' width='13px' height='12px'>" +
            "<g class='rating__fill'>" +
            "<use xlink:href='images/sprite.svg#star-normal'></use>" +
            "</g>" +
            "<g class='rating__stroke'>" +
            "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
            "</g>" +
            "</svg>" +
            "<div class='rating__star rating__star--only-edge'>" +
            "<div class='rating__fill'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "<div class='rating__stroke'>" +
            "<div class='fake-svg-icon'></div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "<div class='product-card__rating-legend'>0 Comentarios</div>" +
            "</div>" +
            "<ul class='product-card__features-list'>" +
            "<li>Speed: 750 RPM</li>" +
            "<li>Power Source: Cordless-Electric</li>" +
            "<li>Battery Cell Type: Lithium</li>" +
            "<li>Voltage: 20 Volts</li>" +
            "<li>Battery Capacity: 2 Ah</li>" +
            "</ul>" +
            "</div>" +
            "<div class='product-card__actions'>" +
            "<div class='product-card__availability'>Availability: <span class='text-success'>In Stock</span></div>" +
            "<div class='product-card__prices'>S/ 100.00</div>" +
            "<div class='product-card__buttons'><button class='btn btn-primary product-card__addtocart pt' type='button'>Agregar</button><button class='btn btn-secondary product-card__addtocart product-card__addtocart--list' type='button'>Agregar</button><button class='btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist' type='button'><svg width='16px' height='16px'>" +
            "<use xlink:href='images/sprite.svg#wishlist-16'></use>" +
            "</svg><span class='fake-svg-icon fake-svg-icon--wishlist-16'></span></button><button class='btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare' type='button'><svg width='16px' height='16px'>" +
            "<use xlink:href='images/sprite.svg#compare-16'></use>" +
            "</svg><span class='fake-svg-icon fake-svg-icon--compare-16'></span></button></div>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div>"
        );
      });
    });
  });
})(jQuery);
