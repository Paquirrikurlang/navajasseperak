var paginaInicio = 1,
  numeroDatosRequeridos = 0,
  IdGaleria = 0;

(function ($) {
  "use strict";
  $(function () {
    var params = new URLSearchParams(location.search);
    IdGaleria = params.get("IdGaleria");

    var numPaginasSoportadas = paginasSoportadas(
      parseInt($("#cboCantidadSolicitada").val()),
      IdGaleria
    );
    setlocalStorage(paginaInicio);
    LoadVideos(IdGaleria);
    generacionPaginador(numPaginasSoportadas, paginaInicio);
  });
})(jQuery);

function LoadVideos(IdGaleria) {
  var resultadoMultimedia = JSON.parse(
    localStorage.getItem("resultadoMultimedia")
  );

  resultadoMultimedia = resultadoMultimedia.filter(
    (data) => data.GaleriaId == IdGaleria
  );

  var paginaInicioIntra = getlocalStorage("paginaInicio");
  numeroDatosRequeridos = parseInt($("#cboCantidadSolicitada").val());

  var inicio = numeroDatosRequeridos * (paginaInicioIntra - 1);
  var fin = numeroDatosRequeridos * paginaInicioIntra;
  var cargaFinal = resultadoMultimedia.slice(inicio, fin);
  $("#videos").empty();
  //$(".container-fluid").append();
  var videos = document.getElementById("videos");

  var subDiv = document.createElement("div");
  subDiv.className = "demo-gallery dark";
  var ul = document.createElement("ul");
  ul.className = "list-unstyled row";
  ul.id = "html5-videos-videojs";

  for (i = 0; i < cargaFinal.length; i++) {
    var source = document.createElement("source");
    var src = document.createAttribute("src");
    src.value = cargaFinal[i].RutaVideo;
    var type = document.createAttribute("type");
    type.value = "video/mp4";
    source.setAttributeNode(src);
    source.setAttributeNode(type);

    var video = document.createElement("video");
    video.className = "lg-video-object lg-html5 video-js vjs-default-skin";
    var poster = document.createAttribute("poster");
    var controls = document.createAttribute("controls");
    var preload = document.createAttribute("preload");
    poster.value = cargaFinal[i].RutaImagen;
    controls.value = "";
    preload.value = "none";
    video.setAttributeNode(poster);
    video.setAttributeNode(controls);
    video.setAttributeNode(preload);

    var div = document.createElement("div");
    div.style.display = "none";
    div.id = "videojs" + (i + 1);

    video.appendChild(source);
    div.appendChild(video);

    videos.appendChild(div);
  }

  for (i = 0; i < cargaFinal.length; i++) {
    var imgBoton = document.createElement("img");
    var srcimgBoton = document.createAttribute("src");
    srcimgBoton.value = "./images/buttons/play-button.png";
    imgBoton.setAttributeNode(srcimgBoton);

    var imgVideo = document.createElement("img");
    var srcimgVideo = document.createAttribute("src");
    srcimgVideo.value = cargaFinal[i].RutaImagen;
    imgVideo.setAttributeNode(srcimgVideo);
    imgVideo.className = "img-responsive";

    var div = document.createElement("div");
    div.className = "demo-gallery-poster";

    var a = document.createElement("a");
    var srca = document.createAttribute("href");
    srca.value = "";
    a.setAttributeNode(srca);

    var li = document.createElement("li");
    li.className = "col-6 col-lg-3 galeria__video";
    var data_sub_html = document.createAttribute("data-sub-html");
    data_sub_html.value = "<h4>" + cargaFinal[i].Titulo + "</h4>";
    ("<h4>CGI Animated Short HD: Student Academy Award Winning PeckPocketed by Kevin Herron</h4>");
    li.setAttributeNode(data_sub_html);
    var data_poster = document.createAttribute("data-poster");
    data_poster.value = cargaFinal[i].RutaImagen;
    li.setAttributeNode(data_poster);
    var data_html = document.createAttribute("data-html");
    data_html.value = "#videojs" + (i + 1);
    li.setAttributeNode(data_html);

    div.appendChild(imgBoton);
    a.appendChild(imgVideo);
    a.appendChild(div);
    li.appendChild(a);
    ul.appendChild(li);
    subDiv.appendChild(ul);
  }

  videos.appendChild(subDiv);
}

$("#cboCantidadSolicitada").change(function () {
  var paginaInicioIntra = getlocalStorage("paginaInicio");
  LoadVideos(IdGaleria);
  var numPaginasSoportadas = paginasSoportadas(
    parseInt($("#cboCantidadSolicitada").val()),
    IdGaleria
  );
  generacionPaginador(numPaginasSoportadas, paginaInicioIntra);
});

function paginasSoportadas(numeroDatosRequeridos, IdGaleria) {
  var resultado = JSON.parse(localStorage.getItem("resultadoMultimedia"));

  resultado = resultado.filter((data) => data.GaleriaId == IdGaleria);

  var numPaginasSoportadas = parseInt(resultado.length / numeroDatosRequeridos);
  if (resultado.length % numeroDatosRequeridos) numPaginasSoportadas++;
  return numPaginasSoportadas;
}

function atras(valor) {
  var paginaInicioIntra = getlocalStorage("paginaInicio");
  paginaInicioIntra--;
  var numPaginasSoportadas = paginasSoportadas(
    parseInt($("#cboCantidadSolicitada").val()),
    IdGaleria
  );
  if (paginaInicioIntra <= 0) paginaInicioIntra = 1;
  setlocalStorage(paginaInicioIntra);
  LoadVideos(IdGaleria);
  generacionPaginador(numPaginasSoportadas, paginaInicioIntra);
}

function adelante(valor) {
  var paginaInicioIntra = getlocalStorage("paginaInicio");
  paginaInicioIntra++;
  var numPaginasSoportadas = paginasSoportadas(
    parseInt($("#cboCantidadSolicitada").val()),
    IdGaleria
  );
  if (paginaInicioIntra >= numPaginasSoportadas)
    paginaInicioIntra = numPaginasSoportadas;

  setlocalStorage(paginaInicioIntra);
  LoadVideos(IdGaleria);
  generacionPaginador(numPaginasSoportadas, paginaInicioIntra);
}

function paginador(valor) {
  var paginaInicioIntra = parseInt(valor.firstElementChild.text);
  var numPaginasSoportadas = paginasSoportadas(
    parseInt($("#cboCantidadSolicitada").val()),
    IdGaleria
  );
  if (paginaInicioIntra >= numPaginasSoportadas)
    paginaInicioIntra = numPaginasSoportadas;

  setlocalStorage(paginaInicioIntra);
  LoadVideos(IdGaleria);
  generacionPaginador(numPaginasSoportadas, paginaInicioIntra);
}
