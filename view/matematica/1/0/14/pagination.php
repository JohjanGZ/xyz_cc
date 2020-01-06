<script type="text/javascript">

function Page_22() {
    start_22();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_22() {
    $("#ventana").load(ruta + '1-0-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_22()",
        titulo: "<center><h5><span>Observa</span> las imágenes y <span>selecciona</span> el criterio de agrupación adecuado.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-0-22",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>