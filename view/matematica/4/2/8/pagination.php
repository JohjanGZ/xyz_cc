<script type="text/javascript">

function Page_15() {
    start_15();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;

var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_15() {
    $("#ventana").load(ruta + '4-2-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_2_15()",
        titulo: "<center><h5><span>Observa</span> y <span>arrastra</span> los pares ordenados en el plano cartesiano según corresponda.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "4-2-15",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>