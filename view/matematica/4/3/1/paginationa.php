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


var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-2-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_2_1()",
        titulo: "<center><h5><span>Observa</span> los ábacos y <span>completa</span> el cuadro con las cantidades que correspondan.</center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-2-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-2-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_2_2()",
        titulo: "<center><h5><span>Relaciona</span> el número correcto según corresponda.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-2-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-2-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_2_3()",
        titulo: "<center><h5><span>Escribe</span> la descomposición de los siguientes números en centenas, decenas y unidades.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-2-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-2-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_2_4()",
        titulo: " <center><h5> <span>Coloca</span>, en el rectángulo, el número que corresponde.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-2-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-2-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_2_5()",
        titulo: "<center><h5><span>Coloca</span> en la línea cómo se leen los siguientes números:</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-2-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-2-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_2_6()",
        titulo: "<center><h5><span>Forma</span> números con las tres cifras y <span>escribe</span> sus nombres.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-2-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-2-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_2_7()",
        titulo: "<center><h5><span>Observa</span> el ejemplo y <span>completa</span> el cuadro.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-2-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-2-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_2_8()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-2-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '2-2-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_2_9()",
        titulo: "<center><h5><span>Escribe</span> el número antecesor y sucesor de los siguientes números:</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-2-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '2-2-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_2_10()",
        titulo: "<center><h5><span>Coloca</span> el número que falta.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-2-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '2-2-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_2_11()",
        titulo: "<center><h5><span>Completa</span> la serie con los números que faltan.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-2-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '2-2-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_2_12()",
        titulo: " <center><h5><span>Compara</span> los siguientes números y <span>coloca</span> los signos <, > o =.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-2-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '2-2-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_2_13()",
        titulo: " <center><h5><span>Coloca</span> los números que correspondan.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-2-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-2-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_2_14()",
        titulo: " <center><h5><span>Coloca</span> en cada recuadro el número que corresponde para que se cumplan las comparaciones.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-2-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '2-2-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_2_15()",
        titulo: " <center><h5> <span>Realiza</span> las adiciones y <span>compara</span> los resultados.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-2-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '2-2-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_2_16()",
        titulo: " <center><h5><span>Relaciona</span> los tableros de valor posicional con sus respectivas cantidades.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-2-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '2-2-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_2_17()",
        titulo: " <center><h5><span>Observa</span> los precios y <span>resuelve</span>.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-2-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '2-2-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_2_18()",
        titulo: " <center><h5><span>Ordena</span> los siguientes números de manera ascendente.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-2-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '2-2-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_2_2_19()",
        titulo: " <center><h5><span>Ordena</span> los siguientes números de manera descendente.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-2-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '2-2-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_2_2_20()",
        titulo: " <center><h5><span>Selecciona</span> los números pares.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-2-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '2-2-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_2_2_21()",
        titulo: " <center><h5><span>Resuelve</span> y <span>compara</span>.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "2-2-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '2-2-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_22()",
        titulo: " <center><h5><span>Selecciona</span> los números impares.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "2-2-22",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>