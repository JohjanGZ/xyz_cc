<script type="text/javascript">

function Page_12() {
    start_12();
    inicio();
    count = 3;
}
function Page_13() {
    start_13();
    inicio();
    count = 3;
}
function Page_14() {
    start_14();
    inicio();
    count = 3;
}
function Page_15() {
    start_15();
    inicio();
    count = 3;
}
function Page_16() {
    start_16();
    inicio();
    count = 3;
}
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


var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_12() {
    $("#ventana").load(ruta + '1-0-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_0_12()",
        titulo: "<center><h5><span>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-0-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-0-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_0_13()",
        titulo: "<center><h5><span>Cuenta</span> las figuras y <span>completa</span> el caudro indicando la cantidad de cada una.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-0-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '1-0-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_0_14()",
        titulo: "<center><h5><span>Cuenta</span> y <span>completa</span> la tabla indicando el número de las figuras encontradas.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-0-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '1-0-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_1_0_15()",
        titulo: "<center><h5><span>Cuenta</span> las figuras geométricas y <span>escribe</span> la cantidad de cada una.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-0-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '1-0-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_0_16()",
        titulo: "<center><h5><span>Cuenta</span> cada figura geométrica y <span>completa</span> el cuadro.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-0-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '1-0-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_0_17()",
        titulo: "<center><h5><span>Encuantra</span> las figuras y <span>escribe</span> la cantidad que hay de cada una.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-0-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '1-0-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_18()",
        titulo: "<center><h5><span>Observa</span> las figuras y <span>únelas</span> con sus respectivas partes.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-0-18",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>