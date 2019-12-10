<script type="text/javascript">
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
function Page_11() {
    start_11();
    inicio();
    count = 3;
}


var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_9() {
    $("#ventana").load(ruta + '3-6-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_6_9()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la hora que señala cada reloj.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-6-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '3-6-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_6_10()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> la hora que señala cada reloj y <span class='ftitulo'>marca</span> la alternativa correcta.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-6-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '3-6-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_6_11()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> la hora que señala cada reloj y <span class='ftitulo'>marca</span> la alternativa correcta.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-6-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>