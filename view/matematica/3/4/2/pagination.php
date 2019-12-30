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
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_11() {
    $("#ventana").load(ruta + '3-4-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_4_11()",
        titulo: "<center><h5><span class='ftitulo'>Comprueba</span> las siguientes divisiones.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-4-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '3-4-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_4_12()",
        titulo: "<center><h5><span>Resuelve</span> las divisiones y <span>realiza</span> su comprobación.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-4-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '3-4-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_4_13()",
        titulo: "<center><h5><span>Completa</span> los datos y <span>resuelve</span> los problemas.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-4-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '3-4-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_4_14()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-4-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '3-4-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_4_15()",
        titulo: "<center><h5><span>Completa</span> la tabla.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-4-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '3-4-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_3_4_16()",
        titulo: "<center><h5><span>Relaciona</span> cada expresión con el valor correspondiente.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-4-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '3-4-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_3_4_17()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas y <span>selecciona</span> la alternativa correcta.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-4-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '3-4-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_3_4_18()",
        titulo: "<center><h5><span>Resuelve.</span></h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "3-4-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '3-4-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_19()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> las divisiones con su respectivo resultado. </h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "3-4-19",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>