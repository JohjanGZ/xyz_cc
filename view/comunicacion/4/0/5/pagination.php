<script type="text/javascript">
function Page_lectura_4_0_5_17() {
    start_lectura_4_0_5_17();
    inicio();
    count = 0;
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

function Page_19() {
    start_19();
    inicio();
    count = 3;
}

var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_lectura_4_0_5_17() {
    $("#ventana").load(ruta + 'lectura4-0-5-17/index.php', {
        next: "Page_17()",
        procesar: "lectura4-0-5-17()",
        titulo: "<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar: "start_lectura_4_0_5_17()",
        dir: ruta,
        cod: "lectura4-0-5-17",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '4-0-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_4_0_17()",
        titulo: "<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "4-0-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '4-0-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_4_0_18()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "4-0-18",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '4-0-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_19()",
        titulo: "<center><h5><span>Selecciona</span> aquello que se infiere a partir del enunciado resaltado.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "4-0-19",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>