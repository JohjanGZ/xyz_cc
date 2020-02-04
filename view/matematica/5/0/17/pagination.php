<script type="text/javascript">

function Page_25() {
    start_25();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 25do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_25() {
    $("#ventana").load(ruta + '5-0-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_25()",
        titulo: "<center><h5><span>Analiza</span> la siguiente tabla y <span>responde</span> las preguntas. Para ello <span>selecciona</span> de la lista la respuesta correcta según corresponda.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "5-0-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>