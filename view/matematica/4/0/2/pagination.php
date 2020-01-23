<script type="text/javascript">

function Page_6() {
    start_6();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_6() {
    $("#ventana").load(ruta + '4-0-6/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_6()",
        titulo: "<center><h5><span>Lee</span> los siguientes conjuntos. Luego <span>selecciona</span> de la lista la letra <span>V</span> si es conjunto vacío o <span>U</span>, si es unitario según corresponda.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "4-0-6",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>