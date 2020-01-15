<script type="text/javascript">
function Page_9() {
    start_9();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 3do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_9() {
    $("#ventana").load(ruta + '3-3-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_9()",
        titulo: "<center><h5><span>Selecciona</span> los circulos que contengan las herramientas del zapatero.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-3-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>