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
    $("#ventana").load(ruta + '5-1-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_1_9()",
        titulo: " <center><h5><span>Selecciona</span> que objeto es mayor que el otro.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "5-1-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>