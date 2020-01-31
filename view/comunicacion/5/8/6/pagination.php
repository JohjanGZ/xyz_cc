<script type="text/javascript">
function Page_16() {
    start_16();
    inicio();
    count = 3;
}

function Page_17() {
    start_17();
    inicio();
    count = 3;
}

function Page_18() {
    start_18();
    inicio();
    count = 3;
}
var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_16() {
    $("#ventana").load(ruta + '5-8-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_5_8_16()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "5-8-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '5-8-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_5_8_17()",
        titulo: "<center><h5><span>Selecciona</span> la alternativa que indica si los enunciados son verdaderos o falsos acerca de la presentación texto argumentativo.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "5-8-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '5-8-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_8_18()",
        titulo: "<center><h5><span>Selecciona</span> la afirmación incorrecta sobre el tema.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "5-8-18",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>