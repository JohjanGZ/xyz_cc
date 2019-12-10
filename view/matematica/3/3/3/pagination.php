<script type="text/javascript">
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
function start_13() {
    $("#ventana").load(ruta + '1-3-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_3_13()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número que corresponde a cada conjunto y luego compara las cantidades utilizando los signos <, > o =.</h5></center>",
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
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número que corresponde a cada conjunto y luego compara las cantidades utilizando los signos <, > o =.</h5></center>",
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
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número que corresponde a cada conjunto y luego compara las cantidades utilizando los signos <, > o =.</h5></center>",
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
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los espacios en blanco utilizando los signos <, > o =.</h5></center>", 
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-3-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '1-3-17/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_1_3_17()",
        titulo: "<center><h5><span class='ftitulo'>Ordena</span> los siguientes números de mayor a menor.</h5></center>", 
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-3-17",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '1-3-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_1_3_23()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> las siguientes adiciones realizando los respectivos canjes.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "1-3-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '1-3-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_3_24()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> las siguientes adiciones realizando los respectivos canjes.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-3-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '1-3-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_25()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> cada adicción con su resultado.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-3-25",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>