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
    $("#ventana").load(ruta + '5-6-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_5_6_10()",
        titulo: "<center><h5><span>Observa</span> las palabras y <span>colócalas</span> en la tabla según corresponda.</h5></center>",
        restaurar: "start_10",
        dir: ruta,
        cod: "5-6-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '5-6-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_5_6_11()",
        titulo: "<center><h5><span>Selecciona</span> la regla que corresponde con el uso de la “y” en verbos.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "5-6-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '5-6-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_6_12()",
        titulo: "<center><h5><span>Selecciona</span> la alternativa que completa adecuadamente el enunciado propuesto.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "5-6-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>