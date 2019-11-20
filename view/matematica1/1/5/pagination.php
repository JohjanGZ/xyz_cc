<script type="text/javascript">
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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_14() {
    $("#ventana").load(ruta + '1-1-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_1_14()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> cuantas decenas hay en cada imagen.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-1-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '1-1-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_1_1_15()",
        titulo: "<center><h5><span class='ftitulo'>Forma</span> grupos de  10 y <span class='ftitulo'>completa</span>.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-1-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '1-1-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_1_16()",
        titulo: "<center><h5><span class='ftitulo'>Rodea</span> 10 elementos y <span class='ftitulo'>completa</span>.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-1-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '1-1-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_1_17()",
        titulo: "<center><h5><span class='ftitulo'>Forma</span> grupos de 10 elementos.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-1-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '1-1-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_1_18()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número de puntos que faltan para completar una decena.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-1-18",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '1-1-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_1_19()",
        titulo: "<center><h5><span class='ftitulo'>Forma</span> grupos de 10.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-1-19",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../exercises/resultado/resultado.php');
    return false;
};
</script>