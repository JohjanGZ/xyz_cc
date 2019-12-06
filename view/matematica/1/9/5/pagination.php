<script type="text/javascript">
function Page_21() {
    start_21();
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
var cant = 24;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_21() {
    $("#ventana").load(ruta + '1-9-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_1_9_21()",
        titulo: "<center><h5><span class='ftitulo'>Halla</span> el valor de cada elemento.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-9-21",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '1-9-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_9_24()",
        titulo: "<center><h5><span class='ftitulo'>Halla</span> el valor de cada elemento.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-9-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '1-9-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_9_25()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el valor del corazón en cada caso.  </h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-9-25",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>