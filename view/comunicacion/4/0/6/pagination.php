<script type="text/javascript">
function Page_lectura_4_0_6_20() {
    start_lectura_4_0_6_20();
    inicio();
    count = 0;
}

function Page_20() {
    start_20();
    inicio();
    count = 3;
}

function Page_21() {
    start_21();
    inicio();
    count = 3;
}

function Page_22() {
    start_22();
    inicio();
    count = 3;
}

var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_lectura_4_0_6_20() {
    $("#ventana").load(ruta + 'lectura4-0-6-20/index.php', {
        next: "Page_20()",
        procesar: "lectura4-0-6-20()",
        titulo: "<center><h5><span>Observa</span> el folleto y <span>contesta</span> las preguntas.</h5></center>",
        restaurar: "start_lectura_4_0_6_20()",
        dir: ruta,
        cod: "lectura4-0-6-20",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '4-0-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_4_0_20()",
        titulo: "<center><h5><span>Completa</span> la siguiente ficha según el poema leído.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "4-0-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '4-0-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_4_0_21()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "4-0-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '4-0-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_22()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "4-0-22",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>