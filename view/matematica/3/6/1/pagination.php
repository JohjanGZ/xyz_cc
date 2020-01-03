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
var cant = 18;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '3-6-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_3_6_1()",
        titulo: "<center><h5><span>Completa</span> las tablas.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "3-6-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '3-6-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_6_2()",
        titulo: "<center><h5><span>Relaciona</span> la fracción con su representación gráfica. </h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-6-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '3-6-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_6_3()",
        titulo: "<center><h5><span>Relaciona</span> la fracción con su representación gráfica. </h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-6-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '3-6-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_6_4()",
        titulo: "<center><h5><span>Observa</span> el gráfico y luego <span>completa</span> la tabla.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-6-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '3-6-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_6_5()",
        titulo: "<center><h5><span>Observa</span> el gráfico y luego <span>completa</span> la tabla.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-6-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '3-6-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_6_6()",
        titulo: "<center><h5><span>Escribe</span> el decimal indicado en cada caso.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-6-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '3-6-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_6_7()",
        titulo: "<center><h5><span>Selecciona</span> la estrella que contiene el decimal que se ha representado en cada gráfico.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-6-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '3-6-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_6_8()",
        titulo: "<center><h5><span>Selecciona</span> la estrella que contiene el decimal que se ha representado en cada gráfico.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-6-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-6-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_6_9()",
        titulo: "<center><h5><span>Expresa</span> con números decimales la parte coloreada de las siguientes figuras:</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-6-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '3-6-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_6_10()",
        titulo: "<center><h5><span>Expresa</span> con números decimales la parte coloreada de las siguientes figuras:</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-6-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '3-6-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_6_11()",
        titulo: "<center><h5><span>Escribe</span> los decimales que corresponden a las siguientes ubicaciones:</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-6-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '3-6-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_6_12()",
        titulo: "<center><h5><span>Escribe</span> los decimales que corresponden a las siguientes ubicaciones:</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-6-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '3-6-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_6_13()",
        titulo: "<center><h5><span>Escribe</span> el número decimal que corresponde a cada gráfico, luego <span>compara</span> utilizando los símbolos. <br> <span><</span>, <span>></span> o <span>=</span></h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-6-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '3-6-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_6_14()",
        titulo: "<center><h5><span>Selecciona</span> el número mayor en cada caso.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-6-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '3-6-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_6_15()",
        titulo: "<center><h5><span>Ordena</span> los siguientes números de mayor a menor:</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-6-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '3-6-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_3_6_16()",
        titulo: "<center><h5><span>Ordena</span> los siguientes números de menor a mayor:</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-6-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '3-6-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_6_17()",
        titulo: "<center><h5><span>Selecciona</span> el número menor en cada caso</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-6-17",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>