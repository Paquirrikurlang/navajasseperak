(function ($) {
  "use strict";
  $(function () {
    debugger;
    var params = new URLSearchParams(location.search);
    var IdProducto = params.get("IdProducto");

    LoadDetalleProductoForm(IdProducto);
  });
})(jQuery);

function DetalleMultimedia(valor) {
  debugger;
  alert("probando");

  var TipoMultimedia = valor.attributes[0].value;

  /* 1 -> Videos, 2 ->Fotos */
  if (TipoMultimedia == "1") {
  } else {
  }
}

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
}
