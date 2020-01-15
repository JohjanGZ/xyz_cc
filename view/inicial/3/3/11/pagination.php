<script type="text/javascript">
function Page_11() {
    start_11();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 3do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_11() {
    $("#ventana").load(ruta + '3-3-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_11()",
        titulo: "<center><h5><span>Selecciona</span> los medios de transporte que van por la tierra.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-3-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>