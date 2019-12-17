<script type="text/javascript">

function Page_lectura_3_8_6_1() {
    start_lectura_3_8_6_1();
    inicio();
    count = 0;
}

function Page_18() {
    start_18();
    inicio();
    count = 3;
}
function Page_19() {
    start_19();
    inicio();
    count = 3;
}

var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_lectura_3_8_6_1() {
    $("#ventana").load(ruta + 'lectura3-8-6-1/index.php', {
        next: "Page_18()",
        procesar: "lectura3-8-6-1()",
        titulo: "<center><h5><span>Lee</span> atentamente y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_lectura_3_8_6_1()",
        dir: ruta,
        cod: "lectura3-8-6-1",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '3-8-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_3_8_18()",
        titulo: "<center><h5><span>Arrastra</span> los elementos de la noticia en los recuadros correspondientes.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "3-8-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '3-8-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_8_19()",
        titulo: "<center><h5><span>Selecciona la respuesta correcta</span>.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "3-8-19",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>