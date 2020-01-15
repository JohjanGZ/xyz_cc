<script type="text/javascript">
function Page_10() {
    start_10();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 3do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '3-3-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_10()",
        titulo: "<center><h5><span>Selecciona</span> las imagenes que contengan las herramientas del policía.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-3-10",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>