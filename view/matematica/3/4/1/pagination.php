<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}
function Page_2() {
    start_2();
    inicio();
    count = 3;
}
function Page_3() {
    start_3();
    inicio();
    count = 3;
}
function Page_4() {
    start_4();
    inicio();
    count = 3;
}
function Page_5() {
    start_5();
    inicio();
    count = 3;
}
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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '3-4-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_1_4_1()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> el cuadro.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "3-4-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '3-4-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_1_4_2()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> cómo se leen los siguientes números.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-4-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '3-4-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_1_4_3()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> cada escritura con su número correspondiente.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-4-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '3-4-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_1_4_4()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los siguientes gráficos de material base 10 y luego <span class='ftitulo'>selecciona</span> cómo se lee cada nùmero representado.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-4-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '3-4-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_1_4_5()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la respuesta correcta en cada caso.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-4-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '3-4-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_1_4_6()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> cada ábaco y luego <span class='ftitulo'>selecciona</span> cómo se lee cada uno de los números que se han representado.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-4-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '3-4-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_4_7()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> cada número con su correspondiente escritura numérica.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-4-7",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>