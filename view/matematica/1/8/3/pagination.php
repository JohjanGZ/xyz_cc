<script type="text/javascript">
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
function Page_16() {
    start_16();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_9() {
    $("#ventana").load(ruta + '1-8-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_8_9()",
        titulo: "<center><h5>Mi papá compró una pizza, la dividió en dos partes iguales y se comió una de ellas. <br> <span class='ftitulo'>Observa y completa</span> el espacio en blanco.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-8-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '1-8-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_1_8_10()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> la fracción que se representó en cada caso.</h5></center>", 
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-8-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '1-8-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_1_8_11()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> la fracción que se representó en cada caso.</h5></center>", 
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-8-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '1-8-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_8_12()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> la fracción que se representó en cada caso.</h5></center>", 
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-8-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-8-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_8_13()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los gráficos y luego <span class='ftitulo'>selecciona</span> la fracción correcta.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-8-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '1-8-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_8_14()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-8-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '1-8-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_1_8_15()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> la fracción que representa cada una de las siguientes flores:</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-8-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '1-8-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_8_16()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> la fracción que representa cada una de las siguientes flores:</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-8-16",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>