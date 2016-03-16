(function($){

    // SKIN Select
    $('.spin-icon').click(function () {
       $(".theme-config-box").toggleClass("show");
    });
    var res = document.cookie.replace("fondo=", "");
   $("#page-wrapper").addClass(res);
    // Default skin
    $('.s-skin-0').click(function () {
        $("#page-wrapper").removeClass("micss-1");
        $("#page-wrapper").removeClass("micss-2");
        $("#page-wrapper").removeClass("micss-3");
        $("#page-wrapper").addClass("micss");
        var fondo = "micss";
        caduca = "31 Dec 2020 23:59:59 GMT"
        document.cookie = "fondo="+fondo+";expires="+caduca;
    });

    
    $('.s-skin-1').click(function () {
        $("#page-wrapper").removeClass("micss");
        $("#page-wrapper").removeClass("micss-2");
        $("#page-wrapper").removeClass("micss-3");
        $("#page-wrapper").addClass("micss-1");
         var fondo = "micss-1";
         caduca = "31 Dec 2020 23:59:59 GMT"
        document.cookie = "fondo="+fondo+";expires="+caduca;
     });

    
    $('.s-skin-2').click(function () {
        $("#page-wrapper").removeClass("micss");
        $("#page-wrapper").removeClass("micss-1");
        $("#page-wrapper").removeClass("micss-3");
        $("#page-wrapper").addClass("micss-2");
        var fondo = "micss-2";
         caduca = "31 Dec 2020 23:59:59 GMT"
        document.cookie = "fondo="+fondo+";expires="+caduca;
    });
    $('.s-skin-3').click(function () {
        $("#page-wrapper").removeClass("micss");
        $("#page-wrapper").removeClass("micss-1");
        $("#page-wrapper").removeClass("micss-2");
        $("#page-wrapper").addClass("micss-3");
        var fondo = "micss-3";
         caduca = "31 Dec 2020 23:59:59 GMT"
        document.cookie = "fondo="+fondo+";expires="+caduca;
    });

})(jQuery);
