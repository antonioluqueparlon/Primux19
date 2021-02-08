(function () {
    "use strict";

    var cookieAlert = $(".cookiealert");
    var acceptCookies = $(".acceptcookies");

    if (!cookieAlert) {
       return;
    }
    cookieAlert.offsetHeight; 
    if (!getCookie("acceptCookies")) {
        $(".cookiealert").modal("show");
    }
    // When clicking on the agree button, create a 1 year
    // cookie to remember user's choice and close the banner
    //acceptCookies.click(function () {
    acceptCookies.click(function () {
        setCookie("acceptCookies", true, 365);
        $(".cookiealert").modal("hide");
    });

    // Cookie functions from w3schools
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
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
})();



