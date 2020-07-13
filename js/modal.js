function myFunction(valor) {
  IdProducto = valor.id;
  clickHandler(valor, IdProducto);
}

function clickHandler(valor, IdProducto) {
  const modal = $("#quickview-modal");
  const button = $(valor);
  const doubleClick = button.is(".product-card__quickview--preload");

  quickview.cancelPreviousModal();

  if (doubleClick) {
    return;
  }

  button.addClass("product-card__quickview--preload");

  let xhr = null;

  var resultado = JSON.parse(localStorage.getItem("resultadoProductos"));
  resultado = resultado.find((data) => data.Id == IdProducto);

  var rutaFoto1 = resultado.ProductoImagen.find(
    (imagen) => imagen.Descripcion == resultado.Letra + "1"
  ).Ruta;
  var rutaFoto2 = resultado.ProductoImagen.find(
    (imagen) => imagen.Descripcion == resultado.Letra + "2"
  ).Ruta;
  var rutaFoto3 = resultado.ProductoImagen.find(
    (imagen) => imagen.Descripcion == resultado.Letra + "3"
  ).Ruta;
  var rutaFoto4 = resultado.ProductoImagen.find(
    (imagen) => imagen.Descripcion == resultado.Letra + "4"
  ).Ruta;
  var rutaFoto5 = resultado.ProductoImagen.find(
    (imagen) => imagen.Descripcion == resultado.Letra + "5"
  ).Ruta;
  var rutaFoto6 = resultado.ProductoImagen.find(
    (imagen) => imagen.Descripcion == resultado.Letra + "6"
  ).Ruta;
  $(".modal-content").empty();
  $(".modal-content").append(
    "<div class='quickview'>" +
      "<button class='quickview__close' type='button'><svg width='20px' height='20px'>" +
      "<use xlink:href='images/sprite.svg#cross-20'></use>" +
      "</svg>" +
      "</button>" +
      "<div class='product product--layout--quickview' data-layout='quickview'>" +
      "<div class='product__content'>" +
      "<!-- .product__gallery -->" +
      "<div class='product__gallery'>" +
      "<div class='product-gallery'>" +
      "<div class='product-gallery__featured'>" +
      /*"<button class='product-gallery__zoom'>" +
      "<svg width='24px' height='24px'>" +
      "<use xlink:href='images/sprite.svg#zoom-in-24'></use>" +
      "</svg>" +
      "</button>" +*/
      "<div class='owl-carousel owl-loaded owl-drag' id='product-image'>" +
      "<div class='owl-stage-outer'>" +
      "<div class='owl-stage' style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2656px;'>" +
      "<div class='owl-item active' style='width: 531.007px;'>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='" +
      rutaFoto1 +
      "' data-width='700' data-height='700' class='product-image__body' + target='_blank'>" +
      "<img class='product-image__img' src='" +
      rutaFoto1 +
      "' alt=''>" +
      "</a>" +
      "</div>" +
      "</div>" +
      "<div class='owl-item' style='width: 531.007px;'>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='" +
      rutaFoto2 +
      "' data-width='700' data-height='700' class='product-image__body' target='_blank'>" +
      "<img class='product-image__img' src='" +
      rutaFoto2 +
      "' alt=''>" +
      "</a>" +
      "</div>" +
      "</div>" +
      "<div class='owl-item' style='width: 531.007px;'>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='" +
      rutaFoto3 +
      "' data-width='700' data-height='700' class='product-image__body' target='_blank'>" +
      "<img class='product-image__img' src='" +
      rutaFoto3 +
      "' alt=''></a>" +
      "</div>" +
      "</div>" +
      "<div class='owl-item' style='width: 531.007px;'>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='" +
      rutaFoto4 +
      "' data-width='7000' data-height='7000' class='product-image__body' target='_blank'>" +
      "<img class='product-image__img' src='" +
      rutaFoto4 +
      "' alt=''></a>" +
      "</div>" +
      "</div>" +
      "<div class='owl-item' style='width: 531.007px;'>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='" +
      rutaFoto5 +
      "' data-width='7000' data-height='7000' class='product-image__body' target='_blank'>" +
      "<img class='product-image__img' src='" +
      rutaFoto5 +
      "' alt=''></a>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "<div class='owl-nav disabled'><button type='button' role='presentation' class='owl-prev'><span aria-label='Previous'></span></button><button type='button' role='presentation' class='owl-next'><span aria-label='Next'></span></button></div>" +
      "<div class='owl-dots disabled'></div>" +
      "</div>" +
      "</div>" +
      "<div class='product-gallery__carousel'>" +
      "<div class='owl-carousel owl-loaded owl-drag' id='product-carousel'>" +
      "<div class='owl-stage-outer'>" +
      "<div class='owl-stage' style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 545px;'>" +
      "<div class='owl-item active' style='width: 99px; margin-right: 10px;'><a href='" +
      rutaFoto1 +
      "' class='product-image product-gallery__carousel-item product-gallery__carousel-item--active'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='" +
      rutaFoto1 +
      "' alt=''></div>" +
      "</a></div>" +
      "<div class='owl-item active' style='width: 99px; margin-right: 10px;'><a href='" +
      rutaFoto2 +
      "' class='product-image product-gallery__carousel-item'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='" +
      rutaFoto2 +
      "' alt=''></div>" +
      "</a></div>" +
      "<div class='owl-item active' style='width: 99px; margin-right: 10px;'><a href='" +
      rutaFoto3 +
      "' class='product-image product-gallery__carousel-item'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='" +
      rutaFoto3 +
      "' alt=''></div>" +
      "</a></div>" +
      "<div class='owl-item active' style='width: 99px; margin-right: 10px;'><a href='" +
      rutaFoto4 +
      "' class='product-image product-gallery__carousel-item'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='" +
      rutaFoto4 +
      "' alt=''></div>" +
      "</a></div>" +
      "<div class='owl-item active' style='width: 99px; margin-right: 10px;'><a href='" +
      rutaFoto5 +
      "' class='product-image product-gallery__carousel-item'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='" +
      rutaFoto5 +
      "' alt=''></div>" +
      "</a></div>" +
      "</div>" +
      "</div>" +
      "<div class='owl-nav disabled'><button type='button' role='presentation' class='owl-prev'><span aria-label='Previous'></span></button><button type='button' role='presentation' class='owl-next'><span aria-label='Next'></span></button></div>" +
      "<div class='owl-dots disabled'></div>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "<!-- .product__gallery / end -->" +
      "<!-- .product__info -->" +
      "<div class='product__info'>" +
      "<div class='product__wishlist-compare'>" +
      "<button type='button' class='btn btn-sm btn-light btn-svg-icon' data-toggle='tooltip' data-placement='right' title='' data-original-title='Wishlist'>" +
      "<svg width='16px' height='16px'>" +
      "<use xlink:href='images/sprite.svg#wishlist-16'></use>" +
      "</svg>" +
      "</button>" +
      "<button type='button' class='btn btn-sm btn-light btn-svg-icon' data-toggle='tooltip' data-placement='right' title='' data-original-title='Compare'>" +
      "<svg width='16px' height='16px'>" +
      "<use xlink:href='images/sprite.svg#compare-16'></use>" +
      "</svg>" +
      "</button>" +
      "</div>" +
      "<h1 class='product__name'>" +
      resultado.Titulo +
      "</h1>" +
      "<div class='product__description'>" +
      resultado.Descripcion +
      "</div>" +
      "<ul class='product__features'>" +
      "<li>Speed: 750 RPM</li>" +
      "<li>Power Source: Cordless-Electric</li>" +
      "<li>Battery Cell Type: Lithium</li>" +
      "<li>Voltage: 20 Volts</li>" +
      "<li>Battery Capacity: 2 Ah</li>" +
      "</ul>" +
      "<ul class='product__meta'>" +
      "<li class='product__meta-availability'>" +
      " Estado: " +
      (resultado.Disponibilidad == "En Stock"
        ? "<span class='text-success'>"
        : "<span class='text-success'>") +
      resultado.Disponibilidad +
      "</span>" +
      "</li>" +
      "<li>Marca: <a href=''>" +
      resultado.MarcaId +
      "</a></li>" +
      "<li>SKU: " +
      resultado.SKU +
      "</li>" +
      "</ul>" +
      "</div>" +
      "<div class='product__sidebar'>" +
      "<div class='product__availability'>" +
      "Estado: <span class='text-success'>En Stock</span>" +
      "</div>" +
      "<div class='product__prices'>S/ " +
      resultado.PrecioVenta +
      "</div>" +
      "<div class='form-group product__option'>" +
      "<label class='product__option-label'>Material</label>" +
      "<div class='input-radio-label'>" +
      "<div class='input-radio-label__list'>" +
      "<label><input type='radio' name='material'>" +
      "<span class='color_false' >Metal</span></label>" +
      "<label ><input readonly type='radio' name='material'>" +
      "<span >Madera</span></label>" +
      "<label ><input readonly type='radio' name='material'>" +
      "<span>Plástico</span></label>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "<div class='form-group product__option'>" +
      "<label class='product__option-label' for='product-quantity'>Cantidad</label>" +
      "<div class='product__actions'>" +
      "<div class='product__actions-item'>" +
      "<div class='input-number product__quantity'>" +
      "<input id='product-quantity' class='input-number__input form-control form-control-lg' type='number' min='1' value='1'>" +
      "<div class='input-number__add'></div>" +
      "<div class='input-number__sub'></div>" +
      "</div>" +
      "</div>" +
      "<div class='product__actions-item product__actions-item--addtocart'>" +
      "<button   id='" +
      resultado.Id +
      "' onclick='solicitudProducto(this)' class='btn btn-primary btn-lg'>" +
      "Solicitar" +
      "</button>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "<div class='d-none product__footer'>" +
      "<div class='product__tags tags'>" +
      "<div class='tags__list'>" +
      "<a href='catalogue.php'>Ver Catálogo</a>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "</div>"
  );

  // modal.find(".modal-content").html("<h1>Paquirri probando  modal</h1>");

  const timeout = setTimeout(function () {
    quickview.cancelPreviousModal = function () {};
    button.removeClass("product-card__quickview--preload");
    modal.find(".quickview__close").on("click", function () {
      modal.modal("hide");
    });
    modal.modal("show");
  }, 1000);
  quickview.cancelPreviousModal = function () {
    button.removeClass("product-card__quickview--preload");

    if (xhr) {
      xhr.abort();
    }

    // timeout ONLY_FOR_DEMO!
    clearTimeout(timeout);
  };
}

const quickview = {
  cancelPreviousModal: function () {},
};
