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

function Page_23() {
    start_23();
    inicio();
    count = 3;
}

function Page_24() {
    count = 3;
    start_24();
    inicio();
}
function Page_25() {
    count = 3;
    start_25();
    inicio();
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_21() {
    $("#ventana").load(ruta + '2-0-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_2_0_21()",
        titulo: "<center><h5><span>Completa</span> las siguientes secuencias gráficas ordenando las figuras y acertar dichas secuencias:</center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "2-0-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '2-0-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_2_0_22()",
        titulo: "<center><h5><span>Completa</span> las siguientes secuencias gráficas ordenando las figuras y acertar dichas secuencias:</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "2-0-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '2-0-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_2_0_23()",
        titulo: "<center><h5><span>Completa</span> las siguientes secuencias gráficas ordenando las figuras y acertar dichas secuencias:</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "2-0-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '2-0-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_2_0_24()",
        titulo: " <center><h5><span>Completa</span> las siguientes secuencias gráficas ordenando las figuras y acertar dichas secuencias:</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "2-0-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '2-0-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_0_25()",
        titulo: "<center><h5><span>Completa</span> las siguientes secuencias gráficas ordenando las figuras y acertar dichas secuencias:</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-0-25",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>