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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '1-8-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_1_8_1()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> y cuenta las figuras de cada recuadro.<br> <span class='ftitulo'>Escribe</span> la cantidad total y la mitad de las figuras. </h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "1-8-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '1-8-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_1_8_2()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> y cuenta las figuras de cada recuadro.<br> <span class='ftitulo'>Escribe</span> la cantidad total y la mitad de las figuras. </h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "1-8-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '1-8-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_1_8_3()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> según corresponda. </h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "1-8-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '1-8-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_8_4()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> según corresponda. </h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "1-8-4",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>