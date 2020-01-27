<script type="text/javascript">

function Page_6() {
   
    start_6();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;

var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '4-2-6/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_2_6()",
        titulo: "<center><h5><span>Relaciona</span> los números con sus respectivas lecturas.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "4-2-6",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>