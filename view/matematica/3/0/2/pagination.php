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

var cant = 9;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_6() {
    $("#ventana").load(ruta + '3-0-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_0_6()",
        titulo: "<center><h5><span>Clasifica</span> los conjuntos según su clase.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-0-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '3-0-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_0_7()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta en cada uno de los casos.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-0-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '3-0-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_0_8()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta en cada uno de los casos.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-0-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-0-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_0_9()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta en cada uno de los casos.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-0-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '3-0-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_0_10()",
        titulo: "<center><h5><span>Clasifica</span> a los conjuntos según su clase.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-0-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '3-0-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_0_11()",
        titulo: "<center><h5><span>Selecciona</span> los números que corresponden para completar la representación de la unión de los conjuntos. </h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-0-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '3-0-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_0_12()",
        titulo: "<center><h5><span>Selecciona</span> los números que corresponden para completar la representación de la intersección de los conjuntos. </h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-0-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '3-0-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_0_13()",
        titulo: "<center><h5><span>Selecciona</span> según corresponda la parte sombreada.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-0-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '3-0-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_0_14()",
        titulo: "<center><h5><span>Selecciona</span> el gráfico que representa la unión de conjuntos. </h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-0-14",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>