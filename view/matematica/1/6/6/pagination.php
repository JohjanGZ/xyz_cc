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
var cant = 25;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_24() {
    $("#ventana").load(ruta + '1-6-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_6_24()",
        titulo: "<center><h5><span class='ftitulo'>Aplica</span> la propiedad conmutativa y <span class='ftitulo'>resuelve</span> las operaciones.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-6-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '1-6-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_25()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> los siguientes problemas:</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-6-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>