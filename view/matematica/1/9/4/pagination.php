<script type="text/javascript">
function Page_18() {
    start_18();
    inicio();
    count = 3;
}
function Page_19() {
    start_19();
    inicio();
    count = 3;
}
function Page_20() {
    start_20();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_18() {
    $("#ventana").load(ruta + '1-9-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_9_18()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> la imagen y <span class='ftitulo'>relaciona</span> la posición de cada auto.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-9-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '1-9-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_9_19()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los lugares que ocupan los siguientes animalitos. Luego <span class='ftitulo'>completa</span> la tabla de posiciones con sus nombres.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-9-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '1-9-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_9_20()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los lugares que ocupan los siguientes animalitos. Luego <span class='ftitulo'>completa</span> la tabla de posiciones con sus nombres.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-9-20",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>