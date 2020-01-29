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
    $("#ventana").load(ruta + '5-9-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_5_9_10()",
        titulo: "<center><h5><span>Selecciona</span> la afirmación correcta acerca del predicado.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "5-9-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '5-9-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_5_9_11()",
        titulo: "<center><h5><span>Relaciona</span> las partes del sujeto resaltadas en la oración.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "5-9-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '5-9-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_9_12()",
        titulo: "<center><h5><span>Organiza</span> las siguientes oraciones según la estructura adecuada del sujeto.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "5-9-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>