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
var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '5-6-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_5_6_7()",
        titulo: "<center><h5><span>Selecciona</span> la alternativa que define adecuadamente a la preposición.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "5-6-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '5-6-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_5_6_8()",
        titulo: "<center><h5><span>Relaciona</span> las clases de preposición con el ejemplo correspondiente.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "5-6-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '5-6-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_6_9()",
        titulo: "<center><h5><span>Selecciona</span> la alternativa que no es una característica de la preposición.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "5-6-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>