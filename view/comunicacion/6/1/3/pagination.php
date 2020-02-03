<script type="text/javascript">
function Page_7() {
    start_7();
    inicio();
    count = 3;
}

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

var cant = 5;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_7() {
    $("#ventana").load(ruta + '5-1-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_5_1_7()",
        titulo: "<center><h5><span>Selecciona</span> las preguntas que debe responder una noticia.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "5-1-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '5-1-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_5_1_8()",
        titulo: "<center><h5><span>Completa</span> los enunciados según corresponda con la narración de una noticia.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "5-1-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '5-1-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_1_9()",
        titulo: "<center><h5><span>Selecciona</span> la afirmación correcta acerca de la narración de una noticia.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "5-1-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>