<script type="text/javascript">
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
function start_19() {
    $("#ventana").load(ruta + '1-1-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_1_19()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> las figuras geométricas y <span class='ftitulo'>escribe</span> la cantidad de cada una.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-1-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '1-1-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_20()",
        titulo: "<center><h5> <span class='ftitulo'>Selecciona</span> las figuras que están construidas con líneas cerradas.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-1-20",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>