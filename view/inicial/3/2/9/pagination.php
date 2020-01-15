<script type="text/javascript">
function Page_9() {
    start_9();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_9() {
    $("#ventana").load(ruta + '3-2-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_9()",
        titulo: "<center><h5><span>Selecciona</span> las imágenes que muestran el buen uso del agua.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-2-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>