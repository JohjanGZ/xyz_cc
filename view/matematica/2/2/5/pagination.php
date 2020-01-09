<script type="text/javascript">


function Page_19() {
   start_19();
   inicio();
   count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_19() {
    $("#ventana").load(ruta + '2-2-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_19()",
        titulo: " <center><h5><span>Resuleve</span> las siguientes adiciones:</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-2-19",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>