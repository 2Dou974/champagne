var chCommon = {};

chCommon.preloader = function() {
    if (document.images) {
        var img1 = new Image();
        var img2 = new Image();
        var img3 = new Image();
        var img4 = new Image();
        var img5 = new Image();

        img1.src = "/wp-content/themes/champagne/img/mn_exploit_on.jpg";
        img2.src = "/wp-content/themes/champagne/img/mn_champagne_on.jpg";
        img3.src = "/wp-content/themes/champagne/img/mn_come_on.jpg";
        img4.src = "/wp-content/themes/champagne/img/mn_actu_on.jpg";
        img5.src = "/wp-content/themes/champagne/img/mn_contact_on.jpg";
    }
}
chCommon.readCookie = function(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
chCommon.getParameterValues = function(param) {
    var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < url.length; i++) {
        var urlparam = url[i].split('=');
        if (urlparam[0] == param) {
            return urlparam[1];
        }
    }
    return null;
}

$(function() {
    //check legal age
    $('.modalLegalAge .btn').off('click').on('click', function() {
        //add cookie oag a 1
        document.cookie = "oag=1;; path=/";
        $('.modalLegalAge').modal('hide');
    });
    if (chCommon.readCookie('oag') == null && chCommon.getParameterValues('oag') == null) {
        $('.modalLegalAge').modal({
            show: true,
            keyboard: false,
            backdrop: 'static'
        })
    }
    chCommon.preloader();
});