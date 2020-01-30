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
    $("#ventana").load(ruta + '5-8-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_5_8_10()",
        titulo: "<center><h5><span>Selecciona</span> la alternativa que completa adecuadamente el siguiente enunciado: “Las palabras homófonas son…”.</h5></center>",
        restaurar: "start_10",
        dir: ruta,
        cod: "5-8-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '5-8-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_5_8_11()",
        titulo: "<center><h5><span>Selecciona</span> las palabras que completan adecuadamente los enunciados.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "5-8-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '5-8-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_8_12()",
        titulo: "<center><h5><span>Relaciona</span> las palabras con su significado correspondiente.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "5-8-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>