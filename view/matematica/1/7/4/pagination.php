<script type="text/javascript">

function Page_5() {
    start_5();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_5() {
    $("#ventana").load(ruta + '1-7-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_7_5()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> las tablas.</h5></center>", 
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-7-5",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>