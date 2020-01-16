<script type="text/javascript">
function Page_16() {
    start_16();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_16() {
    $("#ventana").load(ruta + '3-2-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_16()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes adiciones.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-2-16",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>