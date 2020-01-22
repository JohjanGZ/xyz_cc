<script type="text/javascript">
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

var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_2() {
    $("#ventana").load(ruta + '2-2-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_2_2()",
        titulo: "<center><h5><span>Observa</span> atentamente la imagen y responde las preguntas.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-2-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '2-2-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_3()",
        titulo: "<center><h5><span>Observa</span> atentamente la imagen y responde las preguntas.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-2-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>