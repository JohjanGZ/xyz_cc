<script type="text/javascript">

function Page_1() {
    count = 3;
    start_1();
    inicio();
}

function Page_2() {
    count = 3;
    start_2();
    inicio();
}

function Page_3() {
    count = 3;
    start_3();
    inicio();
}

function Page_4() {
    count = 3;
    start_4();
    inicio();
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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-0-0/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_0_0()",
        titulo: "<center><h5><span class='ftitulo'>Agrupa</span> los siguientes elementos según sus características.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-0-0",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-0-1/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_0_1()",
        titulo: "<center><h5><span class='ftitulo'>Agrupa</span> los siguientes elementos según sus características.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-0-1",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-0-2/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_0_2()",
        titulo: "<center><h5><span class='ftitulo'>Coloca</span> el nombre del conjunto en donde todos los animales tienen dos patas.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-0-2",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-0-3/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_0_3()",
        titulo: " <center><h5><span class='ftitulo'>Representa </span> por comprensión los siguientes conjuntos: </h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-0-3",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-0-4/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_0_4()",
        titulo: "<center><h5><span class='ftitulo'>Observa </span> los siguientes conjuntos y <span>represéntalos</span> por extension, usando el nombre de sus elementos.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-0-4",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-0-5/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_0_5()",
        titulo: "<center><h5><span>Observa</span> el diagrama y <span>coloca</span> verdadero (V) o falso (F) según corresponda.</center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-0-5",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-0-6/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_0_6()",
        titulo: "<center><h5><span>Lee</span> y <span>clasifica</span> los elementos en el conjunto correspondiente.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-0-6",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-0-7/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_0_7()",
        titulo: "<center><h5><span>Observa</span> el diagrama y <span>coloca</span> verdadero (V) o falso (F) según corresponda.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-0-7",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '2-0-8/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_0_8()",
        titulo: "<center><h5><span>Escoge</span>  si el conjunto está determinado por extensión o si está determinado por comprensión.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-0-8",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '2-0-9/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_0_9()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> y <span class='ftitulo'>Coloca</span> el conjunto de elementos donde corresponde.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-0-9",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '2-0-10/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_0_10()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> y <span class='ftitulo'>Coloca</span> el conjunto de elementos donde corresponde.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-0-10",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '2-0-11/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_0_11()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> las imágenes que tienen las rejas delante de los caballos.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-0-11",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '2-0-12/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_0_13()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el elefante que va delante de su mamá.</h5></center>",
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
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> los niños que tienen las manos detrás.</h5></center>",
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
        titulo: "<center><h5><span class='ftitulo'>Observa</span> y <span class='ftitulo'>completa</span>.</h5></center>",
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
        titulo: "<center><h5><span class='ftitulo'>Observa</span> y <span class='ftitulo'>selecciona</span> los animalitos que están a la derecha de la miña.</h5></center>",
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
        titulo: "<center><h5><span class='ftitulo'>Observa</span> las prendas de vestir y <span class='ftitulo'>Selecciona</span> en los casilleros según la cantidad que encuentres de cada prenda.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-0-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '1-0-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_0_18()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los útiles escolares y <span class='ftitulo'>Selecciona</span> en los casilleros según la cantidad que encuentres de cada elemento.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-0-18",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '1-0-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_0_19()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el gráfico de barras y <span class='ftitulo'>arrastra</span> el número de la cantidad de elementos que ubiques.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-0-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '1-0-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_1_0_20()",
        titulo: "<center><h5> <span class='ftitulo'>Observa</span> el gráfico de barras que hizo Saúl para contabilizar los juguetes que tiene y luego <span class='ftitulo'>completa</span>.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-0-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '1-0-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_1_0_21()",
        titulo: "<center><h5> <span class='ftitulo'>Observa</span> el siguiente gráfico que indica la venta de un día en una tienda y <span class='ftitulo'>responde</span>.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-0-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '1-0-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_1_0_22()",
        titulo: "<center><h5> <span class='ftitulo'>Traza</span> el camino que debe seguir Mateo para llegar al colegio.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-0-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '1-0-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_1_0_23()",
        titulo: "<center><h5> <span class='ftitulo'>Traza</span> las flechas para que la mariposa llegue a la flor.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "1-0-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '1-0-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_0_24()",
        titulo: "<center><h5> <span class='ftitulo'>Traza</span> el recorrido de las flechas para que la hormiga llegue a las uvas.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-0-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '1-0-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_25()",
        titulo: "<center><h5> <span class='ftitulo'>Observa</span> la cuadrícula y <span class='ftitulo'>traza</span> el recorrido para que el gato atrape al ratón.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-0-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>