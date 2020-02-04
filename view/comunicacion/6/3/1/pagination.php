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
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_1() {
    $("#ventana").load(ruta + '6-3-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_6_3_1()",
        titulo: "<center><h5><span>Identifica</span> la estructura del siguiente cuadro de doble entrada</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "6-3-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '6-3-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_3_2()",
        titulo: "<center><h5><span>Ordena</span> en el orden correspondiente los pasos para elaborar un cuadro de doble entrada.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "6-3-2",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>