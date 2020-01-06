<script type="text/javascript">

function Page_20() {
    start_20();
    inicio();
    count = 3;
}
function Page_21() {
    start_21();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_20() {
    $("#ventana").load(ruta + '1-0-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_1_0_20()",
        titulo: "<center><h5><span>Elige</span> los elementos y <span>agrupa</span> dos conjuntos.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-0-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '1-0-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_21()",
        titulo: "<center><h5><span>Observa</span> los elementos y <span>forma</span> conjuntos.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-0-21",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>