(function ($) {
  "use strict";
  $(function () {
    var params = new URLSearchParams(location.search);
    var IdGaleria = params.get("IdGaleria");
    LoadVideos(IdGaleria);
  });
})(jQuery);

function LoadVideos(IdGaleria) {
  debugger;
  var resultadoMultimedia = JSON.parse(
    localStorage.getItem("resultadoMultimedia")
  );

  resultadoContenido = resultadoMultimedia.filter(
    (data) => data.GaleriaId == IdGaleria
  );

  //$(".container-fluid").append();
  var videos = document.getElementById("videos");

  var subDiv = document.createElement("div");
  subDiv.className = "demo-gallery dark";
  var ul = document.createElement("ul");
  ul.className = "list-unstyled row";
  ul.id = "html5-videos-videojs";

  for (i = 0; i < resultadoContenido.length; i++) {
    var source = document.createElement("source");
    var src = document.createAttribute("src");
    src.value = resultadoContenido[i].RutaVideo;
    var type = document.createAttribute("type");
    type.value = "video/mp4";
    source.setAttributeNode(src);
    source.setAttributeNode(type);

    var video = document.createElement("video");
    video.className = "lg-video-object lg-html5 video-js vjs-default-skin";
    var poster = document.createAttribute("poster");
    var controls = document.createAttribute("controls");
    var preload = document.createAttribute("preload");
    poster.value = resultadoContenido[i].RutaImagen;
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

  for (i = 0; i < resultadoContenido.length; i++) {
    var imgBoton = document.createElement("img");
    var srcimgBoton = document.createAttribute("src");
    srcimgBoton.value = "./images/buttons/play-button.png";
    imgBoton.setAttributeNode(srcimgBoton);

    var imgVideo = document.createElement("img");
    var srcimgVideo = document.createAttribute("src");
    srcimgVideo.value = resultadoContenido[i].RutaImagen;
    imgVideo.setAttributeNode(srcimgVideo);
    imgVideo.className = "img-responsive";

    var div = document.createElement("div");
    div.className = "demo-gallery-poster";

    var a = document.createElement("a");
    var srca = document.createAttribute("href");
    srca.value = "";
    a.setAttributeNode(srca);

    var li = document.createElement("li");
    li.className = "col-12 col-md-3 galeria__video";
    var data_sub_html = document.createAttribute("data-sub-html");
    data_sub_html.value = "<h4>" + resultadoContenido[i].Titulo + "</h4>";
    ("<h4>CGI Animated Short HD: Student Academy Award Winning PeckPocketed by Kevin Herron</h4>");
    li.setAttributeNode(data_sub_html);
    var data_poster = document.createAttribute("data-poster");
    data_poster.value = resultadoContenido[i].RutaImagen;
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
