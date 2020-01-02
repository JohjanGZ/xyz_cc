|<script type="text/javascript">

function Page_22() {
    start_22();
    inicio();
    count = 3;
}
function Page_23() {
    start_23();
    inicio();
    count = 3;
}
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



var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_22() {
    $("#ventana").load(ruta + '2-9-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_2_9_22()",
        titulo: "<center><h5>Anaís encontró en un cofre un grupo de fichas que tienen diseños distintos. <span>Completa</span> los dos gráficos de barras según su diseño o forma, colocando un aspa (x) en los cuadraditos correspondientes.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "2-9-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '2-9-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_2_9_23()",
        titulo: "<center><h5><span>Completa</span> los cuadrados mágicos.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "2-9-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '2-9-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_2_9_24()",
        titulo: "<center><h5><span>Completa</span> los cuadrados mágicos.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "2-9-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '2-9-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_9_25()",
        titulo: "<center><h5><span>Completa</span> los cuadrados mágicos.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-9-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>