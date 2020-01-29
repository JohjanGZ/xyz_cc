<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}

function Page_2() {
    start_2();
    inicio();
    count = 3;
}

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '5-3-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_5_3_1()",
        titulo: "<center><h5><span>Selecciona</span> el enunciado que define el <i>slow food</i>.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "5-3-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '5-3-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_5_3_2()",
        titulo: "<center><h5><span>Selecciona</span> cuál es la profesión de la persona entrevistada.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "5-3-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '5-3-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_3_3()",
        titulo: "<center><h5><span>Selecciona</span> la afirmación adecuada sobre la entrevista a <i>Milagros Agurto</i>.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "5-3-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>