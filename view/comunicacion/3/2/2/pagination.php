<script type="text/javascript">
function Page_6() {
    start_6();
    inicio();
    count = 3;
}

function Page_7() {
    start_7();
    inicio();
    count = 3;
}

var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '2-3-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_3_6()",
        titulo: "<center><h5><span>Observa</span> atentamente la imágen y responde las preguntas.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-3-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-3-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_7()",
        titulo: "<center><h5><span>Observa</span> atentamente la imágen y responde las preguntas.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-3-7",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>