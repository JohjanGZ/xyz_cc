<script type="text/javascript">

function Page_10() {
    start_10();
    inicio();
    count = 3;
}

function Page_11() {
    start_11();
    inicio();
    count = 3;
}

function Page_12() {
    start_12();
    inicio();
    count = 3;
}


var cant = 3;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 10do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '4-3-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_4_3_10()",
        titulo: "<center><h5><span>Observa</span> las figuras y <span>verifica</span> si son polígonos o no lo son, para ello <span>arrástralas</span> a los recuadros según corresponda.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "4-3-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '4-3-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_4_3_11()",
        titulo: "<center><h5><span>Resalta</span> los polígonos que tienen de 3 a 4 vértices.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "4-3-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '4-3-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_3_12()",
        titulo: "<center><h5><span>Resalta</span> los polígonos que tienen de 6 a más lados.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "4-3-12",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>