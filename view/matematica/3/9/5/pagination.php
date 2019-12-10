<script type="text/javascript">
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

var cant = 24;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_21() {
    $("#ventana").load(ruta + '1-9-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_1_9_21()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los espacios en blanco.<br> Alfredo va al campo para atrapar mariposas y colibrís.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-9-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '1-9-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_9_22()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los espacios en blanco.<br> Sofía va al estanque en donde hay truchas y suches. Ella pretende pescar a uno de estos peces para la cena.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-9-22",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>