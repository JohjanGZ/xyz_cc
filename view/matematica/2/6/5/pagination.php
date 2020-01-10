<script type="text/javascript">

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


var cant = 10;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_12() {
    $("#ventana").load(ruta + '2-6-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_6_12()",
        titulo: "<center><h5><span>Completa</span> cada espacio en blanco usando las palabras 'más', 'menos' o 'igual' según corresponda.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-6-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '2-6-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_6_13()",
        titulo: "<center><h5><span>Responde</span> en el espacio asignado.</center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-6-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-6-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_6_14()",
        titulo: "<center><h5><span>Responde</span> en el espacio asignado.</center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-6-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '2-6-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_6_15()",
        titulo: "<center><h5><span>Completa</span> las equivalencias en gramos o kilos según se indica</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-6-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-6-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_6_16()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-6-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '2-6-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_6_17()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-6-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '2-6-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_6_18()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-6-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '2-6-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_2_6_19()",
        titulo: "<center><h5><span>Selecciona</span> las cantidades cuya suma indiquen:.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-6-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '2-6-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_2_6_20()",
        titulo: "<center><h5><span>Selecciona</span> las cantidades cuya suma indiquen:</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-6-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '2-6-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_6_21()",
        titulo: "<center><h5><span>Relaciona</span> los pesos iguales.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "2-6-21",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>