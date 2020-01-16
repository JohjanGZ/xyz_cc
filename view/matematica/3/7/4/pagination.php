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
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_17() {
    $("#ventana").load(ruta + '3-7-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_7_17()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-7-17",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>