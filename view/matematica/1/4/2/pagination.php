<script type="text/javascript">
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
function Page_31() {
    start_31();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_8() {
    $("#ventana").load(ruta + '1-4-8/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_4_8()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la manzana que tiene el número mayor que 87.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-4-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '1-4-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_4_9()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el auto que tiene el número menor que 78</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-4-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '1-4-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_1_4_10()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la estrella que tiene el número mayor.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-4-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '1-4-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_1_4_11()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el globo que tiene al número menor.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-4-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '1-4-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_4_12()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los espacios en blanco utilizando los símbolos >, < o =.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-4-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-4-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_4_13()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> los números en los que se cumpla <span class='ftitulo'>es mayor que</span> en cada caso.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-4-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '1-4-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_4_14()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> los números en los que se cumpla <span class='ftitulo'>es menor que</span> en cada caso.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-4-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '1-4-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_1_4_15()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> las peras que tienen los números que son mayores que 50.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-4-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '1-4-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_4_16()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> los caramelos con números menores que 71.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-4-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '1-4-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_4_17()",
        titulo: "<center><h5><span class='ftitulo'>Ordena</span> los siguientes números de mayor a menor.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-4-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '1-4-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_4_18()",
        titulo: "<center><h5><span class='ftitulo'>Ordena</span> los siguientes números de menor a mayor.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-4-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '1-4-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_4_19()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la hoja que contiene el número anterior a 70.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-4-19",
        nota: cal
    });
    return false;
};
function start_31() {
    $("#ventana").load(ruta + '1-3-31/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_31()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el lápiz que contiene el número posterior a 59.</h5></center>",
        restaurar: "star3_31()",
        dir: ruta,
        cod: "1-3-31",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>