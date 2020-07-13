(function ($) {
  "use strict";

})(jQuery);

function guardarPedido() {
  $.post(
    "./peticiones/correo/envioSolicitudes.php?op=enviarSolicitudPedido",
    {
      nombres: $("#checkout-first-name").val(),
      apellidos: $("#checkout-last-name").val(),
      email: $("#checkout-email").val(),
      respuestaSolicitud: 1,
    },
    function (datos, status) {
      alert("enviado");
    }
  );
}
