<script type="text/javascript">
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

var cant = 18;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_24() {
    $("#ventana").load(ruta + '1-6-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_6_24()",
        titulo: "<center><h5><span>Observa</span> el gráfico que hizo Saúl para contabilizar los juguetes que tiene y luego <span>completa</span>.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-6-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '1-6-25/index.php', {
        next: "Page_26()",
        procesar: "result_tipo_1_6_25()",
        titulo: "<center><h5><span>Observa</span> el siguiente gráfico que indica la venta de un día en una tienda y <span>responde</span>.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-6-25",
        nota: cal
    });
    return false;
};

function start_26() {
    $("#ventana").load(ruta + '1-6-26/index.php', {
        next: "Page_27()",
        procesar: "result_tipo_1_6_26()",
        titulo: "<center><h5><span>Observa</span> atentamente el gráfico de barras y luego <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_26()",
        dir: ruta,
        cod: "1-6-26",
        nota: cal
    });
    return false;
};

function start_27() {
    $("#ventana").load(ruta + '1-6-27/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_27()",
        titulo: "<center><h5><span>Observa</span> atentamente el gráfico de barras y luego <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_27()",
        dir: ruta,
        cod: "1-6-27",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>