<script type="text/javascript">
function Page_12() {
    start_12();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 3do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_12() {
    $("#ventana").load(ruta + '3-3-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_12()",
        titulo: "<center><h5><span>Selecciona</span> los medios de transporte que van por aire.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-3-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>