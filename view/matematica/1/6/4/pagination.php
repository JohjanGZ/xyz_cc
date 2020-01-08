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
var cant = 18;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_8() {
    $("#ventana").load(ruta + '1-6-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_1_6_8()",
        titulo: "<center><h5><span>Observa</span> el material multibase y <span>completa</span>.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-6-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '1-6-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_6_9()",
        titulo: "<center><h5><span>Observa</span> el material multibase y <span>completa</span>.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-6-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '1-6-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_1_6_10()",
        titulo: "<center><h5><span>Observa</span> el material multibase y <span>completa</span>.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-6-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '1-6-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_1_6_11()",
        titulo: "<center><h5><span>Completa</span> según el valor posicional. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-6-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '1-6-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_6_12()",
        titulo: "<center><h5><span>Cuenta</span> las centenas, las decenas y las unidades, y ubícalas en el tablero de valor posicional</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-6-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '1-6-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_6_13()",
        titulo: "<center><h5><span>Selecciona</span> la descomposición de cada número.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-6-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '1-6-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_6_14()",
        titulo: "<center><h5><span>Escribe</span> los números de tres cifras</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-6-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '1-6-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_15()",
        titulo: "<center><h5><span>Selecciona</span> los números formados por:</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-6-15",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>