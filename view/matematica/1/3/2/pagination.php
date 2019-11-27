<script type="text/javascript">
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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '1-2-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_1_2_6()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> los siguientes problemas y <span class='ftitulo'>completa</span> los números en cada recuadro.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "1-2-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '1-2-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_1_2_7()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> los siguientes problemas y <span class='ftitulo'>completa</span> los números en cada recuadro.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-2-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '1-2-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_1_2_8()",
        titulo: "<center><h5><span class='ftitulo'>Lee, escribe</span> los datos y <span class='ftitulo'>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-2-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '1-2-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_2_9()",
        titulo: "<center><h5><span class='ftitulo'>Lee, escribe</span> los datos y <span class='ftitulo'>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-2-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '1-2-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_1_2_10()",
        titulo: "<center><h5><span class='ftitulo'>Lee, escribe</span> los datos y <span class='ftitulo'>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-2-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '1-2-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_2_11()",
        titulo: "<center><h5><span class='ftitulo'>Lee, escribe</span> los datos y <span class='ftitulo'>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-2-11",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>