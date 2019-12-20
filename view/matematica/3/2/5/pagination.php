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
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_24() {
    $("#ventana").load(ruta + '3-2-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_3_2_24()",
        titulo: "<center><h5><span>Observa</span> atentamente el gráfico de barras, <span>completa</span> la tabla de frecuencias y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "3-2-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '3-2-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_25()",
        titulo: "<center><h5><span>Observa</span> atentamente el gráfico de barras, <span>completa</span> la tabla de frecuencias y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "3-2-25",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>