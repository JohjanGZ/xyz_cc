<script type="text/javascript">
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
var cant = 3;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_25() {
    $("#ventana").load(ruta + '3-2-25/index.php', {
        next: "Page_26()",
        procesar: "result_tipo_3_2_25()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes operaciones combinadas.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "3-2-25",
        nota: cal
    });
    return false;
};
function start_26() {
    $("#ventana").load(ruta + '3-2-26/index.php', {
        next: "Page_27()",
        procesar: "result_tipo_3_2_26()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones combinadas según la ubicación de los paréntesis.</h5></center>",
        restaurar: "start_26()",
        dir: ruta,
        cod: "3-2-26",
        nota: cal
    });
    return false;
};
function start_27() {
    $("#ventana").load(ruta + '3-2-27/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_27()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas aplicando los cuatro pasos correspondientes.</h5></center>",
        restaurar: "start_27()",
        dir: ruta,
        cod: "3-2-27",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>