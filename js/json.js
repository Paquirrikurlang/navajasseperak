var Producto = [];
(function ($) {
  "use strict";

  $(function () {
    var resultado = JSON.parse(localStorage.getItem("resultadoProductos"));

    debugger;
    jQuery.each(resultado, function (i, val) {
      var caracteristicas = "";

      for (var i = 0; i < val.Caracteristicas.length; i++) {
        caracteristicas =
          caracteristicas +
          "<li>" +
          val.Caracteristicas[i].Descripcion +
          "</li>";
      }

      $(".listCards").append(
        "<div class='products-list__item' id='" +
          val.Id +
          "'>" +
          "<div class='product-card product-card--hidden-actions'>" +
          "<button  Id='" +
          val.Id +
          "'  onclick='myFunction(this)'  class='product-card__quickview' type='button'>" +
          "<svg width='16px' height='16px'>" +
          "<use xlink:href='images/sprite.svg#quickview-16'></use>" +
          "</svg>" +
          "<span class='fake-svg-icon'></span>" +
          "</button>" +
          (val.EstadoAntiguedadId != ""
            ? "<div class='product-card__badges-list'>" +
              "<div class='product-card__badge product-card__badge--sale'>Top</div>" +
              "</div>"
            : "") +
          "<div class='product-card__image product-image'>" +
          "<a href='product.php?IdProducto=" +
          val.Id +
          "'" +
          " class='product-image__body'>" +
          "<img class='product-image__img'" +
          "src='" +
          val.ImagenPrincipal.Ruta +
          "'" +
          "alt=''>" +
          "</a>" +
          "</div>" +
          "<div class='product-card__info'>" +
          "<div class='product-card__name'><a href='product.php'>" +
          val.Titulo +
          "</a></div>" +
          "<div class='product-card__rating'>" +
          "<div class='product-card__rating-stars'>" +
          "<div class='rating'>" +
          (val.Puntuacion == 5
            ? "<div class='rating__body'>" +
              "<svg class='rating__star rating__star--active' width='13px' height='12px'>" +
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
              "</div>" +
              "<svg class='rating__star rating__star--active' width='13px' height='12px'>" +
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
              "</div>" +
              "<svg class='rating__star rating__star--active' width='13px' height='12px'>" +
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
              "</div>" +
              "<svg class='rating__star rating__star--active' width='13px' height='12px'>" +
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
              "</div>" +
              "<svg class='rating__star rating__star--active' width='13px' height='12px'>" +
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
              "</div>" +
              "</div>"
            : "<div class='rating__body'>" +
              "<svg class='rating__star rating__star--active' width='13px' height='12px'>" +
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
              "</div>" +
              "<svg class='rating__star rating__star--active' width='13px' height='12px'>" +
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
              "</div>" +
              "<svg class='rating__star rating__star--active' width='13px' height='12px'>" +
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
              "</div>" +
              "<svg class='rating__star rating__star--active' width='13px' height='12px'>" +
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
              "</div>" +
              "<svg class='rating__star' width='13px' height='12px'>" +
              "<g class='rating__fill'>" +
              "<use xlink:href='images/sprite.svg#star-normal'></use>" +
              "</g>" +
              "<g class='rating__stroke'>" +
              "<use xlink:href='images/sprite.svg#star-normal-stroke'></use>" +
              "</g>" +
              "</svg>" +
              "<div class='rating__star'>" +
              "<div class='rating__fill'>" +
              "<div class='fake-svg-icon'></div>" +
              "</div>" +
              "<div class='rating__stroke'>" +
              "<div class='fake-svg-icon'></div>" +
              "</div>" +
              "</div>" +
              "</div>") +
          "</div>" +
          "</div>" +
          "</div>" +
          "<ul class='product-card__features-list'>" +
          caracteristicas +
          "</ul>" +
          "</div>" +
          "<div class='product-card__actions'>" +
          "<div class='product-card__availability'>Estado:" +
          (val.Disponibilidad == "En Stock"
            ? "<span class='text-success'>"
            : "<span class='text-danger'>") +
          val.Disponibilidad +
          "</span></div>" +
          "<div class='product-card__prices'>" +
          "S/ " +
          val.PrecioVenta +
          "</div>" +
          "<div class='product-card__buttons'>" +
          "<button     id='" +
          val.Id +
          "' onclick='solicitudProducto(this)'   class='btn btn-primary product-card__addtocart pt' type='button'>Solicitar</button> <button  id='" +
          val.Id +
          "' onclick='solicitudProducto(this)'     class='btn btn-secondary product-card__addtocart product-card__addtocart--list' type='button'>Solicitar</button> <button class='btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist' type='button'><svg width='16px' height='16px'>" +
          "<use xlink:href='images/sprite.svg#wishlist-16'></use>" +
          "</svg> <span class='fake-svg-icon fake-svg-icon--wishlist-16'></span></button> <button class='btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare' type='button'><svg width='16px' height='16px'>" +
          "<use xlink:href='images/sprite.svg#compare-16'></use>" +
          "</svg> <span class='fake-svg-icon fake-svg-icon--compare-16'></span></button></div>" +
          "</div>" +
          "</div>" +
          "</div>"
      );
    });
  });
})(jQuery);
