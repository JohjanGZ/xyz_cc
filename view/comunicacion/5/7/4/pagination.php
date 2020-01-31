<script type="text/javascript">
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

function Page_12() {
    start_12();
    inicio();
    count = 3;
}
var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '5-7-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_5_7_10()",
        titulo: "<center><h5><span>Selecciona</span> la alternativa que complete adecuadamente el siguiente enunciado.</h5></center>",
        restaurar: "start_10",
        dir: ruta,
        cod: "5-7-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '5-7-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_5_7_11()",
        titulo: "<center><h5><span>Relaciona</span> los tipos de adverbio con los enunciados correspondientes.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "5-7-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '5-7-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_7_12()",
        titulo: "<center><h5><span>Selecciona</span> la alternativa que completa adecuadamente los siguientes enunciados.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "5-7-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>