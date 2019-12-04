<script type="text/javascript">
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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_15() {
    $("#ventana").load(ruta + '1-6-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_1_6_15()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> cada espacio en blanco usando las palabras ‘más’, ‘menos’ o ‘igual’ según corresponda.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-6-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '1-6-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_6_16()",
        titulo: "<center><h5><span class='ftitulo'>Responde</span> en el espacio asignado.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-6-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '1-6-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_6_17()",
        titulo: "<center><h5><span class='ftitulo'>Responde</span> en el espacio asignado.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-6-17",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>