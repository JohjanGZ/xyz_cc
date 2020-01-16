<script type="text/javascript">
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

var cant = 1;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_2() {
    $("#ventana").load(ruta + '3-3-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_3_2()",
        titulo: "<center><h5><span>Observa</span> atentamente el gráfico de barras y luego <span>completa</span> la tabla de frecuencia. </h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-3-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '3-3-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_3()",
        titulo: "<center><h5><span>Observa</span> atentamente el gráfico de barras y luego <span>completa</span> la tabla de frecuencia. </h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-3-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>