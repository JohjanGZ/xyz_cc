<script type="text/javascript">

function Page_7() {
    start_7();
    inicio();
    count = 3;
}

var cant = 1;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_7() {
    $("#ventana").load(ruta + '1-9-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_9_7()",
        titulo: "<center><h5><span>Señala</span> qué oraciones son exclamativas.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-9-7",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>