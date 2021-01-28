(function () {
  "use strict";

  // Localizamos a los actores implicados.
  var cookieAlert = document.querySelector(".cookiealert"); // El contenedor de la alerta
  var acceptCookies = document.querySelector(".acceptcookies"); // Botón para aceptar el comportamiento
  var rejectCookie = document.querySelector("#rejectcookie"); // Botón para rechazar el comportamiento

  // Si no se encuentra el contenedor, directamente terminamos
  if (!cookieAlert) {
    return;
  }

  // Buscamos la cookie "acceptCookies", si no está en el cliente decidimos mostrar el contenedor de la alerta
  cookieAlert.offsetHeight;
  if (!getCookie("acceptCookies")) {
    $(".cookieAlert").modal("show");
  }

  // Evento al botón de "aceptar el comportamiento". Cuando se pulse se crea una cookie con una validez de 365 días y valor "true"
  // Además, ya que el usuario ha decidido que siempre quiere ir directamente a la página de "login", le redirijimos
  acceptCookies.click(function () {
    setCookie("acceptCookies", true, 365);
    $(".cookiealert").modal("hide");
  });

  // Funciones set y get para establecer y obtener cookies del sistema, extraídas de W3Schools

  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000); // tiempo que tarda en expirar
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

 
})();
