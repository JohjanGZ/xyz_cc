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

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

function Page_4() {
    start_4();
    inicio();
    count = 3;
}

function Page_5() {
    start_5();
    inicio();
    count = 3;
}

function Page_6() {
    start_6();
    inicio();
    count = 3;
}

function Page_7() {
    start_7();
    inicio();
    count = 3;
}

function Page_8() {
    start_8();
    inicio();
    count = 3;
}

function Page_9() {
    start_9();
    inicio();
    count = 3;
}

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
var cant = 18;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '3-3-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_3_3_1()",
        titulo: "<center><h5><span>Resuleve</span> las siguientes sustracciones:</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "3-3-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '3-3-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_3_2()",
        titulo: "<center><h5><span>Resuleve</span> las siguientes sustracciones:</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-3-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '3-3-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_3_3()",
        titulo: "<center><h5><span>Resuelve</span> la sustracciones y <span>comprueba</span> su resultado.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-3-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '3-3-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_3_4()",
        titulo: "<center><h5><span>Resuelve</span> la sustracciones y <span>comprueba</span> su resultado.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-3-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '3-3-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_3_5()",
        titulo: "<center><h5><span>Aplica</span> la notación desarrollada para resolver las sustracciones.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-3-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '3-3-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_3_6()",
        titulo: "<center><h5><span>Aplica</span> la notación desarrollada para resolver las sustracciones.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-3-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '3-3-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_3_7()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes operaciones combinadas:</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-3-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '3-3-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_3_8()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones combinadas según la ubicación de los paréntesis.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-3-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-3-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_3_9()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones y <span>aplica</span> la propiedad asociativa.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-3-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '3-3-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_3_10()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones y <span>aplica</span> la propiedad asociativa.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-3-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '3-3-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_3_11()",
        titulo: "<center><h5><span>Aplica</span> la propiedad conmutativa en las siguientes operaciones:</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-3-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '3-3-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_3_12()",
        titulo: "<center><h5><span>Aplica</span> la propiedad conmutativa en las siguientes operaciones:</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-3-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '3-3-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_3_13()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas aplicando los cuatro pasos correspondientes.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-3-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '3-3-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_3_14()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas aplicando los cuatro pasos correspondientes.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-3-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '3-3-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_15()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas aplicando los cuatro pasos correspondientes.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-3-15",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>