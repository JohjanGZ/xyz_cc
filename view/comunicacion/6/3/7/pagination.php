<script type="text/javascript">
function Page_19() {
    start_19();
    inicio();
    count = 3;
}

function Page_20() {
    start_20();
    inicio();
    count = 3;
}

function Page_21() {
    start_21();
    inicio();
    count = 3;
}

var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_19() {
    $("#ventana").load(ruta + '5-3-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_5_3_19()",
        titulo: "<center><h5><span>Relaciona</span> con líneas las partes de la entrevista con su definición correspondiente.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "5-3-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '5-3-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_5_3_20()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "5-3-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '5-3-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_3_21()",
        titulo: "<center><h5><span>Selecciona</span> la afirmación correcta acerca de los elementos de una entrevista.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "5-3-21",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>