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
var cant = 18;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '3-2-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_3_2_1()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> la representación de los siguientes números en el ábaco.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "3-2-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '3-2-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_2_2()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número representado en cada ábaco.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-2-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '3-2-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_2_3()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> cómo se leen los siguientes números:</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-2-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '3-2-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_2_4()",
        titulo: "<center><h5><span class='ftitulo'>Descompón</span> los siguientes números teniendo en cuenta la notación desarrollada. <br> <span class='ftitulo'>Guíate</span> del ejemplo. </h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-2-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '3-2-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_2_5()",
        titulo: "<center><h5><span class='ftitulo'>Descompón</span> los siguientes números teniendo en cuenta la notación desarrollada. <br> <span class='ftitulo'>Guíate</span> del ejemplo. </h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-2-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '3-2-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_2_6()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-2-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '3-2-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_2_7()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el número menor y el número mayor de cada serie.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-2-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '3-2-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_2_8()",
        titulo: "<center><h5><span>Selecciona</span> el número anterior al número mostrado en cada caso.<br> <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-2-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '3-2-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_2_9()",
        titulo: "<center><h5><span>Selecciona</span> el número posterior  al número mostrado en cada caso.<br> <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-2-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '3-2-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_10()",
        titulo: "<center><h5><span class='ftitulo'>Compara</span> las cantidades utilizando los símbolos <span><, > o =</span>.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-2-10",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>