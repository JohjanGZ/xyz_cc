<script type="text/javascript">
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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '1-7-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_1_7_10()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> las siguientes sustracciones:</h5></center>", 
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-7-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '1-7-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_1_7_11()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> las siguientes sustracciones:</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-7-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '1-7-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_7_12()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los términos que faltan en cada una de las sustracciones.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-7-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-7-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_7_13()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-7-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '1-7-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_7_14()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> las tablas.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-7-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '1-7-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_7_15()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> las tablas.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-7-15",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>