<script type="text/javascript">
function Page_4() {
    start_4();
    inicio();
    count = 3;
}


var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_4() {
    $("#ventana").load(ruta + '1-6-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_4()",
        titulo: "<center><h5><span class='ftitulo'>Resuelve</span> las siguientes adiciones:</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "1-6-4",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>