<script type="text/javascript">

function Page_5() {
   
    start_5();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;

var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_5() {
    $("#ventana").load(ruta + '4-2-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_2_5()",
        titulo: "<center><h5><span>Observa</span> los números. Luego, <span>selecciona</span> de la lista los signos <span>></span>,<span><</span> o <span>=</span>, según corresponda.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "4-2-5",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>