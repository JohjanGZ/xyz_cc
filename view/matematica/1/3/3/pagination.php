<script type="text/javascript">
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
var cant = 6;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_9() {
    $("#ventana").load(ruta + '1-3-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_3_9()",
        titulo: "<center><h5><span>Selecciona</span> la manzana  que tiene el número mayor que 87.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-3-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '1-3-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_1_3_10()",
        titulo: "<center><h5><span>Selecciona</span> la estrella  que tiene el número mayor.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-3-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '1-3-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_1_3_11()",
        titulo: "<center><h5><span>Selecciona</span> el globo  que tiene el número menor.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-3-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '1-3-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_3_12()",
        titulo: "<center><h5><span>Completa</span> los espacios en blanco utilizando los simbolos <span> > , < , = </span>.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-3-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-3-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_3_13()",
        titulo: "<center><h5><span>Selecciona</span> los números en los que se cumpla <span>es mayor que</span> en cada caso.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-3-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '1-3-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_3_14()",
        titulo: "<center><h5><span>Selecciona</span> los números en los que se cumpla <span>es menor que</span> en cada caso.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-3-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '1-3-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_1_3_15()",
        titulo: "<center><h5><span>Selecciona</span> las peras que tienen los números que son mayores que 50.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-3-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '1-3-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_3_16()",
        titulo: "<center><h5><span>Selecciona</span> los caramelos con números menores que 71.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-3-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '1-3-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_3_17()",
        titulo: "<center><h5><span>Selecciona</span> la hoja que contiene el número anterior a 70.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-3-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '1-3-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_18()",
        titulo: "<center><h5><span>Selecciona</span> el lápiz que contiene el número posterior a 59</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-3-18",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>