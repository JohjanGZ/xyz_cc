<script type="text/javascript">
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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_20() {
    $("#ventana").load(ruta + '3-2-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_3_2_20()",
        titulo: "<center><h5><span class='ftitulo'>Cuenta</span> las figuras geométricas y coloca un aspa (x) según la cantidad que corresponde.</h5></center>",     
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-2-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '3-2-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_3_2_21()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> coloca un aspa (x) en el gráfico de barras para saber cuántas flores hay de cada una.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-2-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '3-2-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_3_2_22()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> la mesa de trabajo y <span class='ftitulo'>escribe</span> las cantidades.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-2-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '3-2-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_3_2_23()",
        titulo: "<center><h5><span class='ftitulo'>Compara y coloca</span> un aspa (x) según corresponda.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-2-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '3-2-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_3_2_24()",
        titulo: "<center><h5><span class='ftitulo'>Compara y coloca</span> un aspa (x) según corresponda.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "3-2-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '3-2-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_25()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> las cantidades de útiles en el gráfico de barras.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "3-2-25",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>