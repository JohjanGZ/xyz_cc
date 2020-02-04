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

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 20do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_20() {
    $("#ventana").load(ruta + '5-0-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_5_0_20()",
        titulo: "<center><h5><span>Observa</span> las siguientes rectas. Luego, <span>relacionalas</span> si son secantes o paralelas según corresponda.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "5-0-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '5-0-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_21()",
        titulo: "<center><h5><span>Observa</span> las siguientes rectas. Luego, <span>selecciona</span> de la lista si son paralelas o secantes según corresponda.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "5-0-21",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>