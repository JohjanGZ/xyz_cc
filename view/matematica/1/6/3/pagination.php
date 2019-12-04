<script type="text/javascript">
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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_12() {
    $("#ventana").load(ruta + '1-6-12/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_1_6_12()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> la hora con lo que señala cada reloj.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-6-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-6-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_6_13()",
        titulo: "<center><h5><span class='ftitulo'>Lee</span> los siguientes problemas y <span class='ftitulo'>señala</span> la alternativa correcta.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-6-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '1-6-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_14()",
        titulo: "<center><h5><span class='ftitulo'>Lee</span> los siguientes problemas y <span class='ftitulo'>señala</span> la alternativa correcta.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-6-14",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>