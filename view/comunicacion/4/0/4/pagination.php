<script type="text/javascript">
function Page_lectura_4_0_4_14() {
    start_lectura_4_0_4_14();
    inicio();
    count = 0;
}

function Page_14() {
    start_14();
    inicio();
    count = 3;
}

function Page_15() {
    start_15();
    inicio();
    count = 3;
}

function Page_16() {
    start_16();
    inicio();
    count = 3;
}

function Page_17() {
    start_17();
    inicio();
    count = 3;
}

var cant = 4;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_lectura_4_0_4_14() {
    $("#ventana").load(ruta + 'lectura4-0-4-14/index.php', {
        next: "Page_14()",
        procesar: "lectura4-0-4-14()",
        titulo: "<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar: "start_lectura_4_0_4_14()",
        dir: ruta,
        cod: "lectura4-0-4-14",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '4-0-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_4_0_14()",
        titulo: "<center><h5><span>Selecciona</span> las características físicas y de personalidad del genio.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "4-0-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '4-0-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_4_0_15()",
        titulo: "<center><h5><span>Selecciona</span> <i>Verdadero</i> si el enunciado es correcto o <i>Falso</i> si no lo es.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "4-0-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '4-0-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_16()",
        titulo: "<center><h5><span>Ordena</span> cada una de las promesas del genio según sucedieron.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "4-0-16",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>