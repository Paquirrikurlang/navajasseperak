(function ($) {
  "use strict";
  $(function () {
    debugger;
    var params = new URLSearchParams(location.search);
    var IdProducto = params.get("IdProducto");

    /*
    var source = document.getElementById("text-template").innerHTML;
    var template = Handlebars.compile(source);
    var context = {
      first_name: "Esto es solo una prueba",
      last_name: "Probando la plantilla",
    };
    var html = template(context);
    document.getElementById("detalle_producto").innerHTML = html;
    */
    LoadDetalleProductoForm(IdProducto);
  });
})(jQuery);

function LoadDetalleProductoForm(IdProducto) {
  debugger;
  var resultado = JSON.parse(localStorage.getItem("resultado"));
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

  /* Cargamso las imágenes del producto cabecera*/
  $("#hrf1_product").attr("href", rutaFoto1);
  $("#img1_product").attr("src", rutaFoto1);
  $("#hrf2_product").attr("href", rutaFoto2);
  $("#img2_product").attr("src", rutaFoto2);
  $("#hrf3_product").attr("href", rutaFoto3);
  $("#img3_product").attr("src", rutaFoto3);
  $("#hrf4_product").attr("href", rutaFoto4);
  $("#img4_product").attr("src", rutaFoto4);
  $("#hrf5_product").attr("href", rutaFoto5);
  $("#img5_product").attr("src", rutaFoto5);
  /* */

  /* Cargamso las imágenes del producto carrusel*/
  $("#hrf1_carrusel").attr("href", rutaFoto1);
  $("#img1_carrusel").attr("src", rutaFoto1);
  $("#hrf2_carrusel").attr("href", rutaFoto2);
  $("#img2_carrusel").attr("src", rutaFoto2);
  $("#hrf3_carrusel").attr("href", rutaFoto3);
  $("#img3_carrusel").attr("src", rutaFoto3);
  $("#hrf4_carrusel").attr("href", rutaFoto4);
  $("#img4_carrusel").attr("src", rutaFoto4);
  $("#hrf5_carrusel").attr("href", rutaFoto5);
  $("#img5_carrusel").attr("src", rutaFoto5);
  /* */

  $(".product__name").html(resultado.Titulo);
  $(".product__description").html(resultado.Descripcion);

  if (resultado.Disponibilidad != "En Stock") {
    $(".stock").removeClass("text-success");
    $(".stock").addClass("text-danger");
  }
  $(".stock").html(resultado.Disponibilidad);
  $(".marca").html(resultado.MarcaId);
  $(".sku").html("SKU: " + resultado.SKU);
  $(".product__prices").html("S/" + resultado.PrecioVenta);
  $(".descripcion_parrafo").html(resultado.Descripcion);
  $(".btnSolicitarProducto").attr("id", resultado.Id);
  /*
  $(".detalle_producto").append(
    "<div class='product__content'>" +
      "<div class='product__gallery'>" +
      "<div class='product-gallery'>" +
      "<div class='product-gallery__featured'>" +
      "<button class='product-gallery__zoom'>" +
      "<svg width='24px' height='24px'>" +
      "<use xlink:href='images/sprite.svg#zoom-in-24'></use>" +
      "</svg>" +
      " </button>" +
      "<div class='owl-carousel' id='product-image'>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='" +
      rutaFoto1 +
      "' data-width='700' data-height='700' class='product-image__body' target='_blank'>" +
      "<img class='product-image__img' src='" +
      rutaFoto1 +
      "' alt='' />" +
      "</a>" +
      "</div>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='images/navajas/filipina.png' data-width='700'data-height='700'class='product-image__body' target='_blank'>" +
      "<img class='product-image__img' src='images/navajas/filipina.png' alt='' />" +
      "</a>" +
      "</div>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='images\navajasmediaO.png' data-width='700'data-height='700'class='product-image__body' target='_blank'>" +
      "<img class='product-image__img' src='images\navajasmediaO.png' alt='' /></a>" +
      "</div>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='images\navajasolivoCurva.png' data-width='700'data-height='700'class='product-image__body' target='_blank'>" +
      "<img class='product-image__img' src='images\navajasolivoCurva.png' alt='' /></a>" +
      "</div>" +
      "<div class='product-image product-image--location--gallery'>" +
      "<a href='images\navajasspk.png' data-width='700'data-height='700'class='product-image__body' target='_blank'>" +
      "<img class='product-image__img' src='images\navajasspk.png' alt='' /></a>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "<div class='product-gallery__carousel'>" +
      "<div class='owl-carousel' id='product-carousel'>" +
      "<a href='images\navajascolaDeRata.png' class='product-image product-gallery__carousel-item'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='images\navajascolaDeRata.png' alt='' /></div>" +
      "</a>" +
      "<a href='images\navajas\filipina.png' class='product-image product-gallery__carousel-item'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='images\navajas\filipina.png' alt='' /></div>" +
      "</a>" +
      "<a href='images\navajasmediaO.png' class='product-image product-gallery__carousel-item'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='images\navajasmediaO.png' alt='' /></div>" +
      "</a>" +
      "<a href='images\navajasolivoCurva.png' class='product-image product-gallery__carousel-item'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='images\navajasolivoCurva.png' alt='' /></div>" +
      "</a>" +
      "<a href='images\navajasspk.png' class='product-image product-gallery__carousel-item'>" +
      "<div class='product-image__body'>" +
      "<img class='product-image__img product-gallery__carousel-image' src='images\navajasspk.png' alt='' /></div>" +
      "</a>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "<div class='product__info'>" +
      "<div class='product__wishlist-compare'>" +
      "<button type='button' class='btn btn-sm btn-light btn-svg-icon' data-toggle='tooltip' data-placement='right' title='Wishlist'>" +
      "<svg width='16px' height='16px'>" +
      "<use xlink:href='images/sprite.svg#wishlist-16'></use>" +
      "</svg>" +
      " </button>" +
      "<button type='button' class='btn btn-sm btn-light btn-svg-icon' data-toggle='tooltip' data-placement='right' title='Compare'>" +
      "<svg width='16px' height='16px'>" +
      "<use xlink:href='images/sprite.svg#compare-16'></use>" +
      "</svg>" +
      " </button>" +
      "</div>" +
      "<h1 class='product__name'>" +
      "Navaja Cola de Rata" +
      "</h1>" +
      "<div class='product__description'>" +
      "Esta navaja tiene un diseño ideal para el tipo de pleito" +
      "que va y pega sin demora, gallso de aire y buen registro, además" +
      "cae perfectamente en gallos que tienen buena conformación." +
      "que va y pega sin demora, gallso de aire y buen registro, además" +
      "cae perfectamente en gallos que tienen buena conformación." +
      "cae perfectamente en gallos que tienen buena." +
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
      "Disponibilidad: <span class='text-success'>En Stock</span>" +
      "</li>" +
      "<li>Marca: <a href=''>Seperak</a></li>" +
      "<li>SKU: 0001</li>" +
      "</ul>" +
      "</div>" +
      "<div class='product__sidebar'>" +
      "<div class='product__availability'>" +
      "Disponibilidad: <span class='text-success'>En Stock</span>" +
      "</div>" +
      "<div class='product__prices'>S/100.00</div>" +
      "<form class='product__options'>" +
      "<div class='form-group product__option'>" +
      "<label class='product__option-label'>Material</label>" +
      "<div class='input-radio-label'>" +
      "<div class='input-radio-label__list'>" +
      "<label><input type='radio' name='material' />" +
      "<span>Metal</span></label>" +
      "<label><input type='radio' name='material' />" +
      "<span>Madera</span></label>" +
      "<label><input type='radio' name='material' />" +
      "<span>Plástico</span></label>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "<div class='form-group product__option'>" +
      "<label class='product__option-label' for='product-quantity'>Cantidad</label>" +
      "<div class='product__actions'>" +
      "<div class='product__actions-item'>" +
      "<div class='input-number product__quantity'>" +
      "<input id='product-quantity' class='input-number__input form-control form-control-lg' type='number' min='1' value='1' />" +
      "<div class='input-number__add'></div>" +
      "<div class='input-number__sub'></div>" +
      "</div>" +
      "</div>" +
      "<div class='product__actions-item product__actions-item--addtocart'>" +
      "<button class='btn btn-primary btn-lg'>" +
      "Solicitar Producto" +
      " </button>" +
      "</div>" +
      "<div class='product__actions-item product__actions-item--wishlist'>" +
      "<button type='button' class='btn btn-secondary btn-svg-icon btn-lg' data-toggle='tooltip' title='Wishlist'>" +
      "<svg width='16px' height='16px'>" +
      "<use xlink:href='images/sprite.svg#wishlist-16'></use>" +
      "</svg>" +
      " </button>" +
      "</div>" +
      "<div class='product__actions-item product__actions-item--compare'>" +
      "<button type='button' class='btn btn-secondary btn-svg-icon btn-lg' data-toggle='tooltip' title='Compare'>" +
      "<svg width='16px' height='16px'>" +
      "<use xlink:href='images/sprite.svg#compare-16'></use>" +
      "</svg>" +
      " </button>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "</form>" +
      "</div>" +
      "<div class='product__footer'>" +
      "<div class='product__tags tags'>" +
      "<div class='tags__list'>" +
      "<a href='catalogue.php'>Ver Catálogo</a>" +
      "</div>" +
      "</div>" +
      "</div>" +
      "</div>"
  );*/
}
