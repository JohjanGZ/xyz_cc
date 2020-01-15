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

function Page_19() {
    start_19();
    inicio();
    count = 3;
}
var cant = 10;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_10() {
    $("#ventana").load(ruta + '3-1-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_1_10()",
        titulo: "<center><h5>Se compraron 6 cajas de chupetines para la fiesta. ¿Cuántos chupetines se compraron?</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-1-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '3-1-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_1_11()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-1-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '3-1-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_1_12()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-1-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '3-1-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_1_13()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-1-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '3-1-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_1_14()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-1-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '3-1-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_1_15()",
        titulo: "<center><h5><span>Arrastra</span> los números y <span>ubícalos</span> donde corresponden.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-1-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '3-1-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_3_1_16()",
        titulo: "<center><h5><span>Relaciona</span> las multiplicaciones con su respectivo resultado.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-1-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '3-1-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_3_1_17()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-1-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '3-1-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_3_1_18()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "3-1-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '3-1-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_19()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "3-1-19",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>