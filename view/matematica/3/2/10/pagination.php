<script type="text/javascript">
function Page_38() {
    start_38();
    inicio();
    count = 3;
}
function Page_39() {
    start_39();
    inicio();
    count = 3;
}
var cant = 2;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_38() {
    $("#ventana").load(ruta + '3-2-38/index.php', {
        next: "Page_39()",
        procesar: "result_tipo_3_2_38()",
        titulo: "<center><h5><span>Observa</span> atentamente el diagrama de barras y <span>completa</span> la tabla de frecuencias.</h5></center>",
        restaurar: "start_38()",
        dir: ruta,
        cod: "3-2-38",
        nota: cal
    });
    return false;
};
function start_39() {
    $("#ventana").load(ruta + '3-2-39/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_39()",
        titulo: "<center><h5><span>Observa</span> atentamente el diagrama de barras y <span>completa</span> la tabla de frecuencias.</h5></center>",
        restaurar: "start_39()",
        dir: ruta,
        cod: "3-2-39",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>