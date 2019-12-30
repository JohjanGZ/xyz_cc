<script type="text/javascript">
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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_20() {
    $("#ventana").load(ruta + '3-4-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_3_4_20()",
        titulo: "<center><h5><span>Responde</span> las siguientes preguntas:</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-4-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '3-4-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_3_4_21()",
        titulo: "<center><h5><span>Responde</span> las siguientes preguntas:</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-4-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '3-4-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_3_4_22()",
        titulo: "<center><h5><span>Observa</span> el gráfico y <span>selecciona</span> todas las oraciones que son correctas.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-4-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '3-4-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_3_4_23()",
        titulo: "<center><h5><span>Observa</span> el gráfico y <span>responde</span></h5></center>",
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
        titulo: "<center><h5><span>Selecciona</span> el diagrama que represente la indicación de cada enunciado. Ten en cuenta que cada círculo representa un total de 100 personas.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "3-4-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '3-4-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_25()",
        titulo: "<center><h5><span>Selecciona</span> el diagrama que represente la indicación de cada enunciado. Ten en cuenta que cada círculo representa un total de 100 personas.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "3-4-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>