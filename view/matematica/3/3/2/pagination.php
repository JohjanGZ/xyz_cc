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
function Page_12() {
    start_12();
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
    $("#ventana").load(ruta + '3-3-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_3_9()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> el cuadro.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-3-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '3-3-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_3_10()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el avioncito que traslada a 42 pasajeros.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-3-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '3-3-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_3_11()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el trencito que cuesta 37 soles.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-3-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '3-3-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_3_12()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número que ha sido representado en el ábaco.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-3-12",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>