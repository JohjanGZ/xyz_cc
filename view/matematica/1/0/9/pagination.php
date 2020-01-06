<script type="text/javascript">

function Page_10() {
    start_10();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_10() {
    $("#ventana").load(ruta + '1-0-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_10()",
        titulo: "<center><h5><span>Selecciona</span> las pelotas que están lejos de la caja.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-0-10",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>