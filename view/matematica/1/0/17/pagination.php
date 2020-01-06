<script type="text/javascript">

function Page_28() {
    start_28();
    inicio();
    count = 3;
}
function Page_29() {
    start_29();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_28() {
    $("#ventana").load(ruta + '1-0-28/index.php', {
        next: "Page_29()",
        procesar: "result_tipo_1_0_28()",
        titulo: "<center><h5><span>Observa</span> las prendas de vestir y <span>selecciona</span> en los casilleros según la cantidad que encuentres de cada prenda.</h5></center>",
        restaurar: "start_28()",
        dir: ruta,
        cod: "1-0-28",
        nota: cal
    });
    return false;
};
function start_29() {
    $("#ventana").load(ruta + '1-0-29/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_29()",
        titulo: "<center><h5><span>Observa</span> los útiles escolares y <span>selecciona</span> en los casilleros según la cantidad que encuentres de cada elemento.</h5></center>",
        restaurar: "start_29()",
        dir: ruta,
        cod: "1-0-29",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>