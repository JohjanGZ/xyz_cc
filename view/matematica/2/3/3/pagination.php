<script type="text/javascript">


function Page_11() {
    start_11();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant/cant;

var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_11() {
    $("#ventana").load(ruta + '2-3-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_11()",
        titulo: "<center><h5><span>Completa</span> las operaciones.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-3-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>