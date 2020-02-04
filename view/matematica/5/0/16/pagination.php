<script type="text/javascript">

function Page_24() {
    start_24();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 24do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_24() {
    $("#ventana").load(ruta + '5-0-24/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_24()",
        titulo: "<center><h5><span>Analiza</span> la siguiente tabla y <span>responde</span> las preguntas. Para ello <span>selecciona</span> de la lista la letra <span>V</span> si es verdadero o <span>F</span> si es falso según corresponda.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "5-0-24",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>