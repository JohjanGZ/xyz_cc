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
    count = 3;
    start_9();
    inicio();
}

function Page_10() {
    count = 3;
    start_10();
    inicio();
}

function Page_11() {
    count = 3;
    start_11();
    inicio();
}

function Page_12() {
    count = 3;
    start_12();
    inicio();
}

function Page_13() {
    count = 3;
    start_13();
    inicio();
    
}

function Page_14() {
    count = 3;
    start_14();
    inicio();
    
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
function Page_25() {
    start_25();
    inicio();
    count = 3;
}
function Page_26() {
    start_26();
    inicio();
    count = 3;
}
function Page_27() {
    start_27();
    inicio();
    count = 3;
}
function Page_28() {
    start_28();
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
    $("#ventana").load(ruta + '2-0-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_0_1()",
        titulo: "<center><h5><span class='ftitulo'>Agrupa</span> los siguientes elementos según sus características.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-0-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-0-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_0_2()",
        titulo: "<center><h5><span class='ftitulo'>Agrupa</span> los siguientes elementos según sus características.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-0-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-0-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_0_3()",
        titulo: "<center><h5><span class='ftitulo'>Coloca</span> el nombre del conjunto en donde todos los animales tienen dos patas.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-0-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-0-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_0_4()",
        titulo: " <center><h5><span class='ftitulo'>Representa </span> por comprensión los siguientes conjuntos: </h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-0-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-0-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_0_5()",
        titulo: "<center><h5><span class='ftitulo'>Observa </span> los siguientes conjuntos y <span>represéntalos</span> por extension, usando el nombre de sus elementos.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-0-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-0-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_0_6()",
        titulo: "<center><h5><span>Representa</span> simbólicamente los conjuntos teniendo en cuenta las siguientes indicaciones:</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-0-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-0-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_0_7()",
        titulo: "<center><h5><span>Representa</span> por extensión los elementos de cada conjunto.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-0-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-0-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_0_8()",
        titulo: "<center><h5><span>Clasifica</span> cada elemento teniendo en cuenta si pertenece (∈) o no pertenece (∉) al conjunto F.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-0-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '2-0-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_0_9()",
        titulo: "<center><h5> <span>Lee</span> y <span>clasifica</span> los elementos en el conjunto correspondiente. </h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-0-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '2-0-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_0_10()",
        titulo: "<center><h5>  <span>Observa</span> el diagrama y <span>coloca</span> verdadero (V) o falso (F) según corresponda.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-0-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '2-0-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_0_11()",
        titulo: "<center><h5> <span>Escoge</span>  si el conjunto está determinado por extensión o si está determinado por comprensión.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-0-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '2-0-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_0_12()",
        titulo: "<center><h5><span>Representa</span> los siguientes conjuntos por extensión y por comprensión.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-0-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '2-0-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_0_13()",
        titulo: "<center><h5><span>Expresa</span> por extensión los siguientes conjuntos:</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-0-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '2-0-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_0_14()",
        titulo: "<center><h5><span>Clasifica</span> cada conjunto según corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-0-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '2-0-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_0_15()",
        titulo: "<center><h5><span>Observa</span> el diagrama, <span>completa</span> los elementos de cada conjunto y completa la oración.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-0-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-0-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_0_16()",
        titulo: "<center><h5><span>Observa</span> el diagrama y <span>completa</span> las oraciones.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-0-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '2-0-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_0_17()",
        titulo: "<center><h5><span>Dibuja</span> los elementos que corresponden según el tipo de conjunto que se indica.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-0-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '2-0-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_0_18()",
        titulo: "<center><h5><span>Completa</span> la interseción de cada conjunto.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-0-18",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '2-0-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_2_0_19()",
        titulo: "<center><h5><span>Observa</span> los elementos de cada conjunto y <span>completa</span> según en el orden en el que aparecen.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-0-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '2-0-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_2_0_20()",
        titulo: "<center><h5> <span>Observa</span> los siguientes conjuntos. Luego <span>completa</span> la intersección.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-0-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '2-0-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_2-0-21()",
        titulo: "<center><h5> <span>Observa</span> el diagrama y <span>señala</span> la respuesta correcta.</h5></center>",
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
        titulo: "<center><h5> <span>Representa</span> por extensión la unión de los siguientes conjuntos según se encuentren ubicados sus elementos: </h5></center>",
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
        titulo: "<center><h5><span>Observa</span> los conjuntos. Luego <span>representa</span> de forma simbólica en el orden que aparecen los elementos.</h5></center>",
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
        titulo: "<center><h5><span>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "2-0-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '2-0-25/index.php', {
        next: "Page_26()",
        procesar: "result_tipo_2_0_25()",
        titulo: "<center><h5><span>Observa</span> los siguientes conjuntos. Luego <span>completa</span> la unión de cada uno en orden alfabético.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-0-25",
        nota: cal
    });
    return false;
};
function start_26() {
    $("#ventana").load(ruta + '2-0-26/index.php', {
        next: "Page_27()",
        procesar: "result_tipo_2_0_26()",
        titulo: "<center><h5><span>Completa</span> las siguientes oraciones con las palabras 'todos', 'algunos' o 'ninguno' según corresponda:</h5></center>",
        restaurar: "start_26()",
        dir: ruta,
        cod: "2-0-26",
        nota: cal
    });
    return false;
};
function start_27() {
    $("#ventana").load(ruta + '2-0-27/index.php', {
        next: "Page_28()",
        procesar: "result_tipo_2_0_27()",
        titulo: "<center><h5><span>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
        restaurar: "start_27()",
        dir: ruta,
        cod: "2-0-27",
        nota: cal
    });
    return false;
};
function start_28() {
    $("#ventana").load(ruta + '2-0-28/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_0_28()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>señala</span> verdadero o falso según corresponda.</h5></center>",
        restaurar: "start_28()",
        dir: ruta,
        cod: "2-0-28",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>