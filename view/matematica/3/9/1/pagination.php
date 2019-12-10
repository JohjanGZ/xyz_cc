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
    $("#ventana").load(ruta + '3-9-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_3_9_1()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> los sumandos correspondientes en los recuadros y <span class='ftitulo'>resuelve</span> la operación.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "3-9-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '3-9-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_9_2()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> las siguientes sumas:</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-9-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '3-9-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_9_3()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los recuadros con los sumandos y la suma total según corresponda.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-9-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '3-9-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_9_4()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los recuadros según el número de objetos y <span class='ftitulo'>realiza</span> la suma.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-9-4",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>