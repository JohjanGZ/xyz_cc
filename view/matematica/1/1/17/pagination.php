<script type="text/javascript">

function Page_28() {
    start_28();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_28() {
    $("#ventana").load(ruta + '1-1-28/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_28()",
        titulo: "<center><h5><span>Observa</span> los caminos que han recorrido los animales. Luego, en los recuadros <span>selecciona</span> de la lista, las respuestas correspondientes.</h5></center>",
        restaurar: "start_28()",
        dir: ruta,
        cod: "1-1-28",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>