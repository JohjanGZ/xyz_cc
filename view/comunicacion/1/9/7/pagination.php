<script type="text/javascript">
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
var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_23() {
    $("#ventana").load(ruta + '1-9-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_1_9_23()",
        titulo: "<center><h5><span>Observa</span> las  imágenes y luego completa las oraciones con un verbo.</h5></center>",
         
        restaurar: "start_23()",
        dir: ruta,
        cod: "1-9-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '1-9-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_9_24()",
        titulo: "<center><h5><span>Indica</span>qué está haciendo cada personaje.</h5></center>",
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
        titulo: "<center><h5>Ahora <span>encuentra</span>  los verbos en la sopa de letras..</h5></center>",
       
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