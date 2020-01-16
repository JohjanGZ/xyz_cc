<script type="text/javascript">
function Page_17() {
    start_17();
    inicio();
    count = 3;
}
function Page_18() {
    start_18();
    inicio();
    count = 3;
}
function Page_19() {
    start_19();
    inicio();
    count = 3;
}
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
var cant = 8;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_17() {
    $("#ventana").load(ruta + '3-2-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_3_2_17()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes sustracciones.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-2-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '3-2-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_3_2_18()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes sustracciones.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "3-2-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '3-2-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_3_2_19()",
        titulo: "<center><h5><span>Resuelve</span> las sustracción y <span>comprueba</span> su resultado.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "3-2-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '3-2-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_3_2_20()",
        titulo: "<center><h5><span>Resuelve</span> las sustracción y <span>comprueba</span> su resultado.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-2-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '3-2-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_3_2_21()",
        titulo: "<center><h5><span>Aplica</span> la notación desarrollada para resolver las sustracciones.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-2-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '3-2-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_3_2_22()",
        titulo: "<center><h5><span>Aplica</span> la notación desarrollada para resolver las sustracciones.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-2-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '3-2-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_3_2_23()",
        titulo: "<center><h5><span>Completa</span> la siguiente tabla.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-2-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '3-2-24/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_24()",
        titulo: "<center><h5><span>Resuelve</span> las sustracciones y <span>completa</span> el crucinúmeros.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "3-2-24",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>