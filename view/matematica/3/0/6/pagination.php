<script type="text/javascript">
function Page_23() {
    start_23();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_23() {
    $("#ventana").load(ruta + '3-0-23/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_0_23()",
        titulo: "<center><h5> <span class='ftitulo'>Selecciona</span> el par ordenado en el que se ubican los siguientes objetos:</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-0-23",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>