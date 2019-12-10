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
function Page_8() {
    start_8();
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
    $("#ventana").load(ruta + '1-3-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_1_3_1()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> cada número con su escritura correspondiente.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "1-3-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '1-3-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_1_3_2()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> cómo se leen los siguientes números:</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "1-3-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '1-3-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_1_3_3()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la escritura correcta en cada caso.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "1-3-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '1-3-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_1_3_4()",
        titulo: "<center><h5><span class='ftitulo'>Agrupa</span> de 10 en 10 con el lápiz y <span class='ftitulo'>selecciona</span> la cantidad total de los objetos.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "1-3-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '1-3-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_1_3_5()",
        titulo: "<center><h5><span class='ftitulo'>Suma</span> la cantidad que se indica para completar la secuencia.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-3-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '1-3-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_1_3_6()",
        titulo: "<center><h5><span class='ftitulo'>Suma</span> la cantidad que se indica para completar la secuencia.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "1-3-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '1-3-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_1_3_7()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-3-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '1-3-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_8()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los siguientes gráficos y <span class='ftitulo'>escribe</span> el número que ha sido representado.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-3-8",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>