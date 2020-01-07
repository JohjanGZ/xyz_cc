<script type="text/javascript">
function Page_21() {
    start_21();
    inicio();
    count = 3;
}
function Page_22() {
    start_22();
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
function Page_26() {
    start_26();
    inicio();
    count = 3;
}
function Page_27() {
    start_27();
    inicio();
    count = 3;
}
function Page_28() {
    start_28();
    inicio();
    count = 3;
}
function Page_29() {
    start_29();
    inicio();
    count = 3;
}
function Page_30() {
    start_30();
    inicio();
    count = 3;
}
var cant = 10;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_21() {
    $("#ventana").load(ruta + '1-3-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_1_3_21()",
        titulo: "<center><h5><span>Relaciona</span> cada número con su escritura correspondiente.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-3-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '1-3-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_1_3_22()",
        titulo: "<center><h5><span>Selecciona</span> como se leen los siguientes números.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-3-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '1-3-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_1_3_23()",
        titulo: "<center><h5><span>Selecciona</span> la escritura correcta en cada caso.</h5></center>",
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
        titulo: "<center><h5><span>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-3-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '1-3-25/index.php', {
        next: "Page_26()",
        procesar: "result_tipo_1_3_25()",
        titulo: "<center><h5><span>Completa</span> el cuadro.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-3-25",
        nota: cal
    });
    return false;
};
function start_26() {
    $("#ventana").load(ruta + '1-3-26/index.php', {
        next: "Page_27()",
        procesar: "result_tipo_1_3_26()",
        titulo: "<center><h5><span>Selecciona</span> cómo se leen los siguientes números.</h5></center>",
        restaurar: "start_26()",
        dir: ruta,
        cod: "1-3-26",
        nota: cal
    });
    return false;
};
function start_27() {
    $("#ventana").load(ruta + '1-3-27/index.php', {
        next: "Page_28()",
        procesar: "result_tipo_1_3_27()",
        titulo: "<center><h5><span>Relaciona</span> cada escritura con su número correspondiente.</h5></center>",
        restaurar: "start_27()",
        dir: ruta,
        cod: "1-3-27",
        nota: cal
    });
    return false;
};
function start_28() {
    $("#ventana").load(ruta + '1-3-28/index.php', {
        next: "Page_29()",
        procesar: "result_tipo_1_3_28()",
        titulo: "<center><h5><span>Observa</span> los siguientes gráficos de material base 10 y luego <span>selecciona</span> cómo se lee cada número representado.</h5></center>",
        restaurar: "start_28()",
        dir: ruta,
        cod: "1-3-28",
        nota: cal
    });
    return false;
};
function start_29() {
    $("#ventana").load(ruta + '1-3-29/index.php', {
        next: "Page_30()",
        procesar: "result_tipo_1_3_29()",
        titulo: "<center><h5><span>observa</span> cada ábaco y luego <span>selecciona</span> como se lee cada uno de los números que se han representado.</h5></center>",
        restaurar: "start_29()",
        dir: ruta,
        cod: "1-3-29",
        nota: cal
    });
    return false;
};
function start_30() {
    $("#ventana").load(ruta + '1-3-30/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_30()",
        titulo: "<center><h5><span>Relaciona</span> cada número con su correspondiente escritura numérica.</h5></center>",
        restaurar: "start_30()",
        dir: ruta,
        cod: "1-3-30",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>