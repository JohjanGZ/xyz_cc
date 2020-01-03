<script type="text/javascript">
function Page_lectura_4_4_7_1() {
    start_lectura_4_4_7_1();
    inicio();
    count = 0;
}

function Page_23() {
    start_23();
    inicio();
    count = 3;
}

function Page_24() {
    start_24();
    inicio();
    count = 3;
}

function Page_25() {
    start_25();
    inicio();
    count = 3;
}

var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_lectura_4_4_7_1() {
    $("#ventana").load(ruta + 'lectura4-4-7-1/index.php', {
        next: "Page_23()",
        procesar: "lectura1-1-1-1()",
        titulo: "<center><h5><span>Observa</span> el folleto y <span>contesta</span> las preguntas.</h5></center>",
        restaurar: "start_lectura_4_4_7_1()",
        dir: ruta,
        cod: "lectura4-4-7-1",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '4-4-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_4_4_23()",
        titulo: "<center><h5><span>Completa</span> la siguiente ficha según el poema leído.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "4-4-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '4-4-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_4_4_24()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "4-4-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '4-4-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_25()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "4-4-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>