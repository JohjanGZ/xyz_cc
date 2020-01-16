<script type="text/javascript">

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
function Page_26() {
    start_26();
    inicio();
    count = 3;
}

function Page_27() {
    start_27();
    inicio();
    count = 3;
}

function Page_28() {
    start_28();
    inicio();
    count = 3;
}

var cant = 6;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 

function start_23() {
    $("#ventana").load(ruta + '3-4-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_3_4_23()",
        titulo: "<center><h5><span>Responde</span> las siguientes preguntas:</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-4-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '3-4-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_3_4_24()",
        titulo: "<center><h5><span>Responde</span> las siguientes preguntas:</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "3-4-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '3-4-25/index.php', {
        next: "Page_26()",
        procesar: "result_tipo_3_4_25()",
        titulo: "<center><h5><span>Observa</span> el gráfico y <span>selecciona</span> todas las oraciones que son correctas.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "3-4-25",
        nota: cal
    });
    return false;
};
function start_26() {
    $("#ventana").load(ruta + '3-4-26/index.php', {
        next: "Page_27()",
        procesar: "result_tipo_3_4_26()",
        titulo: "<center><h5><span>Observa</span> el gráfico y <span>responde</span>.</h5></center>",
        restaurar: "start_26()",
        dir: ruta,
        cod: "3-4-26",
        nota: cal
    });
    return false;
};

function start_27() {
    $("#ventana").load(ruta + '3-4-27/index.php', {
        next: "Page_28()",
        procesar: "result_tipo_3_4_27()",
        titulo: "<center><h5><span>Selecciona</span> el grafico circular que represente la indicación de cada enunciado. Ten en cuenta que cada círculo representa un total de 100 personas.</h5></center>",
        restaurar: "start_27()",
        dir: ruta,
        cod: "3-4-27",
        nota: cal
    });
    return false;
};

function start_28() {
    $("#ventana").load(ruta + '3-4-28/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_28()",
        titulo: "<center><h5><span>Selecciona</span> el diagrama que represente la indicación de cada enunciado. Ten en cuenta que cada círculo representa un total de 100 personas.</h5></center>",
        restaurar: "start_28()",
        dir: ruta,
        cod: "3-4-28",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>