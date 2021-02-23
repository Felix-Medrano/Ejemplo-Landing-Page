jQuery(document).ready(listo);

function listo(){
    // alert("La Pagina esta lista");
    jQuery(".hamb").click(function(e){
        e.preventDefault();
        jQuery("header .contenedor nav").toggleClass("open");
        jQuery(".hamb i").toggleClass("fa-times");
    });
    
    $("header .contenedor nav a").click(function(e){
        // alert("La Pagina esta lista");
        var click = $(this).attr("href");
        jQuery(".hamb i").toggleClass("fa-times");
        jQuery("header .contenedor nav").toggleClass("open");
        $("html, body").animate({
            "scrollTop": $(click).offset().top - 120
        });
    });
    $("a.boton").click(function(e){
        // alert("La Pagina esta lista");
        e.preventDefault();
    });
    // $("input.boton").click(function(e){
    //     alert("La Pagina esta lista");
    //     e.preventDefault();
    //     $("limpiar").prop("value","");
    // });
}