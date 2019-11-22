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
var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_20() {
    $("#ventana").load(ruta + '1-9-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_1_9_20()",
        titulo: "<center><h5><span>Completa</span> las oraciones con las palabras del recuadro.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-9-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '1-9-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_1_9_21()",
        titulo: "<center><h5><span>SOPA DE LETRAS</span></h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-9-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '1-9-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_9_22()",
        titulo: "<center><h5><span>Completa</span> las frases con las palabras que se dan.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-9-22",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>