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
function Page_23() {
    start_23();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_21() {
    $("#ventana").load(ruta + '3-4-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_1_4_21()",
        titulo: "<center><h5><span class='ftitulo'>Realiza</span> la descomposición de los siguientes números indicando  de cada uno el valor en unidades.<br> <span class='ftitulo'>Guíate</span> del ejemplo. </h5></center>", 
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-4-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '3-4-22/index.php', {
        next: "start_23()",
        procesar: "result_tipo_1_4_22()",
        titulo: "<center><h5><span class='ftitulo'>Realiza</span> la descomposición de los siguientes números indicando el valor posicional de cada una de sus cifras. <br> Guíate del ejemplo. </h5></center>", 
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-4-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '3-4-23/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_4_23()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la pelota que cuesta 43 soles.</h5></center>", 
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-4-23",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>