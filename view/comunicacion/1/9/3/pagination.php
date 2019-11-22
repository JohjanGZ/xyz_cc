<script type="text/javascript">
function Page_lectura_9_3() {
    start_lectura_9_3();
    inicio();
    count = 3;
}

function Page_9() {
    start_9();
    inicio();
    count = 3;
}
var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_lectura_9_3() {
    $("#ventana").load(ruta + 'lectura1-9-1-3/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_1_9_3()",
        titulo: "<center><h5><span class='ftitulo'>Un Poema</span></h5></center>",
        restaurar: "start_lectura_9_3()",
        dir: ruta,
        cod: "lectura1-9-1-3",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '1-9-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_9_9()",
        titulo: "<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-9-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>