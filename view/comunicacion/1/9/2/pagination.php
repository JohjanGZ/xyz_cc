<script type="text/javascript">
function Page_lectura_9_2() {
    start_lectura_9_2();
    inicio();
    count = 3;
}

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

var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_lectura_9_2() {
    $("#ventana").load(ruta + 'lectura1-9-1-2/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_1_9_2()",
        titulo: "<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar: "start_lectura_9_2()",
        dir: ruta,
        cod: "lectura1-9-1-2",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '1-9-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_1_9_7()",
        titulo: "<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-9-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '1-9-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_9_8()",
        titulo: "<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-9-8",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>