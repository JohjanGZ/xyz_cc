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
    count = 3;
    start_16();
    inicio();
}

function Page_17() {
    count = 3;
    start_17();
    inicio();

}

function Page_18() {
    count = 3;
    start_18();
    inicio();
}

function Page_19() {
   start_19();
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
    $("#ventana").load(ruta + '2-3-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_3_1()",
        titulo: "<center><h5><span>Cuenta</span> cuántos millares, centenas, decenas y unidades hay, luego <span>escribe</span> el número que se forma.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-3-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-3-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_3_2()",
        titulo: "<center><h5> <span>Relaciona</span> cada representación con la cifra que le corresponde.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-3-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-3-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_3_3()",
        titulo: "<center><h5><span>Ubica</span> los números en el tablero posicional.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-3-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-3-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_3_4()",
        titulo: " <center><h5> <span>Observa</span> y <span>escribe</span> el número que corresponde en cada recuadro.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-3-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-3-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_3_5()",
        titulo: "<center><h5><span>Lee</span> los números y <span>ubícalos</span> en el tablero posicional.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-3-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-3-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_3_6()",
        titulo: "<center><h5> <span>Observa</span> y <span>completa</span> según corresponda.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-3-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-3-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_3_7()",
        titulo: "<center><h5><span>Realiza</span> la descomposición aditiva de los siguientes números:</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-3-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-3-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_3_8()",
        titulo: "<center><h5><span>Escribe</span> el número que corresponde a cada descomposición.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-3-8",
        nota: cal
    });
    return false;
};
/**SEPA**/
function start_9() {
    $("#ventana").load(ruta + '2-3-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_3_9()",
        titulo: "<center><h5><span>Escribe</span> el número antecesor y sucesor de los siguientes números:</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-3-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '2-3-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_3_10()",
        titulo: "<center><h5><span>Observa</span> los números y <span>completa</span> el cuadro.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-3-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '2-3-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_3_11()",
        titulo: "<center><h5><span>Lee</span> y <span>completa</span> con el número correspondiente.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-3-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '2-3-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_3_12()",
        titulo: " <center><h5><span>Compara</span> los siguientes números y <span>coloca</span> los signos <, > o =.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-3-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '2-3-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_3_13()",
        titulo: " <center><h5><span>Coloca</span> los números que correspondan.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-3-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-3-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_3_14()",
        titulo: " <center><h5><span>Marca</span> los números menores que:</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-3-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '2-3-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_3_15()",
        titulo: " <center><h5><span>Realiza</span> las adiciones y compara los resultados.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-3-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-3-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_3_16()",
        titulo: " <center><h5><span>Observa</span> nuevamente las imágenes y <span>aplica</span> la propiedad asociativa de la adición.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-3-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '2-3-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_3_17()",
        titulo: " <center><h5><span>Resuelve</span> las siguientes adiciones en el tablero posicional.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-3-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '2-3-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_3_18()",
        titulo: " <center><h5><span>Lee</span> y <span>resuelve</span> el siguiente problema:</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-3-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '2-3-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_19()",
        titulo: " <center><h5><span>Resuelve</span> las siguientes sustracciones en el tablero posicional.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-3-19",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>