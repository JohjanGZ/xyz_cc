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
    $("#ventana").load(ruta + '5-0-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_5_0_10()",
        titulo: "<center><h5><span>Observa</span> las siguientes palabras y ordénalas en la tabla adecuadamente.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "5-0-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '5-0-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_5_0_11()",
        titulo: "<center><h5><span>Organiza</span> los diptongos en la tabla según corresponda</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "5-0-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '5-0-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_12()",
        titulo: "<center><h5><span>Lee</span> el siguiente texto y selecciona los hiatos.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "5-0-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>