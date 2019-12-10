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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_21() {
    $("#ventana").load(ruta + '3-3-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_3_3_21()",
        titulo: "<center><h5><span class='ftitulo'>Descubre </span> la regla de formación en las siguientes sucesiones y <span class='ftitulo'>selecciona</span> dentro de cada recuadro.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-3-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '3-3-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_22()",
        titulo: "<center><h5><span class='ftitulo'>Descubre</span> la regla de formación y luego <span class='ftitulo'>completa</span> las siguientes sucesiones:</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-3-22",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>