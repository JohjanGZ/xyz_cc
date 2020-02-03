<script type="text/javascript">

function Page_13() {
   
    start_13();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_13() {
    $("#ventana").load(ruta + '4-1-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_1_13()",
        titulo: "<center><h5><span>Coloca</span> o <span>inserta</span> el signo <span>x</span>, entre las cifras de los números resaltados; de tal manera que se cumpla la igualdad</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "4-1-13",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>