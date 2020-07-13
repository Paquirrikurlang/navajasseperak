function setlocalStorage(paginaInicio) {
  localStorage.setItem("paginaInicio", paginaInicio);
}

function getlocalStorage(valor) {
  var paginaInicio = parseInt(localStorage.getItem(valor));
  return paginaInicio;
}

function generacionPaginador(numPaginasSoportadas, paginaInicio) {
  var htmlAtras = "",
    htmlAdelante = "",
    htmlPaginador = "";

  $(".products-view__pagination").empty();
  if (numPaginasSoportadas > 0) {
    htmlAtras =
      "<li onclick='atras(this)' class='page-item" +
      (paginaInicio == 1 ? " disabled" : "") +
      "' >" +
      "<a class='page-link page-link--with-arrow waves-effect' href='#' aria-label='Previous'>" +
      "<svg class='page-link__arrow page-link__arrow--left' aria-hidden='true' width='8px' height='13px'>" +
      "<use xlink:href='images/sprite.svg#arrow-rounded-left-8x13'></use>" +
      "</svg>" +
      "</a>" +
      "</li>";

    htmlAdelante =
      "<li onclick='adelante(this)'   class='page-item" +
      (paginaInicio == numPaginasSoportadas ? " disabled" : "") +
      "' >" +
      "<a class='page-link page-link--with-arrow waves-effect' href='#' aria-label='Next'>" +
      "<svg class='page-link__arrow page-link__arrow--right' aria-hidden='true' width='8px' height='13px'>" +
      "<use xlink:href='images/sprite.svg#arrow-rounded-right-8x13'></use>" +
      "</svg>" +
      "</a>" +
      "</li>";

    for (i = 0; i < numPaginasSoportadas; i++) {
      htmlPaginador =
        htmlPaginador +
        "<li onclick='paginador(this)' class='page-item " +
        (i + 1 == paginaInicio ? "active" : "") +
        "'>" +
        "<a class='page-link waves-effect' href='#'>" +
        (i + 1) +
        "</a>" +
        "</li>";
    }

    $(".products-view__pagination").append(
      "<ul class='pagination justify-content-center'>" +
        htmlAtras +
        htmlPaginador +
        htmlAdelante +
        "</ul>"
    );
  } else
    $(".products-view__pagination").html(
      "<h3>No se encontraron registros para esta búsqueda</h3>"
    );
}
