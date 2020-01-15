<script type="text/javascript">

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_3() {
    $("#ventana").load(ruta + '5-3-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_3_3()",
        titulo: "<center><h5><span>Selecciona</span> el conjunto en donde todos los animales tienen dos patas.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "5-3-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>