<script type="text/javascript">
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
function start_5() {
    $("#ventana").load(ruta + '3-8-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_8_5()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> y cuenta las figuras de cada recuadro.<br> <span class='ftitulo'>Escribe</span> la cantidad total y la tercia de las figuras. </h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-8-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '3-8-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_8_6()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> y cuenta las figuras de cada recuadro.<br> <span class='ftitulo'>Escribe</span> la cantidad total y la tercia de las figuras. </h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-8-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '3-8-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_8_7()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> correctamente el recuadro que indica la tercia de cada número.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-8-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '3-8-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_8_8()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> según corresponda. </h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-8-8",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>