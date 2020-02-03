<script type="text/javascript">

function Page_1() {
    start_1();
    inicio();
    count = 3;
}

function Page_2() {
    start_2();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '5-0-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_5_0_1()",
        titulo: "<center><h5><span>Determina</span> por extensión los siguientes conjuntos. Para ello <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "5-0-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '5-0-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_2()",
        titulo: "<center><h5><span>Determina</span> por comprensión los siguientes conjuntos. Para ello <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "5-0-2",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>