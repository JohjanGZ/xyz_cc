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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_24() {
    $("#ventana").load(ruta + '1-5-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_5_24()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> atentamente el gráfico de barras y luego <span class='ftitulo'>responde</span> las preguntas.</h5></center>", 
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-5-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '1-5-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_5_25()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> atentamente el gráfico de barras y luego <span class='ftitulo'>responde</span> las preguntas.</h5></center>", 
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-5-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>