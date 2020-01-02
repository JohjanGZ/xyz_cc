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
var cant = 18;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '3-5-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_3_5_1()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes divisiones:</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "3-5-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '3-5-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_5_2()",
        titulo: "<center><h5><span>Completa</span> las tablas.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-5-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '3-5-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_5_3()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes divisiones:</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-5-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '3-5-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_5_4()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes divisiones:</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-5-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '3-5-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_5_5()",
        titulo: "<center><h5><span>Selecciona</span> verdadero o falso según corresponda.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-5-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '3-5-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_5_6()",
        titulo: "<center><h5><span>Selecciona</span> verdadero o falso según corresponda.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-5-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '3-5-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_5_7()",
        titulo: "<center><h5><span>Completa</span> las tablas.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-5-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '3-5-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_5_8()",
        titulo: "<center><h5><span>Relaciona</span> cada división con su resultado correcto.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-5-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-5-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_5_9()",
        titulo: "<center><h5><span>Señala</span> la respuesta correcta de las siguientes operaciones:</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-5-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '3-5-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_5_10()",
        titulo: "<center><h5><span>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-5-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '3-5-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_5_11()",
        titulo: "<center><h5><span>Relaciona</span> la fracción con su correcta representación gráfica. </h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-5-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '3-5-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_5_12()",
        titulo: "<center><h5><span>Escribe</span> la fracción que corresponda a cada gráfico.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-5-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '3-5-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_5_13()",
        titulo: "<center><h5><span>Escribe</span> la fracción que corresponda a cada gráfico.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-5-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '3-5-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_5_14()",
        titulo: "<center><h5><span>Selecciona</span> cómo se leen las siguientes fracciones:</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-5-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '3-5-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_5_15()",
        titulo: "<center><h5><span>Selecciona</span> la fracción que corresponda a la siguiente representación gráfica:  </h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-5-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '3-5-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_3_5_16()",
        titulo: "<center><h5><span>Selecciona</span> la fracción que corresponda a la siguiente representación gráfica:  </h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-5-16",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>