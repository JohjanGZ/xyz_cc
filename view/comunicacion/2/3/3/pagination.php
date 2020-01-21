<script type="text/javascript">
function Page_7() {
    start_7();
    inicio();
    count = 3;
}

var cant = 5;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_7() {
    $("#ventana").load(ruta + '2-3-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_7()",
        titulo: "<center><h5><span>Completa</span> el mapa semántico de los estados del agua <span>arrastrando las palabras</span>.</h5></center>",
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