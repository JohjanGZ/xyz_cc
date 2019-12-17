<script type="text/javascript">

function Page_8() {
    start_8();
    inicio();
    count = 3;
}
function Page_9() {
    start_9();
    inicio();
    count = 3;
}
function Page_10() {
    start_10();
    inicio();
    count = 3;
}
function Page_11() {
    start_11();
    inicio();
    count = 3;
}

var cant = 4;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_8() {
    $("#ventana").load(ruta + '3-8-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_8_8()",
        titulo: "<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> sus respectivos nombres.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-8-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '3-8-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_8_9()",
        titulo: "<center><h5><span>Agrupa</span> las palabras cuyos nombres contengan las sílabas <i>-gia, -gio, geo-</i>.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-8-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '3-8-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_8_10()",
        titulo: "<center><h5><span>Completa</span> los espacios en blanco utilizando las letras <i>j</i> y <i>g</i>.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-8-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '3-8-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_8_11()",
        titulo: "<center><h5><span>Busca</span> en la sopa de letras las palabras con <i>j</i> y <i>g</i>.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-8-11",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>