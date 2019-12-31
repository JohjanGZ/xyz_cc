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
    count = 3;
    start_5();
    inicio();
}

function Page_6() {
    count = 3;
    start_6();
    inicio();
}

function Page_7() {
    count = 3;
    start_7();
    inicio();

}

function Page_8() {
    count = 3;
    start_8();
    inicio();
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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-9-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_9_1()",
        titulo: "<center><h5><span>Cuenta</span> el material multibase y completa según corresponda.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-9-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-9-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_9_2()",
        titulo: "<center><h5><span>Observa</span> los recuadros y <span>escribe</span> el número que corresponde.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-9-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-9-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_9_3()",
        titulo: "<center><h5> <span>Completa</span> el cuadro realizando la descomposición aditiva de los siguientes números:</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-9-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-9-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_9_4()",
        titulo: " <center><h5><span>Completa</span> el cuadro descomponiendo los números. <span>Ten</span> en cuenta su valor posicional.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-9-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-9-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_9_5()",
        titulo: "<center><h5><span>Escribe</span> el número que corresponde a cada descomposición.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-9-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-9-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_9_6()",
        titulo: "<center><h5><span>Representa</span> los números en el tablero de valor posicional.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-9-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-9-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_9_7()",
        titulo: "<center><h5><span>Observa</span> la posición que tiene cada cifra y <span>escribe</span> cuánto vale.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-9-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-9-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_9_8()",
        titulo: "<center><h5><span>Lee</span> los enunciados y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-9-8",
        nota: cal
    });
    return false;
};
/**SEPA**/
function start_9() {
    $("#ventana").load(ruta + '2-9-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_9_9()",
        titulo: "<center><h5><span>Realiza</span> la composición de cada número y <span>escribe</span> cómo se leen.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-9-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '2-9-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_9_10()",
        titulo: "<center><h5><span>Escribe</span> en el rectángulo el número que corresponde.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-9-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '2-9-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_9_11()",
        titulo: "<center><h5><span>Escribe</span> cómo se leen los siguientes números:</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-9-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '2-9-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_9_12()",
        titulo: "<center><h5><span>Observa</span> los números del recuadro y luego <span>ordénalos</span> de manera ascendente.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-9-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '2-9-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_9_13()",
        titulo: "<center><h5><span>Observa</span> los números del recuadro y luego <span>ordénalos</span> de manera descendente.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-9-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-9-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_9_14()",
        titulo: "<center><h5><span>Compara</span> los números y <span>escribe</span> los signos <, > o = según corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-9-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '2-9-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_9_15()",
        titulo: "<center><h5><span>Realiza</span> las adiciones, <span>compara</span> los resultados y <span>escribe</span> los signos <, > o = según corresponda.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-9-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-9-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_9_16()",
        titulo: "<center><h5><span>Escribe</span> los números que correspondan.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-9-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '2-9-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_9_17()",
        titulo: "<center><h5><span>Escribe</span> en cada recuadro el número que corresponde para que se cumplan las comparaciones.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-9-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '2-9-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_9_18()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes adiciones y sustracciones en el tablero posicional.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-9-18",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '2-9-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_2_9_19()",
        titulo: "<center><h5><span>Lee</span> y <span>resuelve</span> los siguientes problemas:</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-9-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '2-9-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_9_20()",
        titulo: "<center><h5><span>Observa</span> el gráfico de barras y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-9-20",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>