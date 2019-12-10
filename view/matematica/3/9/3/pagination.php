<script type="text/javascript">
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
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_11() {
    $("#ventana").load(ruta + '3-9-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_9_11()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> los números que corresponden a los términos de las siguientes sustracciones:</h5></center>", 
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-9-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '3-9-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_9_12()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> los números que corresponden a los términos de las siguientes sustracciones:</h5></center>", 
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-9-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '3-9-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_9_13()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los recuadros y <span class='ftitulo'>halla</span> la diferencia.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-9-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '3-9-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_9_14()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los recuadros y <span class='ftitulo'>halla</span> la diferencia.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-9-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '3-9-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_9_15()",
        titulo: "<center><h5><span class='ftitulo'>Completa y verifica</span> los elementos de las siguientes sustracciones:</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-9-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '3-9-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_3_9_16()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> las siguientes sustracciones:</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-9-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '3-9-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_9_17()",
        titulo: "<center><h5><span class='ftitulo'>Completa y verifica</span> las siguientes restas:</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-9-17",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>