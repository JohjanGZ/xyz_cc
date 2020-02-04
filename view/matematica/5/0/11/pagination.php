<script type="text/javascript">

function Page_17() {
    start_17();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 17do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_17() {
    $("#ventana").load(ruta + '5-0-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_17()",
        titulo: "<center><h5><span>Lee</span> los siguientes enunciados. Luego, <span>selecciona</span> de la lista la letra <span>V</span> si es verdadero o <span>F</span> si es falso según corresponda.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "5-0-17",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>