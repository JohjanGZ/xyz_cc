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
    $("#ventana").load(ruta + '1-6-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_1_6_1()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "1-6-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '1-6-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_1_6_2()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "1-6-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '1-6-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_1_6_3()",
        titulo: "<center><h5><span class='ftitulo'>Señala</span> los meses que tienen 31 días.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "1-6-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '1-6-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_1_6_4()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el calendario y <span class='ftitulo'>marca</span> la respuesta correcta.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "1-6-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '1-6-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_1_6_5()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> cada mes con el orden que le corresponde en el calendario.</h5></center>", 
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-6-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '1-6-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_1_6_6()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> cada mes con el orden que le corresponde en el calendario.</h5></center>", 
        restaurar: "start_6()",
        dir: ruta,
        cod: "1-6-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '1-6-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_1_6_7()",
        titulo: "<center><h5><span class='ftitulo'>Seleciona</span> los días en los que asistes al colegio.</h5></center>",  
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-6-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '1-6-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_8()",
        titulo: "<center><h5><span class='ftitulo'>Seleciona</span> la palabra ‘antes’ o ‘después’ según corresponda.</h5></center>",  
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-6-8",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>