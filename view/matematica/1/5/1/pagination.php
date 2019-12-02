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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '1-5-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_1_5_1()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> las centenas con los materiales de base 10 que les correspondan.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "1-5-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '1-5-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_1_5_2()",
        titulo: "<center><h5><span class='ftitulo'>Completa.</span></h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "1-5-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '1-5-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_1_5_3()",
        titulo: "<center><h5><span class='ftitulo'>Cuenta  y selecciona</span> las centenas.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "1-5-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '1-5-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_1_5_4()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> y <span class='ftitulo'>completa</span>. Guíate del ejemplo.</h5></center>", 
        restaurar: "start_4()",
        dir: ruta,
        cod: "1-5-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '1-5-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_5_5()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona.</span></h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-5-5",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>