(function () {
    "use strict";

    var cookieAlertNovedades = document.querySelector(".cookie-alertNovedades");
    var acceptCookiesNovedades = document.querySelector(".accept-cookiesNovedades");
    var denieCookiesNovedades = document.querySelector(".denie-cookiesNovedades");

    cookieAlertNovedades.offsetHeight;

    if (!getCookie("acceptCookiesNovedades")) {
        cookieAlertNovedades.classList.add("show");
    }

    acceptCookiesNovedades.addEventListener("click", function () {
        setCookie("acceptCookiesNovedades", true, 30);
        cookieAlertNovedades.classList.remove("show");
    });
    denieCookiesNovedades.addEventListener("click", function () {
        setCookie("acceptCookiesNovedades", false, 30);
        cookieAlertNovedades.classList.remove("show");
    });
})();

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

